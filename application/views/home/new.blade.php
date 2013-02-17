@layout('master')
@section('content')
		<div class="offset1">
			{{Form::open('/home/new', 'POST')}}
                <div class="span8">
                    {{Form::label('week', ('week'))}}
                    {{Form::text('week')}}
                </div>
                <div class="span4 leftcol">
                    {{Form::label('name1', ('Namn1'))}}
                    {{Form::text('name1')}}
                    {{Form::label('description1', ('Description1'))}}
                    {{Form::text('description1')}}
                </div>
                <div class="span4 rightcol">
                    {{Form::label('name2', ('Namn2'))}}
                    {{Form::text('name2')}}
                    {{Form::label('description2', ('Description2'))}}
                    {{Form::text('description2')}}
                </div>
                <div>
                    {{Form::submit('spara')}}
                </div>
            {{Form::close()}}
        </div>
@endsection