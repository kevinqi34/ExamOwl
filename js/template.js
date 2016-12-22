

// Get URL variables
function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};



function mobile_menu() {
	$('#mob-menu').click(function() {
		$('#left').animate({left:'0px'},400);

		// Change Icon
		$(this).hide();
		$('#close-mob-menu').show();



	});



	// Close Animation
	$('#close-mob-menu').click(function() {
		$('#left').animate({left:'-220px'},400);

		// Change Icon
		$(this).hide();
		$('#mob-menu').show();

	});



	// Reset when resize
	$(window).resize(function() {
		width = $(this).width();
		if (width > 1000) {
			$('#left').css("left","0px");
			$('#close-mob-menu, #mob-menu').hide();

		} else {
			$('#left').css("left","-220px");
			$('#mob-menu').show();
      $('#close-mob-menu').hide();
		}

	});


}


$( document ).ready(function() {
	// Start Mobile Menu
	mobile_menu();



});
