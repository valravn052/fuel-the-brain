@extends('layouts.app')

@section('content')
    <form>
        @csrf
        <div class="mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Writing Evaluation</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Marks</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   @foreach($files as $key => $file)
                                  <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $file->student_id }}</td>
                                    <td>{{ $file->student_name }}</td>
                                    <td> <textarea rows="10" cols="30">{{ $file->paragraph }}</textarea> </td>
                                    <td><input type="number" name="mark" style="width:50px"></td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
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

