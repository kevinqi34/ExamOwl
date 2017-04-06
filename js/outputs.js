
function get_url() {
  pathArray = location.href.split( '/' );
  protocol = pathArray[0];
  host = pathArray[2];
  url = protocol + '//' + host;
  return url;
}

function output (output_content) {
  var validator = false;
  if (output_content == null) {
    url_msg();
    if (url_msg()) {
    validator = true;
    }
  } else if (output_content == "conversion") {
    conversion_msg();
    validator = true;
  } else {
    standardmsg(output_content);
    validator = true;
  }

  if (validator == true) {
    $('#transparent, #output').show();
    $('html').css({
    'overflow': 'hidden',
    'height': '100%'
    });

    var top = $(document).scrollTop();
    $('#transparent').css('top' ,top);
    var window_height = $(window).height();
    var block_height = $('#output').height();
    top = top + (window_height - block_height)/2;

    $('#output').css('top' ,top);
  }

  $('#transparent, #output_exit').click(function() {
    $('#transparent, #output').hide();
    $('html').css({
    'overflow': 'auto',
    'height': 'auto'
    });
  });
}



function standardmsg (content) {
  var msg = '';
      msg += '<p class="output_msg">';
      msg += content;
      msg += '</p>';
      $('#output_content').html(msg);
}


function conversion_msg() {

  var sign_up_url = get_url() + "/user/signup.php";
  var msg = '';
  msg+= '<div>';
  msg+= '<h2>Join today and earn $10</h2>';
  msg+= '<p> - Participate in community discussions.</p>';
  msg+= '<p> - Get answers to all your testing concerns and questions.</p>';
  msg+= '<p> - Earn IQ points for community participation and get rewarded $10 for 1000 IQ.</p>'
  msg+= '<a href="' + sign_up_url + '">Sign Up Now</a>';
  msg+= '</div>';

  $('#output_content').html(msg);

}


function conversion_optimization() {

  // Wait 5 secs
  setTimeout(function(){
    if(Cookies.get('popup') != 'seen'){
      // Set Cookie
      Cookies.set('popup', 'seen', { expires: 30 }); // Set For 1 Month
      // Conversion Message
      output("conversion");
    } else {
      return;
    }
 }, 5000);

}




function url_msg() {
  var msg = getUrlParameter('msg');
  if (msg != null) {
    standardmsg(msg);
    return true;
  }
}


$(document).ready(function() {
  // Outputs
  output();

  conversion_optimization();


});
