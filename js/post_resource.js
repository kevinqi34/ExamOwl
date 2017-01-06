function redirect() {
    var error = false;
    var redirect = getUrlParameter('redirect');
    var error = $('#error').text();
    if (redirect && error == 0) {
      window.location.href = "./resources.php?id=" + redirect;
    } else if (error == "Success"){
      window.location.reload();
    }

}

function upvote() {

  $('.vote').click(function(e) {
    e.preventDefault();
    var error = $('#error').text();
    if (error == "login") {
      msg = "Please login to upvote resources.";
      window.location.href = "./user/login.php?msg=" + msg;
      return false;
    }
  });

  // Upvote Form Submit
  $("div.content_wrapper").find("div.up").each(function() {
    $(this).click(function() {
      var id = $(this).attr("id");
      id = id.split("_");
      id = id[2];
      // Submit form
      $('#upvote_'  + id).submit();
    });
  });


}

function downvote() {
  // Downvote Form Submit
  $("div.content_wrapper").find("div.down").each(function() {
    $(this).click(function() {
      var id = $(this).attr("id");
      id = id.split("_");
      id = id[2];
      // Submit form
      $('#downvote_'  + id).submit();
    });
  });


}


function pagination () {
  $("#load_more").click(function() {
    // Get Variables
    var size = $('#load_size').val();
    var value = $('#load_val').val();
    var id = $('#load_id').val();
    var base_url = window.location.origin;
    $('#load').remove();
    // Send Ajax Request
      $.ajax({
        type: "POST",
        url: base_url + '/controllers/resources/pagination.php',
        async: false,
        data: { page_number: value, size: size, id:id},
        success:function(result) {
          // Append Result into Div
          $('div.content_wrapper').append(result);
        }

      });
    });

}


$(document).bind('ready ajaxComplete',function() {
  // redirect to forum
  redirect();
  // Upvotes
  upvote();
  // Downvotes
  downvote();
  //start pagination
  pagination();

});
