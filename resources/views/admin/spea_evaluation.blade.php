@extends('layouts.app')
@section('content')

    <form action="{{ route('speaking-eval') }}" method="post">
        @csrf
        <div class="mt-5">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Evaluation</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Paragraph</th>
                                    <th scope="col">Answer</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach($files as $key => $file)
                                  <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $file->student_id }}</td>
                                    <td>{{ $file->student_name }}</td>
                                    <td>
                                        @foreach($item as $i)
                                        <audio controls>
                                            @php
                                                
                                                $fileContents = Storage::get('/public/app/public/audio/student/'.$i->file);
                                                $contentType = Storage::mimeType('/public/app/public/audio/student/'.$i->file);
                                                $base64 = base64_encode($fileContents);
                                            @endphp
                                            
                                                <source src="data:{{ $contentType }};base64,{{ $base64 }}" type="{{ $contentType }}">
                                                Your browser does not support the audio element.
                                            </audio>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($paras as $p)
                                            <textarea rows="5" cols="20">{{ $p->paragraph }}</textarea>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($ans as $a)
                                        {{ $a->ans }}
                                        @endforeach
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                    <table style="width:50%">
                          <tr>
                            <th>Student Id</th>
                            <th>Student Name</th>
                            <th>Writing Marks</th>
                            <th>Speaking Marks</th>
                            <th>Listening Marks</th>
                          </tr>
                          <tr>
                            <td> <input type="text" name="id"> </td>
                            <td> <input type="text" name="name"> </td>
                            <td> <input type="text" name="wri_mark"> </td>
                            <td> <input type="text" name="spe_mark"> </td>
                            <td> <input type="text" name="lis_mark"> </td>
                          </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class=" m-2 pt-2 pl-3 text-center">
            <input type="submit" name="submit" value="submit" class="btn btn-success btn-lg">
        </div>
    </form>
    <br>
    <br>
    <br>

@endsection



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

