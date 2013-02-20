@layout('master')
@section('content')
<?php 
	$score=7.7;
	$amount_of_votes = 122;
	
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
				<d>{{$score}}</d>
				{{HTML::image('img/star.jpg', '', array('class = "ratingstar"'));}}
			</div> 
			<div class="myvote span4">
				<span class="qaz">Ditt betyg</span>
				<div class="wsx">
					{{Form::open()}}
						{{Form::radio('myvote', 1,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 2,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 3,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 4,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 5,'checked', array('class'=>'star'));}}
						{{Form::radio('myvote', 6,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 7,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 8,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 9,'', array('class'=>'star'));}}
						{{Form::radio('myvote', 10,'', array('class'=>'star'));}}
						<span class="votevalue"> -/10</span>
					{{Form::close()}}

				</div><br>
				<span class="ratestats">Snitt {{$score}}/10 av {{$amount_of_votes}}st röster</span>
			</div>
		</div>
		<div class="offset1 span7">
			<h3>Kommentera</h3>	
			{{Form::textarea('name', '', array('class="commentfield"'));}}
			{{Form::submit('Skicka', array('class="btn-primary send"'))}}
		</div>
		<div class="offset1 span8 commentsContainer">
			<hr>
			<h4>Detta har andra skrivit</h4>
			<hr>
			<ul class="commentlist">
				<li>
					@foreach($comments as $comment)
						<div class="commentContent">
							<div class="fbimgContainer span1">
								{{HTML::image($comment->image , '', array('class="fbimg"'));}}
							</div>
							<div class="span6">
								{{HTML::link($comment->facebooklink, $comment->name, array('target="_blank" class="fblink"'));}}
							</div>
							<div class="span6">

								<p>{{$comment->body}}</p>
							</div>
						</div>
						<div class="span7"><hr></div>
					@endforeach
				</li>
			</ul>
			
		</div>
	</div>
	
@endsection
