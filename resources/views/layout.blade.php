<!DOCTYPE html>
<html>
<head>
    <title>Laravel Add To Cart Function - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
			<div class="row">
			
			<div class="col-lg-6 col-sm-12 col-12 text-left">
			<h1>Rahat Hameed<h1>
			</div>
			
			<div class="col-lg-6 col-sm-12 col-12 text-right">
				<a class="btn btn-success" href="{{ url('/cart') }}">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge  badge-danger">{{ count((array) session('cart')) }}</span>
				</a>			
			</div>
			
			</div>
        </div>
    </div>
</div>
  
<br/>
<div class="container">
  
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
  
    @yield('content')
</div>
  
@yield('scripts')
     
</body>
</html>