@layout('master')

@section('content')
	<div class="span4 rightcol">
		<h1>Sökord: {{ $word }}</h1>
		@foreach($results as $result)

			<div class="dailydish">               
				{{'<strong>'.$result->day.':'. $result->name . '</strong><span class="price">'.$result->price.':-</span><br>'}}
				{{$result->description}}  
			</div>

		@endforeach
	</div>

@endsection
