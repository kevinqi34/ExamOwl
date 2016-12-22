

	
function calculate() {
	var a = parseInt(document.getElementById('MC').value);
			b = parseInt(document.getElementById('DBQ').value);
			c = parseInt(document.getElementById('FRQ1').value);
			d =parseInt(document.getElementById('FRQ2').value);
			e = document.getElementById('curve1').checked;
			f = document.getElementById('curve2').checked;
	

	

		
		
		if (e == true) {
			
			//alert(a);
			//alert(b);
			
			var arrayEng = [
				//2015 English Curve	
						1,
						1,
						2,
						3,
						3,
						4,
						5,
						5,
						6,
						6,
						7,
						7,
						8,
						8,
						9,
						9,
						9,
						10,
						10,
						11,
						11,
						11,
						12,
						12,
						13,
						13,
						14,
						14,
						14,
						15,
						15,
						15,
						16,
						16,
						16,
						17,
						17,
						18,
						18,
						19,
						19,
						20,
						20,
						20,
						21,
						21,
						22,
						22,
						22,
						23,
						23,
						23,
						24,
						24,
						24,
						25,
						25,
						25,
						26,
						26,
						27,
						27,
						28,
						28,
						29,
						30,
						31,
						31,
						32,
						33,
						34,
						35,
						35,
						35,
						36,
						36
						
						

						];
			
			
			
			
		//	alert(arrayEng);


			var arrayMath = [
						1,
						4,
						6,
						7,
						9,
						10,
						11,
						12,
						12,
						13,
						13,
						14,
						14,
						15,
						15,
						15,
						15,
						16,
						16,
						16,
						16,
						17,
						17,
						17,
						18,
						18,
						18,
						19,
						19,
						20,
						21,
						21,
						22,
						22,
						23,
						23,
						24,
						24,
						24,
						25,
						25,
						26,
						26,
						26,
						27,
						27,
						27,
						28,
						28,
						29,
						29,
						30,
						30,
						31,
						32,
						33,
						34,
						35,
						35,
						36,
						36
			

					];



		var arrayRead = [
		
					1,
					3,
					4,
					6,
					7,
					9,
					10,
					11,
					11,
					12,
					13,
					13,
					14,
					15,
					15,
					16,
					17,
					18,
					18,
					19,
					19,
					20,
					21,
					21,
					22,
					23,
					23,
					24,
					25,
					26,
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
					36
		


						];





		var arraySci = [
		
						1,
						3,
						5,
						7,
						8,
						9,
						10,
						11,
						12,
						13,
						14,
						15,
						16,
						16,
						17,
						18,
						19,
						19,
						20,
						20,
						21,
						22,
						22,
						23,
						23,
						24,
						24,
						25,
						25,
						26,
						26,
						27,
						28,
						29,
						31,
						32,
						33,
						34,
						35,
						36,
						36


					];






			
			
		}
	if (f == true) {
		
		
		var arrayEng = [
				//2012 English Curve	
						1,
						1,
						2,
						2,
						3,
						3,
						4,
						4,
						5,
						5,
						6,
						6,
						7,
						7,
						7,
						8,
						8,
						8,
						9,
						9,
						10,
						10,
						10,
						11,
						11,
						12,
						12,
						13,
						13,
						14,
						14,
						14,
						15,
						15,
						15,
						16,
						16,
						16,
						17,
						17,
						18,
						18,
						19,
						19,
						20,
						20,
						20,
						20,
						21,
						21,
						21,
						22,
						22,
						22,
						23,
						23,
						24,
						24,
						24,
						25,
						25,
						26,
						26,
						27,
						27,
						28,
						29,
						30,
						30,
						31,
						32,
						33,
						34,
						35,
						35,
						36
						
						

						];
			
			
			
			
		//	alert(arrayEng);


			var arrayMath = [
						1,
						4,
						6,
						8,
						10,
						11,
						11,
						12,
						13,
						13,
						14,
						14,
						14,
						15,
						15,
						15,
						15,
						16,
						16,
						16,
						16,
						17,
						17,
						17,
						18,
						18,
						19,
						19,
						20,
						20,
						21,
						22,
						22,
						23,
						23,
						24,
						24,
						24,
						25,
						25,
						25,
						26,
						26,
						26,
						27,
						27,
						27,
						28,
						28,
						29,
						29,
						30,
						31,
						32,
						33,
						33,
						34,
						35,
						35,
						36,
						36
			

					];



		var arrayRead = [
		
					1,
					2,
					3,
					5,
					6,
					7,
					9,
					10,
					10,
					11,
					12,
					12,
					13,
					13,
					14,
					15,
					15,
					16,
					17,
					18,
					18,
					19,
					20,
					21,
					21,
					22,
					23,
					24,
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
					36
		


						];





		var arraySci = [
		
						1,
						3,
						5,
						6,
						7,
						9,
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
						18,
						19,
						20,
						20,
						21,
						21,
						22,
						22,
						23,
						24,
						24,
						24,
						25,
						25,
						26,
						27,
						27,
						28,
						29,
						30,
						31,
						32,
						34,
						35,
						36


					];




		
	}
	
	document.getElementById("score1").innerHTML = arrayEng[a];
	document.getElementById("score2").innerHTML = arrayMath[b];
	document.getElementById("score3").innerHTML = arrayRead[c];
	document.getElementById("score4").innerHTML = arraySci[d];
	
	document.getElementById("score5").innerHTML = (arrayEng[a] + arrayMath[b] + arrayRead[c] + arraySci[d]) / 4;
	
	
//	var a = document.getElementById("score4");
	
	
	
	var names = ["score1","score2","score3","score4","score5"];
	
	
	
	for (var i = 0;i < 5; i++) {
		
		//alert(names[i]);
		
		
		var a = document.getElementById(names[i]);
		
	//	alert(a);
	
	
	if (a.value <= 10  && a.value > 0) {
		a.style.color = "red";
		}
	if (a.value <= 18 && a.value > 10) {
		a.style.color = "orange";
		}
	if (a.value <= 24 && a.value > 18) {
		a.style.color = "#33CC00";
		}
	if (a.value <= 30 && a.value > 24) {
		a.style.color = "green";
		}
	if (a.value <= 36 && a.value > 30) {
		a.style.color = "black";
		}
		
		
	
	}

}
	
	
$(document).ready(function () {
	
	
	calculate();
	
	
	
	});	
	