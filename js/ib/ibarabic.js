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
			if(score1 >= 0 && score1 <= 20) {
				 score2 = 1;
				}
			else if(score1 > 20 && score1 <= 31) {
				 score2 = 2;
				}
			else if(score1 > 31 && score1 <= 48) {
				 score2 = 3;
				}
			else if(score1 > 48 && score1 <= 61) {
				 score2 = 4;
				}
			else if(score1 > 61 && score1 <= 74) {
				 score2 = 5;
				}
			else if(score1 > 74 && score1 <= 88) {
				 score2 = 6;
				}
			else if(score1 > 88 && score1 <= 100) {
				 score2 = 7;
				}
						
		}


	if (g == true && f == true) {
			if(score1 >= 0 && score1 <= 13) {
				 score2 = 1;
				}
			else if(score1 > 13 && score1 <= 30) {
				 score2 = 2;
				}
			else if(score1 > 30 && score1 <= 45) {
				 score2 = 3;
				}
			else if(score1 > 45 && score1 <= 60) {
				 score2 = 4;
				}
			else if(score1 > 60 && score1 <= 72) {
				 score2 = 5;
				}
			else if(score1 > 72 && score1 <= 85) {
				 score2 = 6;
				}
			else if(score1 > 85 && score1 <= 100) {
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