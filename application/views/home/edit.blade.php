@layout('master')

@section('content')
	<div class="offset1 span4">
	<h3>Ändra till</h3>
	{{render('partial.error')}}
	{{Form::open('home/update', 'Put')}}
		{{Form::label('week', ('Vecka'))}}
			{{Form::text('week')}}
		{{Form::label('name1', ('Maträtt 1'))}}
			{{Form::text('name1')}}
		{{Form::label('description1', ('Beskrivning'))}}
			{{Form::text('description1')}}
		{{Form::label('name2', ('Maträtt 2'))}}
			{{Form::text('name2')}}
		{{Form::label('description2', ('Beskrivning'))}}
			{{Form::text('description2')}}
		
		{{Form::hidden('id', $weekly->id)}}</br>
		{{Form::submit('spara')}}
	{{Form::close()}}
	</div>
	<div class="span4">
		<h3>Nuvarande</h3><br>
			<h4>{{'Vecka: '.$weekly->week}}</h4><br>
		<p>
			<strong>{{'Maträtt 1: '.$weekly->name1}}</strong><br>
			{{'Beskrivning:'.$weekly->description1}}<br>
		</p>
		<p>
			<strong>{{'Maträtt 2: '. $weekly->name2 . ':-'}}</strong>	
			{{'Beskrivning:'.$weekly->description2}}<br>
		</p>
	</div>
@endsection