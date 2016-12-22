$(document).ready(function () {
	

		
			a = document.getElementById('sl').checked;
			b = document.getElementById('hl').checked;
	
	//alert(vers);
	
	//initialize divs
	
	if (a == true) {
	
		$('#calculate').css("display","none");
		$('#calculate2').css("display","block");
		calculate2();		
		
	
	}else if (b == true) {
		
		$('#calculate').css("display","block");
		$('#calculate2').css("display","none");
		calculate();
		
		}else {
			
			alert("error");
			
			
		}
		
	
		
		
		
		
	
	
	
	
});



function changediv() {
			a = document.getElementById('sl').checked;
			b = document.getElementById('hl').checked;

	if (a == true) {
	
		$('#calculate').css("display","none");
		$('#calculate2').css("display","block");
		$( "#sl" ).prop( "checked", true );
		$( "#hl" ).prop( "checked", false );
		$("#curve1").prop("checked",false);
		$("#curve1sl").prop("checked",true);
		calculate2();		
		
	}else if (b == true) {
		
		$('#calculate').css("display","block");
		$('#calculate2').css("display","none");
		$( "#sl" ).prop( "checked", false );
		$( "#hl" ).prop( "checked", true );
		$("#curve1").prop("checked",true);
		$("#curve1sl").prop("checked",false);
		calculate();
		
		}else {
			
			alert("error");
			
			
		}
	
	
	}
