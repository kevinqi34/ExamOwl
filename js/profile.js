
function admin() {
  // On load
  $("#posts").css("border-color","skyblue");

  $('#posts').click(function() {
    $('div.dashboard').hide();
    $('div.admin').hide();
    $('div.records').hide();
    $('div.profile_posts').show();
    $('div.settings').hide();
    $('#settings').css("border-color","black");
    $("#posts").css("border-color","skyblue");
    $("#dashboard").css("border-color","black");
    $("#admin").css("border-color","black");
    $("#records").css("border-color","black");
  });

  $('#dashboard').click(function() {
    $('div.dashboard').show();
    $('div.admin').hide();
    $('div.profile_posts').hide();
    $('div.records').hide();
    $('div.settings').hide();
    $('#settings').css("border-color","black");
    $("#posts").css("border-color","black");
    $("#dashboard").css("border-color","skyblue");
    $("#admin").css("border-color","black");
    $("#records").css("border-color","black");
  });

  $('#admin').click(function() {
    $('div.dashboard').hide();
    $('div.admin').show();
    $('div.profile_posts').hide();
    $('div.records').hide();
    $('div.settings').hide();
    $('#settings').css("border-color","black");
    $("#posts").css("border-color","black");
    $("#dashboard").css("border-color","black");
    $("#admin").css("border-color","skyblue");
    $("#records").css("border-color","black");
  });

  $('#records').click(function() {
    $('div.dashboard').hide();
    $('div.admin').hide();
    $('div.records').show();
    $('div.profile_posts').hide();
    $('div.settings').hide();
    $('#settings').css("border-color","black");
    $("#posts").css("border-color","black");
    $("#dashboard").css("border-color","black");
    $("#admin").css("border-color","black");
    $("#records").css("border-color","skyblue");
  });

  $('#settings').click(function() {
    $('div.dashboard').hide();
    $('div.admin').hide();
    $('div.records').hide();
    $('div.profile_posts').hide();
    $('div.settings').show();
    $('#settings').css("border-color","skyblue");
    $("#posts").css("border-color","black");
    $("#dashboard").css("border-color","black");
    $("#admin").css("border-color","black");
    $("#records").css("border-color","black");
  });


}




$(document).ready(function() {
	// admin
	admin();

});
