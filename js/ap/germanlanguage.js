

function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC3').value);
			c = parseInt(document.getElementById('PC').value);
			d = parseInt(document.getElementById('C').value);
			e = parseInt(document.getElementById('DR').value);
			f = parseInt(document.getElementById('PS').value);
			g = document.getElementById('curve1').checked;
			h = document.getElementById('curve2').checked;
			
			var score1 = Math.round(((40/39) * a + (50/31) * b)*100)/100;
					score2 = Math.round(((15/20) * c + (45/9) * d + (25/36) * e + (25/6) * f)*100)/100;
					score3 = Math.round((score1 + score2)*100)/100;
			var score4;
			var percent = Math.round((score3/200)*100);
			
			
		//	alert(score1);
		//	alert(score3);
		
			if (g == true) {
			if(score3 >= 0 && score3 <= 88) {
				 score4 = 1;
				}
			else if(score3 > 88 && score3 <= 115) {
				 score4 = 2;
				}
			else if(score3 > 115 && score3 <= 144) {
				 score4 = 3;
				}
			else if(score3 > 144 && score3 <= 170) {
				 score4 = 4;
				}
			else if(score3 > 170 && score3 <= 200) {
				 score4 = 5;
				}
		}
	if (h == true) {
		if (score3 >= 0 && score3 <= 94) {
			score4 = 1;
			}
		if (score3 > 94 && score3 <= 128) {
			score4 = 2;
			}
		if (score3 > 128 && score3 <= 154) {
			score4 = 3
			}
		if (score3 > 154 && score3 <= 174) {
			score4 = 4;
			}
		if (score3 > 174 && score3 <= 200) {
			score4 = 5;
			}
	}
	
	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = score2;
	document.getElementById("score3").innerHTML = score3 + "(" + percent + "%)";
	document.getElementById("score4").innerHTML = score4;
	
	
	var a = document.getElementById("score4");
	
	
	
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
		a.style.color = "green";
		}
	if (a.value == 5) {
		a.style.color = "black";
		}
	
	
	choosecolors();	
		
		
		
		
		
		
		
		
			
			
}







$(document).ready(function () {
		
		
		calculate();
		
		
		
		
	});