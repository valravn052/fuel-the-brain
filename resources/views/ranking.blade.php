@extends('layouts.app')

@section('content')
    <form>
        @csrf
        <div class="mt-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Ranking board</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Rank</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Marks</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach($ranks as $key => $rank)
                                  <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{ $rank->student_id }}</td>
                                    <td>{{ $rank->student_name }}</td>
                                    <td>{{ $rank->total_marks }}</td>
                                    
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

