@extends('layouts.app')

@section('content')

    <form action="{{ route('writing-submit') }}" method="post">
        @csrf
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <h4>Part 1: Writing test</h4>
            <div class="text-right pr-3">
                <div class="timer " id="ten-countdown"></div>
            </div>
            <p>Word limit 150</p>
        </div>
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <p>Write about the following topic</p>
            <p class="font-weight-bold">
            	@foreach ($topic as $i)
            	{{ $i->topic_name }}
            	@endforeach
            </p>
        </div>

        <div class=" m-2  ">
            <label for="textarea"></label>
            <div class="form-outline  border border-dark bg-light">
                <textarea class="form-control" name="para" rows="10" placeholder="Start writing from here..."></textarea>
                
            </div>
        </div>

        {{-- <label for="textarea">Start writing from here:</label>
        <!-- Textarea 8 rows height -->
        <div class="form-outline m-2 border border-dark">
            <textarea class="form-control" id="textarea" rows="8"></textarea>
            
        </div> --}}

        

        <div class=" m-2 pt-2 pl-3 text-right">
            <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg">
        </div>
    </form>

<script>
    function countdown( elementName, minutes, seconds )
        {
            var element, endTime, hours, mins, msLeft, time;

            function twoDigits( n )
            {
                return (n <= 9 ? "0" + n : n);
            }

            function updateTimer()
            {
                msLeft = endTime - (+new Date);
                if ( msLeft < 1000 ) {
                    //element.innerHTML = "Time is up!";
                    window.location.replace("http://127.0.0.1:8000/student");
                } else {
                    time = new Date( msLeft );
                    hours = time.getUTCHours();
                    mins = time.getUTCMinutes();
                    element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                    setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
                }
            }

            element = document.getElementById( elementName );
            endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
            updateTimer();
        }

        countdown( "ten-countdown", 10, 0 );
</script>

@endsection

