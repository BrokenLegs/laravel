 $(document).ready(function () {

 	$(".search").Watermark("Sök");
 	$(".commentfield").Watermark("Fått en bra upplevelse här av oss på GreenCircle? Dela gärna med dig.");


 	$('.hidden-menubtn').click(function() {
		$('.navmenu-hidden').slideToggle('slow', function() {
		});
	});

	//saker för rating sidan. 
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
	// slut på stuff för ratingsidan

});