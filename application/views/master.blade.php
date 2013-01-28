<!doctype html>
<html lang="en">
<head>
	{{HTML::Style('/css/style.css')}}
	{{HTML::Style('/css/slider.css')}}
	{{HTML::Style('/css/nivo-slider.css')}}
	{{HTML::Style('/css/default.css')}}
	{{HTML::Style('/css/bootstrap.css')}}
	{{HTML::Style('/css/bootstrap.min.css')}}
	{{HTML::Style('/css/bootstrap-responsive.css')}}
	{{HTML::Style('/css/bootstrap-responsive.min.css')}}
	{{HTML::script('/js/jquery-1.9.0.min.js')}}	
	{{HTML::script('/js/jquery.nivo.slider.js')}}
	{{HTML::script('/js/bootstrap.js')}}
	{{HTML::script('/js/bootstrap.min.js')}}
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: learning</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<div class="container">	
	<div class="offset1 span10 header">
		{{HTML::image('/img/greencircle3.gif', 'logo');}}
	</div>
		<div class="navbar offset1 span10">
		    <div class="navbar-inner">
		   		<ul class="nav">
		    		<li>{{HTML::link('/', 'Hem')}}</li>
					<li>{{HTML::link('home/menu', 'Vår mat')}}</li>
					<li>{{HTML::link('home/about', 'Om')}}</li>
			    </ul>
		    </div>
		</div>
		<div class="slider-wrapper theme-default offset1 span10">
            <div id="slider" class="nivoSlider">
            	<?php
					$dir = $_SERVER['DOCUMENT_ROOT'].'/img/sliderimg';
					$files = scandir($dir, 1);
					$files = array_diff(scandir($dir), array('..', '.', 'Thumbs.db'));
				?>
				@foreach($files as $file)
					<img src="/img/sliderimg/{{$file}}" data-thumb="" alt="{{$file}}" />	
				@endforeach
			</div>
        </div>
		<div class="content offset1 span10">
			@yield('content')
		</div>		
	</div>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>

