

	
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
				//2014 reading curve
							20,
							20,
							20,
							20,
							20,
							20,
							20,
							22,
							24,
							27,
							29,
							30,
							31,
							33,
							34,
							35,
							37,
							38,
							38,
							40,
							41,
							42,
							43,
							44,
							45,
							46,
							47,
							48,
							49,
							50,
							51,
							51,
							52,
							53,
							54,
							55,
							56,
							57,
							58,
							59,
							60,
							61,
							62,
							63,
							64,
							65,
							66,
							67,
							68,
							70,
							72,
							74,
							75,
							77,
							80,
							80
							
							
							
						
						

						];
			
			
			
			
		//	alert(arrayEng);


			var arrayMath = [
						20,
						20,
						20,
						20,
						20,
						20,
						20,
						24,
						26,
						29,
						31,
						33,
						34,
						36,
						37,
						38,
						39,
						40,
						42,
						42,
						43,
						44,
						45,
						47,
						48,
						49,
						50,
						51,
						52,
						53,
						54,
						56,
						57,
						58,
						60,
						61,
						62,
						64,
						65,
						67,
						68,
						69,
						71,
						74,
						77,
						80
						
			

					];



		var arrayWriting = [
		
					20,
					20,
					20,
					20,
					20,
					21,
					24,
					27,
					28,
					30,
					31,
					33,
					34,
					35,
					36,
					37,
					38,
					39,
					40,
					41,
					42,
					43,
					44,
					45,
					46,
					48,
					49,
					50,
					51,
					52,
					53,
					54,
					55,
					56,
					57,
					59,
					60,
					62,
					63,
					64,
					65,
					68,
					70,
					72,
					73,
					77,
					80
					
					


						];





		






			
			
		}
	if (f == true) {
		
		var arrayReading = [
				//2010 reading curve
							
							20,
							22,
							24,
							26,
							27,
							28,
							29,
							30,
							32,
							33,
							34,
							35,
							36,
							38,
							39,
							40,
							41,
							42,
							43,
							44,
							46,
							47,
							48,
							49,
							50,
							51,
							52,
							53,
							54,
							55,
							56,
							57,
							58,
							59,
							60,
							61,
							62,
							63,
							64,
							65,
							66,
							67,
							68,
							69,
							70,
							71,
							72,
							73,
							74,
							75,
							76,
							77,
							78,
							79,
							80,
							80
						
						

						];
			
			
			
			
		//	alert(arrayEng);


			var arrayMath = [
						20,
						21,
						22,
						24,
						26,
						28,
						30,
						32,
						34,
						35,
						36,
						38,
						39,
						40,
						41,
						42,
						44,
						45,
						46,
						47,
						48,
						49,
						50,
						51,
						53,
						55,
						57,
						58,
						59,
						60,
						62,
						63,
						64,
						65,
						66,
						68,
						69,
						70,
						71,
						72,
						73,
						74,
						76,
						78,
						80,
						80

			

					];



		var arrayWriting = [
		
					20,
					21,
					23,
					24,
					25,
					26,
					28,
					29,
					30,
					32,
					34,
					36,
					38,
					39,
					40,
					41,
					42,
					43,
					44,
					46,
					47,
					49,
					50,
					52,
					53,
					55,
					56,
					57,
					59,
					60,
					62,
					63,
					64,
					66,
					67,
					68,
					69,
					70,
					72,
					73,
					74,
					76,
					77,
					78,
					79,
					80,
					80
					
					


						];

		




		
	}
	
	document.getElementById("score1").innerHTML = arrayReading[a + 7];
	document.getElementById("score2").innerHTML = arrayMath[b + 7];
	document.getElementById("score3").innerHTML = arrayWriting[c + 7];

	
	document.getElementById("score4").innerHTML = (arrayReading[a + 7] + arrayMath[b + 7] + arrayWriting[c + 7]);
	
	
