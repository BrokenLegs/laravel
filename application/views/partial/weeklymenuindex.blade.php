@foreach($weeklymenu as $weekly)
	<h3>{{$weekly->week}}</h3>
	<p>
		<strong>{{$weekly->name1}}</strong><br>
		{{$weekly->description1}}<br>
	</p>
	<p>
		<strong>{{$weekly->name2}}</strong><br>
		{{$weekly->description2}}<br>
	</p>
@endforeach