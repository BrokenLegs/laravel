@layout('master')
@section('content')
		<div class="offset1">

		{{render('partial.error')}}

			{{Form::open('/home/new', 'POST')}}
                {{Form::label('day', ('Dag'))}}
                    {{Form::text('day')}}
                {{Form::label('name', ('Namn'))}}
                    {{Form::text('name')}}
                {{Form::label('description', ('Description'))}}
                    {{Form::text('description')}}
                {{Form::label('price', ('Pris'))}}
                    {{Form::number('price')}}
                {{Form::submit('spara')}}
            {{Form::close()}}
        </div>
@endsection