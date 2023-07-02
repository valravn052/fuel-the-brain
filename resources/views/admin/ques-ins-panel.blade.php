<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question insert panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* .body{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        } */
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
            //background-color: blue;
        }
        .my-link-style:hover{
            text-decoration: underline;
        }
        .service-section{
            background-color: lightgrey;
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
    </style>
</head>

<div class="body">



    <header class="bg-primary">
        <nav class="navbar">
            <div class="container-fluid">
                <a href="home" class="m-auto  text-center">
                    <div class="text-white font-weight-bold text-center">
                        <img class="p-1" style="width:50px;" class="" src="{{ asset('img/book_logo.jpg') }}" alt="logo" >
                        <span class="text-white">Fuel The Brain</span>
                        
                    </div>
                </a>
              
                <ul class="nav justify-content-right pr-3">
                    <li class="nav-item"><a class="my-link-style nav-link text-white" href="#">Wasik</a></li>
                    <li class="nav-item"><a class="my-link-style nav-link text-white" href="#">Logout</a></li>
                </ul>
              
            </div>
          </nav>
    </header>


    <main>
        
        <div class="mt-5">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-center">
                            Question Insert Panel
                        </div>
                        <div class="card-body">
                        
                            
                            <a href="reading_insert" class="m-2"><img src="{{ asset('img/reading.jpg') }}" class="rounded float-start m-2" alt="image" style="height:200px"></a>
                            <a href="writing_ques_ins" class="m-3"><img src="{{ asset('img/writing.jpg') }}" class="rounded " alt="image" style="height:200px"></a>
                            <a href="listening_insert" class="m-3"><img src="{{ asset('img/listening.jpg') }}" class="rounded" alt="image" style="height:200px"></a>
                            <a href="speaking_insert" class="me-3"><img src="{{ asset('img/speaking.jpg') }}" class="rounded float-end pe-3 " alt="image" style="height:230px"></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class=" m-2 pt-2 pl-3 text-right">
            <a href="writing" class="btn btn-success btn-lg">Submit and next page</a>
        </div> --}}

    </main>

    
    

    <footer class=" d-flex justify-content-center">
        <p class="text-white font-weight-bold">A self improvement tracker</p>
    </footer>
    

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>