

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('DBQ').value);
			c = parseInt(document.getElementById('FRQ1').value);
			e = document.getElementById('curve1').checked;
			f = document.getElementById('curve2').checked;
	

	

		
		
		if (e == true) {
			
			//alert(a);
			//alert(b);
			
			var arrayReading = [
				//2011 reading curve
							360,
							360,
							370,
							380,
							390,
							390,
							400,
							410,
							410,
							420,
							430,
							440,
							440,
							450,
							460,
							460,
							470,
							470,
							480,
							490,
							490,
							500,
							510,
							510,
							520,
							530,
							530,
							540,
							550,
							550,
							560,
							570,
							570,
							580,
							590,
							590,
							600,
							610,
							620,
							620,
							630,
							640,
							650,
							660,
							670,
							680,
							690,
							700,
							710,
							720,
							730,
							750,
							760,
							780,
							800,
							800,
							800,
							800
							
						
						

						];
			
			
			
			
		//	alert(arrayEng);


			var arrayMath = [
						380,
						390,
						400,
						410,
						420,
						420,
						430,
						440,
						450,
						460,
						460,
						470,
						480,
						490,
						490,
						500,
						510,
						520,
						530,
						530,
						540,
						550,
						560,
						570,
						570,
						580,
						590,
						600,
						610,
						620,
						630,
						640,
						640,
						650,
						660,
						670,
						680,
						700,
						710,
						720,
						740,
						760,
						790,
						800,
						800
						
			

					];



		var arrayWriting = [
		
					410,
					420,
					420,
					430,
					440,
					450,
					450,
					460,
					470,
					470,
					480,
					490,
					500,
					500,
					510,
					520,
					530,
					530,
					540,
					550,
					560,
					570,
					580,
					590,
					590,
					600,
					610,
					620,
					630,
					640,
					650,
					660,
					680,
					690,
					700,
					720,
					740,
					760,
					780,
					800
					
					


						];





		






			
			
		}
	if (f == true) {
		
		var arrayReading = [
				//2011 reading curve
							360,
							360,
							370,
							380,
							390,
							390,
							400,
							410,
							420,
							420,
							430,
							430,
							440,
							450,
							450,
							460,
							470,
							470,
							480,
							480,
							490,
							500,
							500,
							510,
							510,
							520,
							530,
							530,
							540,
							540,
							550,
							560,
							560,
							570,
							570,
							580,
							590,
							590,
							600,
							600,
							610,
							620,
							630,
							630,
							640,
							650,
							660,
							670,
							680,
							690,
							700,
							720,
							730,
							750,
							770,
							790,
							800,
							800
							
						
						

						];
			
			
			
			
		//	alert(arrayEng);


			var arrayMath = [
						370,
						380,
						390,
						400,
						410,
						410,
						420,
						430,
						440,
						450,
						450,
						460,
						470,
						480,
						490,
						490,
						500,
						510,
						520,
						530,
						530,
						540,
						550,
						560,
						570,
						570,
						580,
						590,
						600,
						610,
						610,
						620,
						630,
						640,
						650,
						650,
						660,
						670,
						680,
						690,
						710,
						720,
						740,
						770,
						800
						
			

					];



		var arrayWriting = [
		
					420,
					430,
					440,
					440,
					450,
					460,
					460,
					470,
					480,
					490,
					490,
					500,
					510,
					520,
					530,
					540,
					540,
					550,
					560,
					560,
					570,
					580,
					590,
					590,
					600,
					610,
					620,
					630,
					630,
					640,
					650,
					660,
					670,
					690,
					700,
					710,
					730,
					750,
					790,
					800
					
					


						];

		




		
	}
	
	document.getElementById("score1").innerHTML = arrayReading[a - 10];
	document.getElementById("score2").innerHTML = arrayMath[b - 10];
	document.getElementById("score3").innerHTML = arrayWriting[c - 10];

	
	document.getElementById("score4").innerHTML = (arrayReading[a - 10] + arrayMath[b -10] + arrayWriting[c -10]);
	
	
