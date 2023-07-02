@extends('layouts.app')

@section('content')

    
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <h4>Part 2: Reading test</h4>
            <div class="text-right pr-3">
                <div class="timer " id="ten-countdown"></div>
            </div>
            <p>Read the passage below and answer the questions</p>
        </div>

        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <p>
                @foreach ($topic as $i)
                {{ $i->topic_name }}
                @endforeach
            </p>
            
        </div>
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <p class="font-weight-bold">
                <ul class="quiz">
    <li>
        <h4>How many letters are there in "JS"?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question0" value="A" /><span
                        >2</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="B" /><span
                        >1</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="C" /><span
                        >3</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question0" value="D" /><span
                        >4</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4>How many letters are there in "BMX"?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question1" value="A" /><span
                        >2</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="B" /><span
                        >1</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="C" /><span
                        >3</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question1" value="D" /><span
                        >4</span
                    ></label
                >
            </li>
        </ul>
    </li>
    <li>
        <h4>How many letters are there in "A"?</h4>
        <ul class="choices">
            <li>
                <label
                    ><input type="radio" name="question2" value="A" /><span
                        >2</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="B" /><span
                        >1</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="C" /><span
                        >3</span
                    ></label
                >
            </li>
            <li>
                <label
                    ><input type="radio" name="question2" value="D" /><span
                        >4</span
                    ></label
                >
            </li>
        </ul>
    </li>
</ul>
            </p>
        </div>

        <div class=" m-2 pt-2 pl-3 text-right">
            <!-- {{-- <button type="button" class="btn btn-success btn-lg">Submit and next page</button> --}} -->
            <a href="listening" class="btn btn-success btn-lg">Submit</a>
            <!-- <input type="submit" name="submit" class="btn btn-success btn-lg"> -->
            <!-- <a href="listening" class="btn">Submit</a> -->
        </div>
        <br>
        <br>
        <br>

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

