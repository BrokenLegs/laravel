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
						{{Form::radio('myvote', 1,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 2,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 3,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 4,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 5,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 6,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 7,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 8,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 9,'', array('class="myvoteradio"'));}}
						{{Form::radio('myvote', 10,'', array('class="myvoteradio"'));}}
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
		<div class="offset1 span7 commentsContainer">
			@foreach($comments as $comment)
				<div class="comment">
					<div class="span2">
					</div>
					{{$comment->user_uid;}}
				</div>
			@endforeach
		</div>
	</div>
	<script>
		$('.myvoteradio').mouseover(function(){
			$value = $(this).attr('value');
			$('.votevalue').html($value+'/10');	
				
			$('.wsx').mouseout(function(){
				if($('.myvoteradio').hasClass('selected')){
					$selectedValue = $('.selected').attr('value');
						$('.votevalue').html($selectedValue+'/10');
				}else{
					$value = $(this).attr('value');
					$('.votevalue').html('-/10');
				}
			});
		});
		$('.myvoteradio').click(function(){
			
			$(this).addClass('selected').siblings().removeClass('selected');;
			$('.myvoteradio').css("");	
		});
	</script>
@endsection
