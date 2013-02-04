@layout('master')

@section('content')

	@foreach($results as $result)

		{{ $result->name }}

	@endforeach


@endsection
