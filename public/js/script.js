 $(document).ready(function () {

 	$(".search").Watermark("Sök");


 	$('.hidden-menubtn').click(function() {
		$('.navmenu-hidden').slideToggle('slow', function() {
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
            });
     
    return false;
    });

});