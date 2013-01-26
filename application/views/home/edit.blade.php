@layout('master')

@section('content')
	<div class="offset1 span4">
	<h3>Ändra till</h3>
	{{render('partial.error')}}
	{{Form::open('home/update', 'Put')}}
		{{Form::label('day', ('Dag'))}}
			{{Form::text('day')}}
		{{Form::label('name', ('Namn'))}}
			{{Form::text('name')}}
		{{Form::label('description', ('Description'))}}
			{{Form::text('description')}}
		{{Form::label('price', ('Pris'))}}
			{{Form::number('price')}}
		{{Form::hidden('id', $weekly->id)}}</br>
		{{Form::submit('spara')}}
	{{Form::close()}}
	</div>
	<div class="span4">
		<h3>Nuvarande</h3><br>
		<h4>{{'Dag: '.$weekly->day}}</h4><br>
		<h4>{{'Namn: '.$weekly->name}}</h4><br>
		<h4>{{'Beskrivning:'.$weekly->description}}</h4><br>
		<h4>{{'Pris: '. $weekly->price . ':-'}}</h4>
	</div>
@endsection