<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@section('title')
			hello internet
		@show
	</title>
	<meta name="viewport" content="width=device-width" />

	{{ HTML::style('assets/css/bootstrap.min.css')}}
	{{ HTML::style('assets/css/bootstrap-theme.min.css')}}
	{{ HTML::style('assets/css/style.css')}}
</head>
<body>
	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Project name</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>

	    <div class="container">

	    	@yield('content')

	    </div><!-- /.container -->	

	
	
	
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/bootstrap-confirm.js.min.js') }}
	{{ HTML::script('assets/js/waypoints.min.js') }}
	@yield('js')
</body>
</html>