<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Insert module</title>

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        
        footer{
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 40px;
            background-color: navy;
            font-size: 25px;
            font-family: 'Delicious Handrawn', cursive;
        }
        .header{
            height: 40px;
            /* background-color: blue; */
        }
        .my-link-style:hover{
            text-decoration: underline;
        }
        .service-section{
            background-color: lightgrey;
        }
    </style>
</head>

<div class="body">

    <header class="header bg-primary">
        <div class="row">
            <a href="home" class="m-auto pb-3 text-center">
                <div>
                    <p class="text-white font-weight-bold text-center">
                        <img class="p-1" style="width:50px;" class="" src="{{ asset('img/book_logo.jpg') }}" alt="logo" >
                        <span class="text-white">Fuel The Brain</span>
                    </p>
                </div>
            </a>
        </div>
    </header>
    
    <div class="card border-0">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h2>Writing Ques insert</h2>
            </div>

            @if (Session::has('msg'))
            <br>
            <br>
            <br>
            <div class="row">
              <div class="card-body">
                <div class="alert alert-success" role="alert">
                  {{ Session::get('msg') }}
                </div>
              </div>
            </div>
            <br>
            @endif
            
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                Insert a question
                            </div>
                            <div class="card-body">
                                <form action="{{ route('writingInsert.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="ques" class="form-label">Question</label>
                                        <input type="text" class="form-control" id="ques" value="" name="topic_name">
                                        @error('topic_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
    
                                      </div>
                                      <div class="d-grid mb-2">
                                        <input type="submit" class="btn btn-primary" value="Insert">
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
          
    </div>
    
    
    
    <footer class="text-center">
        <p class="text-white font-weight-bold">A self improvement tracker</p>
    </footer>
    

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script> --}}

</html>