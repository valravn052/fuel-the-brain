@extends('layouts.app')
@section('content')

		<div class="container">
			<div class="image">
			  <img src="{{ asset('img/home.jpg') }}" alt="image" style="height:400px">
			</div>
			<div class="text">
			  <h1>Help you to become confident in English.</h1>
			  <div class=" m-2 pt-5 text-center">
				<a href="admin-home" class="btn btn-info btn-lg mr-5">Teacher</a>
				<a href="student" class="btn btn-info btn-lg ml-5">Student</a>
			</div>
			</div>
		  </div>
            <br>
            <br>

</div>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

@endsection