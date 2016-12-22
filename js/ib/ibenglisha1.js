function calculate() {
	var a = parseInt(document.getElementById('WLA').value);
			b = parseInt(document.getElementById('P1').value);
			c = parseInt(document.getElementById('P2').value);
			d = parseInt(document.getElementById('IS').value);
			e = document.getElementById('sl').checked;
			f = document.getElementById('hl').checked;
			g = document.getElementById('curve1').checked;
			
			
		//	alert(e);
		//	alert(f);
		//	alert(g);
			
	var score1 = Math.round((a + b + c + d/2)*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (g == true && e == true) {
			if(score1 >= 0 && score1 <= 13) {
				 score2 = 1;
				}
			else if(score1 > 13 && score1 <= 28) {
				 score2 = 2;
				}
			else if(score1 > 28 && score1 <= 39) {
				 score2 = 3;
				}
			else if(score1 > 39 && score1 <= 52) {
				 score2 = 4;
				}
			else if(score1 > 52 && score1 <= 64) {
				 score2 = 5;
				}
			else if(score1 > 64 && score1 <= 77) {
				 score2 = 6;
				}
			else if(score1 > 77 && score1 <= 100) {
				 score2 = 7;
				}
						
		}


	if (g == true && f == true) {
			if(score1 >= 0 && score1 <= 13) {
				 score2 = 1;
				}
			else if(score1 > 13 && score1 <= 29) {
				 score2 = 2;
				}
			else if(score1 > 29 && score1 <= 41) {
				 score2 = 3;
				}
			else if(score1 > 41 && score1 <= 54) {
				 score2 = 4;
				}
			else if(score1 > 54 && score1 <= 67) {
				 score2 = 5;
				}
			else if(score1 > 67 && score1 <= 79) {
				 score2 = 6;
				}
			else if(score1 > 79 && score1 <= 100) {
				 score2 = 7;
				}
						
		}
		
		
		
		
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