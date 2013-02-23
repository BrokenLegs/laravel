 $(document).ready(function () {

 	$(".search").Watermark("Sök");
 	$(".commentfield").Watermark("Fått en bra upplevelse här av oss på GreenCircle? Dela gärna med dig.");


 	$('.hidden-menubtn').click(function() {
		$('.navmenu-hidden').slideToggle('slow', function() {
		});
	});
	      

 	$('.menuclick a').click(function() {
        
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


$page=3;
$(window).scroll(function () {
    var ScrollTop = $(window).scrollTop();
    var scrollposition = $(document).height() - $(window).height() - 100;
    if((ScrollTop) > scrollposition){

        $.ajax({
            url: "http://laravel.dev/home/test?page=" + $page,
            success: function(html){
                
                if(html){
                    $id= $(html).attr('id');
                    if($('.listcomment').hasClass($id)){
                        $('.scroll').fadeOut('slow');
                        $('.loading').delay(200).fadeIn('slow');
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

