function calculate() {
	var a = parseInt(document.getElementById('P1').value);
			b = parseInt(document.getElementById('P2').value);
			c = parseInt(document.getElementById('P3').value);
			d = parseInt(document.getElementById('IS').value);
			e = document.getElementById('hl').checked;
			f = document.getElementById('curve1').checked;
			
			
			
			
		//	alert(e);
		//	alert(f);
		//	alert(g);
			
	var score1 = Math.round((0.5 * (a + b + c + d))*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (e == true && f == true) {
			if(score1 >= 0 && score1 <= 17) {
				 score2 = 1;
				}
			else if(score1 > 17 && score1 <= 31) {
				 score2 = 2;
				}
			else if(score1 > 31 && score1 <= 43) {
				 score2 = 3;
				}
			else if(score1 > 43 && score1 <= 55) {
				 score2 = 4;
				}
			else if(score1 > 55 && score1 <= 66) {
				 score2 = 5;
				}
			else if(score1 > 66 && score1 <= 78) {
				 score2 = 6;
				}
			else if(score1 > 78 && score1 <= 100) {
				 score2 = 7;
				}
						
		}


	
		//alert(score2);
		
		
	document.getElementById("score1").innerHTML = score1 + "(" + percent + "%)";
	document.getElementById("score2").innerHTML = score2;


var a = document.getElementById("score2");
	
	
	
	if (a.value == 1) {
		a.style.color = "red";
		}
	if (a.value == 2) {
		a.style.color = "orange";
		}
	if (a.value == 3) {
		a.style.color = "#33CC00";
		}	
		
	if (a.value == 4) {
		a.style.color = "lightgreen";
		}	
	if (a.value == 5) {
		a.style.color = "forestgreen";
		}
	if (a.value == 6) {
		a.style.color = "green";
		}
	if (a.value == 7) {
		a.style.color = "black";
		}
		








}



$(document).ready(function () {
		
		
		calculate();
		
		
		
		
	});