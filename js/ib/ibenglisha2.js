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
			
	var score1 = Math.round((a/2 + b * (5/6) + c * (5/6) + d/2)*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (g == true && e == true) {
			if(score1 >= 0 && score1 <= 10	) {
				 score2 = 1;
				}
			else if(score1 > 10 && score1 <= 25) {
				 score2 = 2;
				}
			else if(score1 > 25 && score1 <= 36) {
				 score2 = 3;
				}
			else if(score1 > 36 && score1 <= 51) {
				 score2 = 4;
				}
			else if(score1 > 51 && score1 <= 66) {
				 score2 = 5;
				}
			else if(score1 > 66 && score1 <= 81) {
				 score2 = 6;
				}
			else if(score1 > 81 && score1 <= 100) {
				 score2 = 7;
				}
						
		}


	if (g == true && f == true) {
			if(score1 >= 0 && score1 <= 11) {
				 score2 = 1;
				}
			else if(score1 > 11 && score1 <= 24) {
				 score2 = 2;
				}
			else if(score1 > 24 && score1 <= 36) {
				 score2 = 3;
				}
			else if(score1 > 36 && score1 <= 51) {
				 score2 = 4;
				}
			else if(score1 > 51 && score1 <= 67) {
				 score2 = 5;
				}
			else if(score1 > 67 && score1 <= 81) {
				 score2 = 6;
				}
			else if(score1 > 81 && score1 <= 100) {
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