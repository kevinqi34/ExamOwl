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
			
	var score1 = Math.round((a * (4/5) + b * (2/3) + c * (2/3) + d)*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (f == true && e == true) {
			if(score1 >= 0 && score1 <= 11) {
				 score2 = 1;
				}
			else if(score1 > 11 && score1 <= 24) {
				 score2 = 2;
				}
			else if(score1 > 24 && score1 <= 39) {
				 score2 = 3;
				}
			else if(score1 > 39 && score1 <= 51) {
				 score2 = 4;
				}
			else if(score1 > 51 && score1 <= 63) {
				 score2 = 5;
				}
			else if(score1 > 63 && score1 <= 75) {
				 score2 = 6;
				}
			else if(score1 > 75 && score1 <= 100) {
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
			
	var score1 = Math.round((a + b * (5/6) + c * (4/5))*100)/100;
			score2;
	var percent = Math.round((score1/100)*100);	
		//alert(score1);

		if (d == true && e == true) {
			if(score1 >= 0 && score1 <= 11) {
				 score2 = 1;
				}
			else if(score1 > 11 && score1 <= 25) {
				 score2 = 2;
				}
			else if(score1 > 25 && score1 <= 40) {
				 score2 = 3;
				}
			else if(score1 > 40 && score1 <= 52) {
				 score2 = 4;
				}
			else if(score1 > 52 && score1 <= 66) {
				 score2 = 5;
				}
			else if(score1 > 66 && score1 <= 77) {
				 score2 = 6;
				}
			else if(score1 > 77 && score1 <= 100) {
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

