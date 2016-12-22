
function calculate() {

	
	
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC3').value);
			c = document.getElementById('curve1').checked; 
			
			//alert(a);
		//	alert(b);
			
			
	if ((a + b) > 75 ) {
		
		alert("Please enter valid numbers.");
		
		
		
		}else {
			
			
			
			
			
			
		var score1 = Math.round(75 - (5/4) * a - b);
		
		//alert(score1);
				
				
				
				
				if (c == true) {
					
					
						var array = [
								290,
								290,
								300,
								310,
								310,
								320,
								330,
								330,
								340,
								350,
								350,
								360,
								370,
								370,
								380,
								390,
								390,
								400,
								410,
								420,
								430,
								430,
								440,
								450,
								450,
								460,
								470,
								470,
								480,
								480,
								490,
								500,
								510,
								510,
								520,
								530,
								530,
								540,
								540,
								550,
								560,
								570,
								570,
								580,
								580,
								590,
								600,
								600,
								610,
								610,
								620,
								630,
								630,
								640,
								640,
								650,
								650,
								660,
								670,
								670,
								680,
								690,
								690,
								700,
								700,
								710,
								720,
								720,
								730,
								730,
								740,
								750,
								750,
								760,
								760,
								770,
								770,
								780,
								780,
								790,
								790,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800,
								800
								
								
	
						
						
						];


					





					}
				
				
				
				



		
		
			
	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = array[score1 + 19];
	
	
	
	
	
	
	var a = document.getElementById("score2");
	
	
	
	
	
	
	if (a.value <= 300  && a.value > 0) {
		a.style.color = "red";
		}
	if (a.value <= 500 && a.value > 300) {
		a.style.color = "orange";
		}
	if (a.value <= 600 && a.value > 500) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 700 && a.value > 600) {
		a.style.color = "green";
		}
	if (a.value <= 800 && a.value > 700) {
		a.style.color = "black";
		}
	
	

	
	
	
}	
	
	
}
	
	
	$(document).ready(function () {
		
		
		calculate();
		
		
		
		
	});