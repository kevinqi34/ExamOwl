function output (output_content) {
  var validator = false;
  if (output_content == null) {
    url_msg();
    if (url_msg()) {
    validator = true;
    }
  }else {
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

});
