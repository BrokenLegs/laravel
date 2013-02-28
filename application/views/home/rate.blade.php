@layout('master')
@section('content')
	@include('partial.fbmodal')

	<?php 
	if (Session::has('errormsg'))
	{
	    $errormsg = Session::get('errormsg');
		echo $errormsg;
	} 
?>

	<div class="offset1 span7">
		<h3 class="center">Betyg</h3>
	</div>
	<div class="span9"> 
		<div class="offset1 span7">
			@if(is_null($user_data))
				@include('partial.facebooklogin')
			@endif
    	</div>
		<div class="offset1 span7 rating">
			<div class="span1">
				<d>{{ round($average, 1) }}</d>
				{{ HTML::image('img/star.jpg', '', array('class' => 'ratingstar"')); }}
			</div> 
			<div class="myvote span4">
				<span class="qaz">Ditt betyg</span>
				<div class="wsx">
					@if($yourRating == "")
						{{ Form::open('home/rating','POST',array('id'=>'ratingform')) }}
							{{ Form::radio('myvote', 1,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 2,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 3,'', array('class'=>'star')); }}
				   			{{ Form::radio('myvote', 4,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 5,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 6,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 7,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 8,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 9,'', array('class'=>'star')); }}
							{{ Form::radio('myvote', 10,'checked', array('class'=>'star'));}}
							<span class="votevalue">-/10</span>
							{{Form::submit('Betygsätt', array('class' => 'btn-primary send'))}}
					@else 
						{{Form::open('','',array('id'=>'ratingform'))}}
							@for($i=1; $i<=10; $i++)
								@if($i != $yourRating)
									{{ Form::radio('myvoted', $i,'', array('class'=>'star', 'disabled'=>'disabled')); }}
								@else
									{{ Form::radio('myvoted', $i,'checked', array('class'=>'star', 'disabled'=>'disabled')); }}
								@endif
							@endfor
							<span class="votevalue">{{ $yourRating; }}/10</span>
					@endif
					<br />
						
					{{ Form::close() }}

				</div><br>
				<span class="ratestats">Snitt {{ round($average, 1) }}/10 av {{ $count }}st röster</span>
			</div>
		</div>
		<div class="offset1 span7">
			<h3>Kommentera</h3>	
			{{Form::open('home/comment', 'post')}}
				{{Form::textarea('body', '', array('class="commentfield"'));}}
				{{Form::submit('Skicka', array('class="btn-primary send"'))}}
			{{Form::close()}}
		</div>
		<div class="offset1 span8 commentsContainer">
			<hr>
			<h4>Detta har andra skrivit</h4>
			<hr>
			<ul id="commentlist" class="commentlist" >
				@foreach($comments as $comment)
					<li>
						<div class="commentContent">
							<div class="fbimgContainer span1">
								{{HTML::image($comment->image , '', array('class'=>'fbimg'));}}
							</div>
							<div class="span6">
								{{HTML::link($comment->facebooklink, $comment->name, array('target="_blank" class="fblink"'));}}
								(
									<span class="commentmeta">
									<?php 
										$format = 'Y-m-d H:i:s';
										$date = DateTime::createFromFormat($format, $comment->created_at);
									?>
									{{$date->format('M d ,Y')}}
									{{$date->format(' H:i')}}
								</span>
								)
							</div>
							<div class="span6">
								<p>{{$comment->body}}</p>
							</div>
						</div>
						<div class="span7"><hr></div>
					</li>
				@endforeach
			</ul>
			<div class="scroll offset2 span6">Scrolla ner för fler kommentarer</div>
			<div id="loading" class="loading offset2 span6">Slut på kommentarer</div>
		</div>
	</div>	
@endsection
					