//	var a = document.getElementById("score4");
	
	
	
	var names = ["score1","score2","score3"];
	
	
	
	for (var i = 0;i < 3; i++) {
		
		//alert(names[i]);
		
		
		var a = document.getElementById(names[i]);
		
	//	alert(a);
	
	
	if (a.value <= 30  && a.value > 0) {
		a.style.color = "red";
		}
	if (a.value <= 50 && a.value > 30) {
		a.style.color = "orange";
		}
	if (a.value <= 60 && a.value > 50) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 70 && a.value > 60) {
		a.style.color = "green";
		}
	if (a.value <= 80 && a.value > 70) {
		a.style.color = "black";
		}
		
		
	
	}
	
	
	
	var b = document.getElementById("score4");
	
	if (b.value <= 90  && b.value > 0) {
		b.style.color = "red";
		}
	if (b.value <= 150 && b.value > 90) {
		b.style.color = "orange";
		}
	if (b.value <= 180 && b.value > 150) {
		b.style.color = "#33CC00";
		}
	if (b.value <= 210 && b.value > 180) {
		b.style.color = "green";
		}
	if (b.value <= 240 && b.value > 210) {
		b.style.color = "black";
		}
	
	
	
	
	
	
	
	

}
	
	




function calculate2() {

			var a = parseInt(document.getElementById('MCN').value);
					b = parseInt(document.getElementById('DBQN').value);
					c = parseInt(document.getElementById('FRQ1N').value);
					e = document.getElementById('curve2012').checked;
				

		if (e == true) {

				
				
				var arraySReading = [
				//2015 reading curve
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					9,
					10,
					11,
					12,
					13,
					14,
					15,
					17,
					18,
					18,
					19,
					20,
					21,
					22,
					23,
					24,
					25,
					26,
					27,
					27,
					28,
					29,
					29,
					30,
					30,
					31,
					32,
					32,
					33,
					33,
					34,
					34,
					35,
					35,
					36,
					37,
					38,
					38
					
	

				];





			var arraySMath = [
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					9,
					10,
					11,
					12,
					13,
					14,
					15,
					16,
					17,
					18,
					19,
					20,
					21,
					22,
					23,
					24,
					25,
					26,
					27,
					27,
					28,
					29,
					29,
					30,
					30,
					31,
					31,
					31,
					32,
					32,
					33,
					33,
					34,
					34,
					35,
					35,
					36,
					37,
					37,
					38,
					38

			

			
			];



				var arraySWriting = [
				
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					8,
					9,
					9,
					10,
					10,
					11,
					12,
					13,
					14,
					15,
					16,
					17,
					18,
					19,
					20,
					20,
					21,
					21,
					22,
					22,
					23,
					23,
					24,
					25,
					26,
					27,
					28,
					29,
					30,
					31,
					32,
					33,
					34,
					35,
					36,
					37,
					38,
					38
					



				];
				
				
				
				
			var math = arraySMath[b];
			
			
			//alert(math);
			
			
			var read_write = (arraySWriting[c] + arraySReading[a]);
			
			
			//alert(read_write);




		var arrayReading = [
					180,
					190,
					190,
					195,
					200,
					210,
					220,
					230,
					250,
					260,
					270,
					280,
					290,
					300,
					310,
					320,
					330,
					340,
					350,
					360,
					370,
					380,
					390,
					400,
					410,
					420,
					430,
					440,
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
					740,
					750,
					760
									
				
		
		
		
		
		];


		var arrayMath = [
				180,
				180,
				200,
				220,
				240,
				260,
				280,
				300,
				320,
				340,
				360,
				380,
				400,
				420,
				440,
				460,
				480,
				500,
				520,
				540,
				560,
				580,
				600,
				620,
				640,
				660,
				680,
				700,
				720,
				740,
				760
				

		
				];








}
	document.getElementById("score1").innerHTML = arrayReading[read_write - 16];
	document.getElementById("score2").innerHTML = arrayMath[math - 8];
	

	
	document.getElementById("score4").innerHTML = (arrayReading[read_write - 16] + arrayMath[math - 8]);






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









	