@extends('layouts.app')
@section('content')

    <form action="{{ route('listening_insert-submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="service-section m-2 pt-2 pl-3 border border-secondary">
            <h4 align="center">Upload Audio Files</h4>
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
                <p>Maximum file size: 10MB</p>
            </div>
            
        </div>

        <h5>Questions</h5>
        <div class="mb-2">
            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques1" placeholder="Question 1">
                </div>
                    <div class="form-floating ms-5 pb-2 w-50">
                        <input type="text" class="form-control" name="ca1" placeholder="Correct Answer">
                    </div>
            </div><br>

            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques2" placeholder="Question 2">
                </div>
                    <div class="form-floating ms-5 pb-2 w-50">
                        <input type="text" class="form-control" name="ca2" placeholder="Correct Answer">
                    </div>
            </div><br>

            <div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control border-danger" name="ques3" placeholder="Question 3">
                </div>
                    <div class="form-floating ms-5 pb-2 w-50">
                        <input type="text" class="form-control" name="ca3" placeholder="Correct Answer">
                    </div>
            </div><br>
        </div>

        <div class=" m-2 pt-2 pl-3 text-right">
            <input type="submit" name="submit" class="btn btn-success btn-lg">
        </div>
        <br>
        <br>
        <br>
    </form>

<script src="{{ asset('/js/upload.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection

