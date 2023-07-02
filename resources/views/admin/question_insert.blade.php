@extends('layouts.app')
@section('content')

    <form action="{{ route('question_insert-submit') }}" method="post">
    @csrf    
        <h5>Questions on the comprehension: </h5>
        <div class="mb-2">
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques1" placeholder="Question 1">
                </div>
                <div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt1a" placeholder="Option 1">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt1b" placeholder="Option 2">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt1c" placeholder="Option 3">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt1d" placeholder="Option 4">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="ca1" placeholder="Correct Answer">
                        </div>
                    </div>
            </div><br>
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques2" placeholder="Question 2">
                </div><div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt2a" placeholder="Option 1">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt2b" placeholder="Option 2">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt2c" placeholder="Option 3">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt2d" placeholder="Option 4">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="ca2" placeholder="Correct Answer">
                        </div></div>
            </div><br>
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques3" placeholder="Question 3">
                </div><div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt3a" placeholder="Option 1">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt3b" placeholder="Option 2">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt3c" placeholder="Option 3">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt3d" placeholder="Option 4">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="ca3" placeholder="Correct Answer">
                        </div></div>
            </div><br>
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques4" placeholder="Question 4">
                </div><div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt4a" placeholder="Option 1">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt4b" placeholder="Option 2">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt4c" placeholder="Option 3">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt4d" placeholder="Option 4">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="ca4" placeholder="Correct Answer">
                        </div></div>
            </div><br>
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques5" placeholder="Question 5">
                </div><div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt5a" placeholder="Option 1">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt5b" placeholder="Option 2">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt5c" placeholder="Option 3">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="opt5d" placeholder="Option 4">
                        </div>
                        <div class="form-floating ms-5 pb-2 w-50">
                            <input type="text" class="form-control" name="ca5" placeholder="Correct Answer">
                        </div></div>
            </div>       
        </div>
        
        <div class="d-grid m-2 pt-2 pl-3 text-center">
            <!-- <a href="#" class="btn btn-success btn-lg btn-block">Submit</a> -->
            <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg btn-block">
            <br>
            <br>
            <br>
        </div>
    </form>

@endsection