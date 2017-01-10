function resend_email () {
    $("#send_email").click(function() {
        var base_url = window.location.origin;
      // Send Ajax Request
        $.ajax({
          type: "POST",
          url: base_url + '/controllers/user/verify_email.php',
          async: false,
          data: {},
          success:function(result) {
            // Append Result into Body
            $("#message").text("An email has been sent.");
          }

        });
    });






}





$(document).bind('ready',function() {
  //resend email
  resend_email();

});
