
	
@foreach ($weeklymenu as $weekly)   
	<div class="dailydish">
		<div class="offset1 span7">               
			{{'<h3 class="center">'.$weekly->week. '</h3>' }}
		</div>
		<div class="offset1 span4 leftcol">
			<strong>{{$weekly->name1}}</strong><br>
			{{$weekly->description1}}
		</div> 
		<div class="offset1 span3 rightcol">
			<strong>{{$weekly->name2}}</strong><br>
			{{$weekly->description2}}  
		</div>  
		<!--
		<div class="offset1 span8">
			{{'<span class="price">' . HTML::link_to_route('edit_home', 'ändra', array($weekly->id)) . '</span>'}}   
			{{Form::open('/home/'.$weekly->id, 'DELETE')}}
				{{Form::hidden('id', $weekly->id)}}                           
				{{Form::submit('delete')}}
			{{Form::close()}}
		</div>
		-->
	</div>
@endforeach