$(document).ready(function () {

var vers = $('#version').val();

	//alert(vers);

	//initialize divs

	if (vers == "Pos2012") {

		$('#calculate').css("display","none");
		$('#calculate2').css("display","block");
		calculate2();


	}else if (vers == "Pre2012") {

		$('#calculate').css("display","block");
		$('#calculate2').css("display","none");
		calculate();

		}else {

			//alert("error");


		}
		
});



function changediv() {

	var vers = $('#version').val();
	if (vers == "Pos2012") {

		$('#calculate').css("display","none");
		$('#calculate2').css("display","block");
		$( "#curve2012" ).prop( "checked", true );
		$( "#curve1" ).prop( "checked", false );
		$( "#curve2" ).prop( "checked", false );
		calculate2();

	}else if (vers == "Pre2012") {

		$('#calculate').css("display","block");
		$('#calculate2').css("display","none");
		$( "#curve1" ).prop( "checked", true );
		$( "#curve2012" ).prop( "checked", false );
		$( "#curve2" ).prop( "checked", false );
		calculate();

		}else {

			//alert("error");


		}


	}
