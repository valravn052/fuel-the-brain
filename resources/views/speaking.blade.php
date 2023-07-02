@extends('layouts.app')
@section('content')

    <form action="{{ route('speaking-submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <h4>Part 4: Speaking test</h4>
            <div class="text-right pr-3">
                <div class="timer " id="ten-countdown"></div>
            </div>
            <p>Think about the topic and give a little speach on it.</p>
        </div>
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <p class="font-weight-bold">
                @foreach ($topic as $i)
                {{ $i->topic_name }}
                @endforeach
            </p>
        </div>
            <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <div class="text-center">
                <div>
                    <i class="mb-2 p-2 fa-5x fa-solid fa-cloud-arrow-up"></i>
                </div>

            </div>

            {{-- upload button --}}
            <div class="panel">
                <div class="button_outer">
                    <div class="btn_upload">    
                        <input type="file" id="upload_file" name="audioFile">
                        Upload Audio
                    </div>
                    <div class="processing_bar"></div>
                    <div class="success_box"></div>
                </div>
            </div>
            <div class="text-center" style="font-size: 10px">
                <p>File format: MP3</p>
            </div>
            
        </div>

        <div class=" m-2 pt-2 pl-3 text-right">
            <input type="submit" name="submit" class="btn btn-success btn-lg">
        </div>
    </form>

<script src="{{ asset('/js/upload.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

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

