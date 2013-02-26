 $(document).ready(function () {
 	$(".search").Watermark("Sök");
 	$(".commentfield").Watermark("Fått en bra upplevelse här av oss på GreenCircle? Dela gärna med dig.");

 	$('.hidden-menubtn').click(function() {
		$('.navmenu-hidden').slideToggle('slow', function() {
		});
	});	      

	//saker för rating sidan
    ///////////////Original
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
            var targetPage = $(this).attr('href');
			targetPage += " .content-wrapper";
        	$('.content').load(targetPage, function() {
        			$("#myTab a").click(function (e) {
			            e.preventDefault();
			            $(this).tab("show");
			        });

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
     
            });
    return false;
    });
$page=2;
$(window).scroll(function () {
    var ScrollTop = $(window).scrollTop();
    var scrollposition = $(document).height() - $(window).height() - 150;
    if((ScrollTop) > scrollposition){

        $.ajax({
            url: "http://laravel.dev/home/test?page=" + $page,
            success: function(html){

                if(html){
                    $id= $(html).attr('id');
                    if($('.listcomment').hasClass($id)){
                        $('.scroll').fadeOut('slow', function(){
                        $('.loading').fadeIn('slow');
                        });
                        die();
                    }
                    $('#commentlist').append(html);
                    $('.listcomment').fadeIn('slow');
                    $page++;
                }  
            }
        });
    }
});
    

       


});