//	var a = document.getElementById("score4");
	
	
	
	var names = ["score1","score2","score3"];
	
	
	
	for (var i = 0;i < 3; i++) {
		
		//alert(names[i]);
		
		
		var a = document.getElementById(names[i]);
		
	//	alert(a);
	
	
	if (a.value <= 300  && a.value > 0) {
		a.style.color = "red";
		}
	if (a.value <= 500 && a.value > 300) {
		a.style.color = "orange";
		}
	if (a.value <= 600 && a.value > 500) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 700 && a.value > 600) {
		a.style.color = "green";
		}
	if (a.value <= 800 && a.value > 700) {
		a.style.color = "black";
		}
		
		
	
	}
	
	
	
	var b = document.getElementById("score4");
	
	if (b.value <= 900  && b.value > 0) {
		b.style.color = "red";
		}
	if (b.value <= 1500 && b.value > 900) {
		b.style.color = "orange";
		}
	if (b.value <= 1800 && b.value > 1500) {
		b.style.color = "#33CC00";
		}
	if (b.value <= 2100 && b.value > 1800) {
		b.style.color = "green";
		}
	if (b.value <= 2400 && b.value > 2100) {
		b.style.color = "black";
		}
	
	
	
	
	
	
	
	

}
	
	




function calculate2() {

			var a = parseInt(document.getElementById('MCN').value);
					b = parseInt(document.getElementById('DBQN').value);
					c = parseInt(document.getElementById('FRQ1N').value);
					e = document.getElementById('curve2012').checked;
				

		if (e == true) {

				
				
				var arrayReading = [
				//2015 reading curve
					100,
					100,
					100,
					110,
					120,
					130,
					140,
					150,
					160,
					160,
					170,
					180,
					180,
					190,
					200,
					200,
					210,
					210,
					220,
					220,
					230,
					230,
					230,
					240,
					240,
					250,
					250,
					260,
					260,
					270,
					270,
					280,
					280,
					280,
					290,
					290,
					300,
					300,
					310,
					310,
					320,
					320,
					330,
					330,
					340,
					350,
					350,
					360,
					370,
					380,
					390,
					390,
					400
					
					
					
					



				];





			var arrayMath = [
					200,
					200,
					210,
					230,
					250,
					270,
					280,
					300,
					320,
					340,
					350,
					360,
					370,
					390,
					410,
					420,
					430,
					450,
					460,
					470,
					480,
					490,
					500,
					510,
					520,
					530,
					540,
					550,
					560,
					570,
					580,
					590,
					600,
					600,
					610,
					620,
					630,
					640,
					650,
					660,
					670,
					680,
					690,
					700,
					710,
					710,
					720,
					730,
					730,
					740,
					750,
					750,
					760,
					770,
					780,
					790,
					790,
					800,
					800
			

			
			];



				var arrayWriting = [
				
					100,
					100,
					100,
					100,
					110,
					120,
					130,
					140,
					150,
					160,
					160,
					170,
					180,
					190,
					190,
					200,
					210,
					220,
					230,
					230,
					240,
					240,
					250,
					260,
					260,
					270,
					270,
					280,
					290,
					290,
					300,
					310,
					310,
					320,
					320,
					330,
					330,
					340,
					350,
					360,
					370,
					370,
					380,
					390,
					400
					



				];

}
	document.getElementById("score1").innerHTML = (arrayReading[a] + arrayWriting[c]);
	document.getElementById("score2").innerHTML = arrayMath[b];
	

	
	document.getElementById("score4").innerHTML = (arrayReading[a] + arrayMath[b] + arrayWriting[c]);






				var names = ["score1","score2"];
	
	
	
	for (var i = 0;i < 2; i++) {
		
		//alert(names[i]);
		
		
		var a = document.getElementById(names[i]);
		
	//	alert(a);
	
	
	if (a.value <= 300  && a.value > 0) {
		a.style.color = "red";
		}
	if (a.value <= 500 && a.value > 300) {
		a.style.color = "orange";
		}
	if (a.value <= 600 && a.value > 500) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 700 && a.value > 600) {
		a.style.color = "green";
		}
	if (a.value <= 800 && a.value > 700) {
		a.style.color = "black";
		}
		
		
	
	}
	
	
	
	var b = document.getElementById("score4");
	
	if (b.value <= 600  && b.value > 0) {
		b.style.color = "red";
		}
	if (b.value <= 1000 && b.value > 600) {
		b.style.color = "orange";
		}
	if (b.value <= 1200 && b.value > 1000) {
		b.style.color = "#33CC00";
		}
	if (b.value <= 1400 && b.value > 1200) {
		b.style.color = "green";
		}
	if (b.value <= 1600 && b.value > 1400) {
		b.style.color = "black";
		}
	


	
	
	
	}









	