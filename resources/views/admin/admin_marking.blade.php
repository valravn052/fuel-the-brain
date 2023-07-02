@extends('layouts.app')
@section('content')

    <form>
    @csrf 
        <div class="mt-5">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card" style="width:650px">
                        <div class="card-header text-center">
                            Marking panel
                        </div>
                        <div class="card-body">
                        
                            
                            
                                <span><a href="ques_insert"><img src="{{ asset('img/writing.jpg') }}" class="rounded float-start" alt="image"></a></span>
                                
                            
                            
                                <span class=""><a href="evaluate"><img src="{{ asset('img/speaking.jpg') }}" class="rounded float-end" alt="image"></a>
                            </span>

                            
                            
                            {{-- <img src="{{ asset('img/Admin-ins-img.jpg') }}" class="rounded float-start" alt="image">
                            <img src="{{ asset('img/admin-marking-img.jpg') }}" class="rounded float-end" alt="image"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class=" m-2 pt-2 pl-3 text-right">
            <a href="writing" class="btn btn-success btn-lg">Submit and next page</a>
        </div> --}}
    

</div>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

@endsection

