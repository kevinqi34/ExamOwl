
function calculate() {

	
	
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC3').value);
			c = document.getElementById('curve1').checked; 
			
			//alert(a);
		//	alert(b);
			
			
	if ((a + b) > 85 ) {
		
		alert("Please enter valid numbers.");
		
		
		
		}else {
			
			
			
			
			
			
		var score1 = Math.round(85 - (5/4) * a - b);
		
		//alert(score1);
				
				
				
				
				if (c == true) {
					
					
						var array = [
									200,
									
						
									200,
									200,
									200,
									200,
									200,
									200,
									
									
									200,
									200,
									200,
									200,
									200,
															
						
						
								
									200,
									200,
									210,
									210,
									220,
									
									220,
									230,
									230,
									240,
									240,
									
									250,
									250,
									260,
									260,
									270,
									
									270,
									280,
									280,
									290,
									290,
									
									300,
									300,
									310,
									310,
									320,
									
									320,
									330,
									330,
									340,
									340,
									
									350,
									350,
									360,
									360,
									370,
									
									370,
									380,
									380,
									390,
									390,
									
									400,
									400,
									410,
									410,
									420,
									
						
									430,								
									440,								
									450,								
									460,									
									470,
							
									480,				
									490,							
									500,								
									510,								
									520,
									
									530,						
									540,							
									550,							
									560,
									560,
									
									570,								
									570,							
									580,
									580,								
									590,
									
									590,						
									600,
									600,					
									610,									
									620,
									
									630,						
									640,															
									650,							
									660,			
									670,
									
						
									680,
									680	,						
									690,
									690,
									700	,
														
									700,
									710,						
									710,								
									720,
									720,
									
									730,						
									740,										
									750,
									760,
									770,
									
									780,
									790,
									790,
									800,
									800
								
									

						
						];


					





					}
				
				
				
				



		
		
			
	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = array[score1 + 21];
	
	
	
	
	
	
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