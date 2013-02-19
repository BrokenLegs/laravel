@layout('master')

@section('content')	

<ul class="nav nav-tabs" id="myTab">
    	<li class="active bigbtncatering"><a href="#catering">Catering</a></li>
    	<li class="bigbtncatering"><a href="#cateringmenu">Catering meny</a></li>
    </ul> 
	<div class="tab-content">
		<div class=" tab-pane active" id="catering">
			<div class=" span5 leftcol">
				<h3>Catering</h3>
				<p>
					Har du fest, har ditt företag konferens eller andra aktiviteter? Kom och beställ hos oss. Vi erbjuder
					allt från en god fralla till riktigt smaskiga smörgåstårtor men det slutar inte bara där! <br>
					Det går även
					att beställa alla våra varmrätter som vi har att erbjuda till lunch eller middag. Se catering menyn för
					priser.
				</p>
			</div>
			<div class=" span4 rightcol">
				<?php 
					$dir = $_SERVER['DOCUMENT_ROOT'].'/img/catering/images/';
					$files = scandir($dir, 1);
					$files = array_diff(scandir($dir), array('..', '.', 'Thumbs.db'));
				?>
				@foreach($files as $file)
					<div class="rightcol imgdiv">
						<img src="/img/catering/images/{{$file}}" data-thumb="" alt="{{$file}}" />	
					</div>
				@endforeach			
			</div>
			
		</div>

		<div class="tab-pane" id="cateringmenu">
			<div class="span4">
				dsf
			</div>
			<div class="offset1 span4">
				asdf
			</div>
		</div>
	</div>
	 <script> 
        $('#myTab a').click(function (e) {
		    e.preventDefault();
		    $(this).tab('show');
    	});
    </script>
@endsection