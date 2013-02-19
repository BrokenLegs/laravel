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
 	$('.menubtn a').click(function() {

            var targetPage = $(this).attr('href');
			targetPage += " .content-wrapper";

        	$('.content').load(targetPage, function() {
        			$("#myTab a").click(function (e) {
			            e.preventDefault();
			            $(this).tab("show");
			        });
            });
    return false;
    });


 	        $(function(){
                $('.commentlist').scrollPagination({
                    'contentPage': '.home/rate', // the url you are fetching the results
                    'contentData': {}, // these are the variables you can pass to the request, for example: children().size() to know which page you are
                    'scrollTarget': $(window), // who gonna scroll? in this example, the full window
                    'heightOffset': 10, // it gonna request when scroll is 10 pixels before the page ends
                    'beforeLoad': function(){ // before load function, you can display a preloader div
                        $('#loading').fadeIn();
                    },
                    'afterLoad': function(elementsLoaded){ // after loading content, you can use this function to animate your new elements
                         $('#loading').fadeOut();
                         var i = 0;
                         $(elementsLoaded).fadeInWithDelay();
                         if ($('.commentlist').children().size() > 100){ // if more than 100 results already loaded, then stop pagination (only for testing)
                            $('#nomoreresults').fadeIn();
                            $('.commentlist').stopScrollPagination();
                         }
                    }
                });

                // code for fade in element by element
                $.fn.fadeInWithDelay = function(){
                    var delay = 0;
                    return this.each(function(){
                        $(this).delay(delay).animate({opacity:1}, 200);
                        delay += 100;
                    });
                };
                       
            });
        










});
