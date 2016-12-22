function calculate() {
	var a = parseInt(document.getElementById('P1').value);
			b = parseInt(document.getElementById('P2').value);
			c = parseInt(document.getElementById('IS').value);
			d = document.getElementById('hl').checked;
			e = document.getElementById('curve1').checked;
			
			
			
			
		//	alert(e);
		//	alert(f);
		//	alert(g);
			
	var score1 = Math.round((a * (1/2) + b * (5/8) + c * (5/6))*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (d == true && e == true) {
			if(score1 >= 0 && score1 <= 12) {
				 score2 = 1;
				}
			else if(score1 > 12 && score1 <= 25) {
				 score2 = 2;
				}
			else if(score1 > 25 && score1 <= 37) {
				 score2 = 3;
				}
			else if(score1 > 37 && score1 <= 48) {
				 score2 = 4;
				}
			else if(score1 > 48 && score1 <= 60) {
				 score2 = 5;
				}
			else if(score1 > 60 && score1 <= 71) {
				 score2 = 6;
				}
			else if(score1 > 71 && score1 <= 100) {
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



function calculate2() {
	var a = parseInt(document.getElementById('P1SL').value);
			b = parseInt(document.getElementById('P2SL').value);
			c = parseInt(document.getElementById('ISL').value);
			d = document.getElementById('sl').checked;
			e = document.getElementById('curve1sl').checked;
			
			
	//		alert(e);
	//	alert(d);
		//	alert(g);
			
	var score1 = Math.round((c + b * (2/3) + a * (8/5))*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (d == true && e == true) {
			if(score1 >= 0 && score1 <= 13) {
				 score2 = 1;
				}
			else if(score1 > 13 && score1 <= 26) {
				 score2 = 2;
				}
			else if(score1 > 26 && score1 <= 38) {
				 score2 = 3;
				}
			else if(score1 > 38 && score1 <= 48) {
				 score2 = 4;
				}
			else if(score1 > 48 && score1 <= 60) {
				 score2 = 5;
				}
			else if(score1 > 60 && score1 <= 70) {
				 score2 = 6;
				}
			else if(score1 > 71 && score1 <= 100) {
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

