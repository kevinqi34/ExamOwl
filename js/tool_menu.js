// Menu Navigation

function menu(id) {
  $(id).find('div.category').click(function() {
  	var name = $(this).attr("id");
  	$(id).hide();
  	menu = name + "cat";
  	$('#' + menu).show();
  });

}

function submenu(id) {
  $(id).find('div.category').click(function() {
    var name = $(this).attr("id");
    if (name != "TOK") {
      $(id).hide();
    }
    pre = id.replace("cat","");
    menu = pre + name;
    $(menu).show();
  });

}


function back(id, option) {
    $(id).hide();
    $(option).show();

}


$(document).ready(function(){
  // Init Menus
  menu('#menu1');
  submenu('#APcat');
  submenu('#IBcat');
  submenu('#SATcat');




});
