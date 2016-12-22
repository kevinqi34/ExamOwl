

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('MC4').value);
			c = parseInt(document.getElementById('FRQ1').value);
			d =parseInt(document.getElementById('FRQ2').value);
			e = parseInt(document.getElementById('FRQ3').value);
			f =parseInt(document.getElementById('FRQ4').value);
			g = parseInt(document.getElementById('FRQ5').value);
			h =parseInt(document.getElementById('FRQ6').value);
			i = parseInt(document.getElementById('FRQ7').value);
			j =parseInt(document.getElementById('FRQ8').value);
			k = parseInt(document.getElementById('FRQ9').value);
			o = document.getElementById('curve1').checked;
			p = document.getElementById('curve2').checked;
	
	
	
	var mcaural = Math.round(((45/42) * a)*100)/100;
	var	mcnonaural = Math.round(((45/33) * b)*100)/100;
	var fraural = Math.round(((55/54) * (c + d + j + k) + (55/144) * (e + f))*100)/100;
	var frnonaural = Math.round(((55/75) * g + (13.75/18) * h + (275/108) * i)*100)/100;			
		
	
	
	var score1 = Math.round((mcaural + mcnonaural)*100)/100;
			score2 = Math.round((fraural + frnonaural)*100)/100;
			score3 = Math.round((score1 + score2)*100)/100;
	var score4;
	
			score5 = Math.round(mcaural + fraural);
			score6 = Math.round(mcnonaural + frnonaural);
		var percent = Math.round((score3/200)*100);
		
		if (o == true) {
			if(score3 >= 0 && score3 <= 62) {
				 score4 = 1;
				}
			else if(score3 > 62 && score3 <= 90) {
				 score4 = 2;
				}
			else if(score3 > 90 && score3 <= 114) {
				 score4 = 3;
				}
			else if(score3 > 114 && score3 <= 139) {
				 score4 = 4;
				}
			else if(score3 > 139 && score3 <= 200) {
				 score4 = 5;
				}
		}
	if (p == true) {
		if (score3 >= 0 && score3 <= 61) {
			score4 = 1;
			}
		if (score3 > 61 && score3 <= 85) {
			score4 = 2;
			}
		if (score3 > 85 && score3 <= 109) {
			score4 = 3
			}
		if (score3 > 109 && score3 <= 132) {
			score4 = 4;
			}
		if (score3 > 132 && score3 <= 200) {
			score4 = 5;
			}
	}
	
	document.getElementById("score1").innerHTML = score1;
	document.getElementById("score2").innerHTML = score2;
	document.getElementById("score3").innerHTML = score3 + "(" + percent + "%)";
	document.getElementById("score4").innerHTML = score4;
	document.getElementById("score5").innerHTML = score5 + "/100";
	document.getElementById("score6").innerHTML = score6 + "/100";
	
	
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
	
$(document).ready(function(){


calculate();


});	
	
	
	