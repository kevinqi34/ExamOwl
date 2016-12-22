
function calculate() {
	var a = parseInt(document.getElementById('PS').value);
			b = parseInt(document.getElementById('ES').value);
			c = parseInt(document.getElementById('EES').value);
			d = document.getElementById('curve1').checked;
			
			
			var score1 = Math.round((b + a)*100)/100;
					score2;
					score3 = Math.round((c)*100)/100;
			var score4;
			
			
	if (d == true) {
			if(score1 >= 0 && score1 <= 18) {
				 score2 = "E";
				}
			else if(score1 > 18 && score1 <= 28) {
				 score2 = "D";
				}
			else if(score1 > 28 && score1 <= 37) {
				 score2 = "C";
				}
			else if(score1 > 37 && score1 <= 47) {
				 score2 = "B";
				}
			else if(score1 > 47 && score1 <= 60) {
				 score2 = "A";
				}
				
			if(score3 >= 0 && score3 <= 8) {
				 score4 = "E";
				}
			else if(score3 > 8 && score3 <= 16) {
				 score4 = "D";
				}
			else if(score3 > 16 && score3 <= 24) {
				 score4 = "C";
				}
			else if(score3 > 24 && score3 <= 30) {
				 score4 = "B";
				}
			else if(score3 > 30 && score3 <= 36) {
				 score4 = "A";
				}				
				
				
				
				
				
				
				
		}
			
			
	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = score2;
	document.getElementById("score3").innerHTML = score3;
	document.getElementById("score4").innerHTML = score4;
	
	
	
	var a = document.getElementById("score2");
	
	
	
	if (a.value == "E") {
		a.style.color = "red";
		}
	if (a.value == "D") {
		a.style.color = "orange";
		}
	if (a.value == "C") {
		a.style.color = "#33CC00";
		}
	if (a.value == "B") {
		a.style.color = "green";
		}
	if (a.value == "A") {
		a.style.color = "black";
		}
		
		
		
var a = document.getElementById("score4");
	
	
	
	if (a.value == "E") {
		a.style.color = "red";
		}
	if (a.value == "D") {
		a.style.color = "orange";
		}
	if (a.value == "C") {
		a.style.color = "#33CC00";
		}
	if (a.value == "B") {
		a.style.color = "green";
		}
	if (a.value == "A") {
		a.style.color = "black";
		}	


choosecolors();	





}




	$(document).ready(function () {
		
		
		calculate();
		
		
		
		
	});


















