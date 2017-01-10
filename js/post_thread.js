
function get_url() {
  pathArray = location.href.split( '/' );
  protocol = pathArray[0];
  host = pathArray[2];
  url = protocol + '//' + host;
  return url;
}

function redirect() {
  var error = false;
  var redirect = getUrlParameter('redirect');
  var title = getUrlParameter('title');
  var id = getUrlParameter('cat-id');
  var error = $('#error').text();
  var url = get_url();
  var current_url = window.location.href;

  if (redirect && error == 0) {
    window.location.href = url + "/category/" + redirect + "/" + title;
  } else if (error == "Redirect") {
    msg = "Please login to comment on posts.";
    window.location.href = url + "/user/login.php?msg=" + msg;
  } else if (error == "Success"){
    window.location.href = url + "/data/redirect.php?url=" + current_url;
  }

}


function load_editor() {
  tinymce.init({ selector:'#text' });
}


$(document).ready(function() {
	// redirect to forum
	redirect();
  // load editors
  load_editor();

});
