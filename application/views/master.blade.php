<!doctype html>
<head>
	@include('includes.assets')
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: learning</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
@if(!is_null($user_data))
	@include('partial.logged_in_as')
@endif
	<div class="container">	

		<div class="offset1 span10 header">
			{{HTML::image('/img/Skylt_Green_Circle.png', 'header-background', array('id' => 'headerBackground'));}}		
				<div class="btn span6 hidden-menubtn only-mobile main-menubtn" >
					<a><i class="icon-reorder menu-icon"> Meny </i><a/>
				</div>
		</div>

		<div class="navmenu-hidden">
			@include('partial.nav')
		</div>

		<div id="navbar" class="navbar offset1 span10">
		    <div class="navbar-inner">
		   		@include('partial.nav')
			    <div id="search">
			    	{{Form::open('/home/search')}}
						{{Form::search('searchword', '', array('class'=>"search "));}}
					{{Form::close()}}
				</div>
		    </div>
		</div>
		<div class="slider-wrapper theme-default offset1 span10">
            <div id="slider" class="nivoSlider">
            	<?php
					$files = scandirectory('/img/sliderimg/');
				?>
				@foreach($files as $file)
					<img src="/img/sliderimg/{{$file}}" data-thumb="" alt="{{$file}}" />	
				@endforeach
				
			</div>
        </div>
		<div class="content offset1 span10">
			<div class="content-wrapper">
				@yield('content')
			</div>
		</div>		
	</div>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
    <script> 
        $("#myTab a").click(function (e) {
		    e.preventDefault();
		    $(this).tab("show");
    	});
    </script>
   
</body>
</html>

