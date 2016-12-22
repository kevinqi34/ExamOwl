


function calculate() {

	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC3').value);
			c = parseInt(document.getElementById('FW').value);
			d =parseInt(document.getElementById('V').value);
			e = parseInt(document.getElementById('FRQ').value);
			f =parseInt(document.getElementById('SPK').value);
			g = document.getElementById('curve1').checked;
			h = document.getElementById('curve2').checked;
			
			
 //alert(a + b + c + d + e + f);	
 //alert(g);
// alert(h);		
			
			
	var score1 = Math.round((((40/46) * b) + ((40/39) * a))*100)/100;
			score2 = Math.round((((16/30) * (c + d)) + (24/9) * e + ((40/25) * f)) *100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
	var percent = Math.round((score3/160)*100);
	
	
	//alert(score3);
	//alert(percent);



if (g == true) {
			if(score3 >= 0 && score3 <= 70) {
				 score4 = 1;
				}
			else if(score3 > 70 && score3 <= 88) {
				 score4 = 2;
				}
			else if(score3 > 88 && score3 <= 111) {
				 score4 = 3;
				}
			else if(score3 > 111 && score3 <= 126) {
				 score4 = 4;
				}
			else if(score3 > 126 && score3 <= 160) {
				 score4 = 5;
				}
		}
	if (h == true) {
		if (score3 >= 0 && score3 <= 73) {
			score4 = 1;
			}
		if (score3 > 73 && score3 <= 90) {
			score4 = 2;
			}
		if (score3 > 90 && score3 <= 114) {
			score4 = 3
			}
		if (score3 > 114 && score3 <= 128) {
			score4 = 4;
			}
		if (score3 > 128 && score3 <= 160) {
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