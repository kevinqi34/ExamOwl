
function pagination() {
    $("#load_more").click(function() {
      // Get Variables
      var size = $('#load_size').val();
      var value = $('#load_val').val();
      var type = $('#load_type').val();
      var id = $('#load_id').val();
      var base_url = window.location.origin;
      $('#load').remove();
      // Send Ajax Request
        $.ajax({
          type: "POST",
          url: base_url + '/controllers/forum/pagination.php',
          async: false,
          data: { page_number: value, type: type, size: size, id:id},
          success:function(result) {
            // Append Result into Div
            $('#content_box').append(result);



          }

        });
      });

}


$(document).bind('ready ajaxComplete',function() {
  //start pagination
  pagination();

});
