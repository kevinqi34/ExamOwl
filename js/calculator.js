function slidervalue(label,label2) {
	
	var a = document.getElementById(label).value;
		 n = parseInt(document.getElementById(label).getAttribute("max"));
		 m = parseInt(document.getElementById(label).getAttribute("min"));
		document.getElementById(label2).value = a;
		
		

		if (a < m) {
		alert("Please enter valid inputs!");
		}			
		if (a > n) {
		alert("Please enter valid inputs!");
		}
		document.getElementById(label2).value = a;
			
			
	}

function choosecolors() {
	var a = document.getElementById("score1");
	var b = document.getElementById("score2");
	var c = document.getElementById("score3");
	
		 var a = parseInt(255 * (1 - (a.value/90)));
				 b = parseInt(255 * (1 - (b.value/90)));
				 c = parseInt(255 * (1 - (c.value/180)));
	

		document.getElementById("score1").style.color = "rgb(0, "+a+",0)";
		document.getElementById("score2").style.color = "rgb(0, "+b+",0)";
		document.getElementById("score3").style.color = "rgb(0, "+c+",0)";		

	}
	
	
