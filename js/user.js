
function redirect() {
  var error = false;
  var redirect = getUrlParameter('redirect');
  var error = $('#error').text();
  var url = window.location.pathname;



  if (redirect == 'true' && error == 0) {
    var output = "Thank you for signing up. Please verify your email address by checking your email account."
    if (url == '/user/signup.php') {
    window.location.href = "../?output=" + output;
  } else {
    window.location.href = "../";
  }
  }

}



$(document).ready(function() {
	// redirect to forum
	redirect();



});
