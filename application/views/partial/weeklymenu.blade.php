

@foreach ($weekly as $day)   
	<div class="dailydish">               
		{{'<strong>'.$day->day.':'. $day->name . '</strong><span class="price">'.$day->price.':-</span><br>'}}
		{{$day->description}}  
		{{'<span class="price">' . HTML::link_to_route('edit_home', 'ändra', array($day->id)) . '</span>'}}     
		<!--{{Form::open('/home/'.$day->id, 'DELETE')}}
			{{Form::hidden('id', $day->id)}}                           
			{{Form::submit('delete')}}
		{{Form::close()}}-->
	</div>
@endforeach