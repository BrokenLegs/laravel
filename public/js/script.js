 $(document).ready(function () {

 	$(".search").Watermark("Sök");
 	$(".commentfield").Watermark("Fått en bra upplevelse här av oss på GreenCircle? Dela gärna med dig.");


 	$('.hidden-menubtn').click(function() {
		$('.navmenu-hidden').slideToggle('slow', function() {
		});
	});

	//saker för rating sidan.
        $('.star').rating({
            callback: function(value, link){
                // alert('ajax starting');
                // $.ajax({
                //     type: "POST",
                //     url: "laravel.dev/home/rate.php",
                //     async: false,
                //     data: 
                //         {value: value},
                //         success: function(success){
                //             alert('Success ' + success);
                //         },
                //         error: function(error){
                //             alert('error ' + error.responseText);
                //         }
                // }).done(function( msg ){
                //     alert('ajax done' + msg);
                // });

                alert(value);
            }
        });

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
	

 	$('.menubtn a').click(function() {

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


 	        $(function(){
                $('#commentlist').scrollPagination({
                    'contentPage': 'http://laravel.dev/home/test', // the url you are fetching the results
                    'contentData': {}, // these are the variables you can pass to the request, for example: children().size() to know which page you are
                    'scrollTarget': $(window), // who gonna scroll? in this example, the full window
                    'heightOffset': 10, // it gonna request when scroll is 10 pixels before the page ends
                    'beforeLoad': function(){ // before load function, you can display a preloader div
                        $('#loading').fadeIn();

                    },
                    'afterLoad': function(elementsLoaded){ // after loading content, you can use this function to animate your new elements
                    	alert('afterload!!!!');
                         $('#loading').fadeOut();
                         var i = 0;
                         $(elementsLoaded).fadeInWithDelay();
                
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
