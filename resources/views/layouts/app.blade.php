<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel the Brain</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
    <!-- FONT-AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app_style.css') }}">
</head>

<div class="body">



    <header class="header bg-primary">

        <div class="row">
            <div class="m-auto pb-3 text-center">
                <a href="home" class="m-auto pb-3 text-center">
                <div>
                    <p class="text-white font-weight-bold text-center">
                        <img class="p-1" style="width:50px;" class="" src="{{ asset('img/book_logo.jpg') }}" alt="logo" >
                        <span class="text-white">Fuel The Brain</span>
                    </p>
                </div>
            </a>
            </div>
            
            <ul class="nav justify-content-right pr-3">
                <li class="nav-item"><a class="my-link-style nav-link text-white" href="#">Wasik</a></li>
                <li class="nav-item"><a class="my-link-style nav-link text-white" href="#">Logout</a></li>
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    
    

    <footer class=" d-flex justify-content-center">
        <p class="text-white font-weight-bold">A self improvement tracker</p>
    </footer>
    

</div>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>