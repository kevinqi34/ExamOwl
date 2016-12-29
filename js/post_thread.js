function redirect() {
  var error = false;
  var redirect = getUrlParameter('redirect');
  var title = getUrlParameter('title');
  var id = getUrlParameter('cat-id');
  var error = $('#error').text();

  if (redirect && error == 0) {
    window.location.href = "./?cat-id=" + redirect;
  } else if (error == "Redirect") {
    msg = "Please login to comment on posts.";
    window.location.href = "./user/login.php?msg=" + msg;
  } else if (error == "Success"){
    window.location.reload();
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
