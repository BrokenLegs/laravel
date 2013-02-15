@layout('master')

@section('content')
<div class="span5 leftcol">
	<p>
		Har du fest, har ditt företag konferens eller andra aktiviteter? Kom och beställ hos oss. Vi erbjuder
		allt från en god fralla till riktigt smaskiga smörgåstårtor men det slutar inte bara där! <br>
		Det går även
		att beställa alla våra varmrätter som vi har att erbjuda till lunch eller middag. Se catering menyn för
		priser.
	</p>
</div>
<div class="offset1 span3 rightcol">
	<?php
		$files = scandirectory('/img/sliderimg/');
	?>
	@foreach($files as $file)
		<img src="/img/sliderimg/{{$file}}" data-thumb="" alt="{{$file}}" />
	@endforeach
</div>


<div class="fbLogin span9">
	{{HTML::link('connect/session/facebook', 'Login with facebook', array('class' => 'btn'))}}
</div>
@endsection