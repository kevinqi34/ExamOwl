

function randomize(P1,P2,P3) {
		var randomizer = Math.random();
			if (randomizer >= 0 && randomizer <= .33) {
					return P1;
			}
				else if (randomizer > .33 && randomizer <= .66) {
					return P2;
			}
				else if (randomizer > .66 && randomizer <= 1) {
					return P3;
			}
				else {
					return false;				
			}
		}

function displayinputs() {  
		var i = document.getElementById('parts').value;
		if (i > 0 && i <= 10) {
			var j ;
				for ( j = 1; j <= i; j++) {
					var id = "P" + j ;
					document.getElementById(id).style.display = "block" ;
					}
				}
			}

function displaytestscores() {
		var i = document.getElementById('tparts').value;
		if (i > 0 && i < 10) {
			var j;
				for ( j = 1; j <= i; j++) {
					var tid = "G" + j;
					document.getElementById(tid).style.display = "block";
					}
				}
			}

function resettwoparts() {
	
	var i = document.getElementById('parts').value;
	if (i > 0 && i <= 10) {
		var j;
			for (j = 1; j <= i; j++) {
				var id = "P" + j;
				document.getElementById(id).style.display = "none";
				}
			}
		var i = document.getElementById('tparts').value;
		if (i > 0 && i <= 10) {		
	
	document.getElementById('formtwoparts').reset();	

			var j;
			for (j = 1;j <= i; j++) {
				var id = "G" + j;
				document.getElementById(id).style.display = "none";
			 }	
		 }
		 document.getElementById('formtwoparts').reset();	
	}
	
function resetform(a) {
		
		document.getElementById(a).reset();
		
	}	
		
		
function validatetwoparts() {
					var a = document.getElementById('BF2').value;
					var b = document.getElementById('FG3').value;
					var c = document.getElementById('FP2').value;
					var d = document.getElementById('parts').value;
					var e = document.getElementById('tparts').value;
					
					if (a.length <= 0) {
					alert("Current grade must be entered!");
					return false;	
					}
					if (isNaN(a) == true) {
					alert("Only numbers are accepted!");
					return false;
					}
					if (b.length <= 0) {
					alert("Percentage must be entered!");
					return false;
					}
					if (isNaN(b) == true) {
					alert("Only numbers are accepted!");
					return false;
					}
					if (c.length <= 0) {
					alert("A percentage must be entered!");
					return false;	
					}
					if (isNaN(c) == true) {
					alert("Only numbers are accepted!");
					return false;
					}
					if (d.length <= 0) {
					alert("Number of parts must be entered!");
					return false;
					}
					if (isNaN(d) == true) {
					alert("Only numbers are accepted!");
					return false;
					}
					if (e.length <= 0) {
					alert("Number of parts taken must be entered!");
					return false;	
					}
					if (isNaN(e) == true) {			
					alert("Only numbers are accepted!");
					return false;
					}
							
							
						var i = document.getElementById('parts').value;
					
							if (i > 0 && i <= 10) {
							var j;
								for (j = 1; j <= i; j++) {
									var id = "L" + j;
										   id = document.getElementById(id).value;
								if (id.length <= 0) {
								alert("Points must be entered!");
								return false;
								}
								if (isNaN(id) == true) {
								alert("Only numbers are accepted!");
								return false;
					  			 }
							}
						}
							
						var i = document.getElementById('tparts').value;
						
							if (i > 0 && i <= 10) {
								var j;
									for (j = 1;j <= i; j++) {
										var id = "J" + j;
												id = document.getElementById(id).value;
									if (id.length <= 0) {
									alert("Points must be entered!");
									return false;
									}
									if (isNaN(id) == true) {
									alert("Only numbers are accepted!");
									return false;
					  			 	}
					  			 }
							}			
							
					}
			
	
		
	
	
function calculate1() {
//convert inputs to strings
 	var CF = document.getElementById('CG').value;
 		 FF = document.getElementById('FG').value;
 	 	 PF = document.getElementById('PW').value;
//make sure there are inputs and the inputs are numbers
	if (CF.length <= 0) {
		alert("Current grade must be entered!");
		return;	
	}
	if (isNaN(CF) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (FF.length <= 0) {
		alert("Desired grade must be entered!");
		return;
	}
	if (isNaN(FF) == true) {
		alert("Only numbers are accepted!");
		return;
	}
	if (PF.length <= 0) {
		alert("A percentage must be entered!");
		return;
	}
	if (isNaN(PF) == true) {
		alert("Only numbers are accepted!");
		return;
	}
//convert strings into decimals
	var C = parseFloat(CF);
		 F = parseFloat(FF);
		 P = parseFloat(PF)/100;
				
		
//calculate the final grade
	
	var FG = Math.round(((F - C + C*P)/P)*100)/100;


//determine the phrase

		if(FG <= 30) {
			
		var phrase1 = "You could sleep through your exam!";
			 phrase2 = "You don't even have to take it!";
			 phrase3 = "Why bother showing up?";
			
		var phrase = randomize(phrase1,phrase2,phrase3); 
			}
		else if(FG > 30 && FG <= 60) {
		
		var phrase1 = "You may not have to study.";
			 phrase2 = "You don't have to try.";
			 phrase3 = "You shouldn't be worried";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else if(FG > 60 && FG <= 85) {
		
		var phrase1 = "You can probably relax.";
			 phrase2 = "You should study just a little bit.";
			 phrase3 = "You may want to look over some notes.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 85 && FG <= 95) {
		
		var phrase1 = "You should be worried.";
			 phrase2 = "You should study quite a bit.";
			 phrase3 = "You may not want to cram the night before.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 95 && FG <= 100) {
		
		var phrase1 = "You should be REALLY worried!";
			 phrase2 = "You should be praying!";
			 phrase3 = "You should ask yourself why you are in this situation!";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 100 && FG < 200) {
		
		var phrase1 = "It's impossible!";
			 phrase2 = "Do you believe in miracles?";
			 phrase3 = "You don't need to get your hopes up because it's definitely not your lucky day.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else {
			var phrase = "Please input valid numbers";
			}
//print out the final grade
	alert("You need " + FG + "% in order to receive " + FF + "% in the class. " + phrase);
	 }

function calculate2() {
	var CG = document.getElementById('BF').value;
		 FG = document.getElementById('FG2').value;
		 PW = document.getElementById('FP').value;
	
	if (CG.length <= 0) {
		alert("Previous grade must be entered!");
		return;	
		}
	if (isNaN(CG) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (FG.length <= 0) {
		alert("Final grade must be entered!");
		return;
		}
	if (isNaN(FG) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (PW.length <= 0) {
		alert("A percentage must be entered!");
		return;
		}
	if (isNaN(PW) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	
	var C = parseFloat(CG);
		 F = parseFloat(FG);
		 P = parseFloat(PW)/100;
		
//final grade calculation
	var FG = Math.round(((C - C*P + F*P)*100))/100;
	
	
//pick phrase
	if(FG <= 30) {
			
		var phrase1 = "Better luck next time! If there is a next time.";
			 phrase2 = "Your probably just unlucky!";
			 phrase3 = "You most likely will have to take the course again!";
			
		var phrase = randomize(phrase1,phrase2,phrase3); 
			}
		else if(FG > 30 && FG <= 60) {
		
		var phrase1 = "There goes your GPA.";
			 phrase2 = "It was inevitable.";
			 phrase3 = "Why didn't you drop out while you had the chance?";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else if(FG > 60 && FG <= 85) {
		
		var phrase1 = "You know you could have done better.";
			 phrase2 = "Oh well. The class wasn't THAT important.";
			 phrase3 = "You are really disappointed in yourself.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 85 && FG <= 95) {
		
		var phrase1 = "Congrats, you have survived the course.";
			 phrase2 = "Another high score to put on your transcript.";
			 phrase3 = "Just a little bit below exceptional.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 95 && FG <= 100) {
		
		var phrase1 = "You are exceptional!";
			 phrase2 = "How do you do it?";
			 phrase3 = "You should ask yourself: Why am I so good at getting good grades?";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 100 && FG < 200) {
		
		var phrase1 = "You have hacked the grade book!";
			 phrase2 = "Maybe you should teach the class!";
			 phrase3 = "You have done the impossible!";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else {
			var phrase = "Please input valid numbers";
			}
//print out the final grade
	alert("You received " + FG +"% in the course. " + phrase);
	
	 }

function calculate3() {
	
	
//gather variables	
			var a = document.getElementById('BF2').value;
			var b = document.getElementById('FG3').value;
			var c = document.getElementById('FP2').value;
			var d = document.getElementById('parts').value;
			var e = document.getElementById('tparts').value;
			
			var dd = parseInt(d);
			var ee = parseInt(e);
			
			if ( ee > dd) {
				alert("Parts already taken shouldn't be greater than the total number of parts on your final!");
				resettwoparts();
				return;
				}
						
			
			var array1 = [];
				   array2 = [];
			
			var i = document.getElementById('parts').value;
				if (i > 0 && i <= 10) {
					var j;
					for ( j = 1; j <= i; j++) {
						var id = "L" + j;
								id = document.getElementById(id).value;
								id = parseInt(id);
						array1.push(id);
						}
				var sum = 0;
				 
				 	for (var i = 0; i < array1.length; i++) {					
						sum = sum + array1[i];
						}
					}
					
		 var i = document.getElementById('tparts').value;
			if (i > 0 && i <= 10) {
				var j;
				for ( j = 1; j <= i; j++) {
						var id = "J" + j;
								id = document.getElementById(id).value;
								id = parseInt(id);
						array2.push(id);
					}
				var csum = 0;
				
					for (var i = 0;i < array2.length; i++) {
						csum = csum + array2[i];
						}
					}
			
			
	// validate
		
		if (a.length <= 0) {
			return;
			}	
		if (b.length <= 0) {
			return;
			}
		if (c.length <= 0) {
			return;
			}
		if (d.length <= 0) {
			return;
			}
		if (e.length <= 0) {
			return;
			}
			
		var i = document.getElementById('parts').value;
		
			if (i > 0 && i <= 10) {
				var j;
				for (j = 1;j < i; j++ ) {
					var id = "L" + j;
							id = document.getElementById(id).value;
						if (id.length <= 0) {
							return;
							}
						}
					}
					
		var i = document.getElementById('tparts').value;
		
			if (i > 0 && i <= 10) {
				var j;
				for (j = 1;j < i; j++) {
					var id = "J" +j;
							id =document.getElementById(id).value;
					if (id.length <= 0) {
						return;
						}
					}
				}
					
						
	//calculate percentage

			var a = parseFloat(a);
			var b = parseFloat(b);
			var c = parseFloat(c)/100;
			var d = parseInt(sum);
			var e = parseInt(csum);
			
			
			var f = d - e;
			
			var ptsoftotal = (b - (a*(1 -c )))/(c*100);
			
			var FG = Math.round(((ptsoftotal*d - e)/f)*10000)/100;
			
			//randomize
			
		if(FG <= 30) {
			
		var phrase1 = "You could sleep through your exam!";
			 phrase2 = "You don't even have to take it!";
			 phrase3 = "Why bother showing up?";
			
		var phrase = randomize(phrase1,phrase2,phrase3); 
			}
		else if(FG > 30 && FG <= 60) {
		
		var phrase1 = "You may not have to study.";
			 phrase2 = "You don't have to try.";
			 phrase3 = "You shouldn't be worried";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else if(FG > 60 && FG <= 85) {
		
		var phrase1 = "You can probably relax.";
			 phrase2 = "You should study just a little bit.";
			 phrase3 = "You may want to look over some notes.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 85 && FG <= 95) {
		
		var phrase1 = "You should be worried.";
			 phrase2 = "You should study quite a bit.";
			 phrase3 = "You may not want to cram the night before.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 95 && FG <= 100) {
		
		var phrase1 = "You should be REALLY worried!";
			 phrase2 = "You should be praying!";
			 phrase3 = "You should ask yourself why you are in this situation!";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 100 && FG < 200) {
		
		var phrase1 = "It's impossible!";
			 phrase2 = "Do you believe in miracles?";
			 phrase3 = "You don't need to get your hopes up because it's definitely not your lucky day.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else {
			var phrase = "Please input valid numbers";
			}


 //print out the final grade
	alert("You need " + FG + "% on the rest of your final in order to receive " + b + "% in the class. " + phrase);
	 		
			}
			
		
						
			
	

function calculate4() {
	
	var a = document.getElementById('BF4').value;
	var b = document.getElementById('FG4').value;
	var c = document.getElementById('TP').value;
	var d = document.getElementById('tests').value;
	var e = document.getElementById('TA').value;
	var f = document.getElementById('NT').value;
		 
		 
		 
//validate

	if (a.length <= 0) {
		alert("Current grade must be entered!");
		return;	
		}
	if (isNaN(a) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (b.length <= 0) {
		alert("Final grade must be entered!");
		return;
		}
	if (isNaN(b) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (c.length <= 0) {
		alert("A percentage must be entered!");
		return;
		}
	if (isNaN(c) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (d.length <= 0) {
		alert("Number of tests taken must be entered!");
		return;	
		}
	if (isNaN(d) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (e.length <= 0) {
		alert("Test average must be entered!");
		return;
		}
	if (isNaN(e) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (f.length <= 0) {
		alert("Number of tests must be entered!");
		return;
		}
	if (isNaN(f) == true) {
		alert("Only numbers are accepted!");
		return;
		}
		
		
	
//calculate

	var a = parseFloat(a);
	var b = parseFloat(b);
	var c = parseFloat(c)/100;
	var d = parseInt(d);
	var e = parseFloat(e);
	var f = parseInt(f);
	
	var FG = Math.round((((b - a + a*c)*(d + f)) - (d*e*c))/(2*c))*100/100;
	
	
//determine the phrase

		if(FG <= 30) {
			
		var phrase1 = "You could sleep through your exam!";
			 phrase2 = "You don't even have to take it!";
			 phrase3 = "Why bother showing up?";
			
		var phrase = randomize(phrase1,phrase2,phrase3); 
			}
		else if(FG > 30 && FG <= 60) {
		
		var phrase1 = "You may not have to study.";
			 phrase2 = "You don't have to try.";
			 phrase3 = "You shouldn't be worried";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else if(FG > 60 && FG <= 85) {
		
		var phrase1 = "You can probably relax.";
			 phrase2 = "You should study just a little bit.";
			 phrase3 = "You may want to look over some notes.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 85 && FG <= 95) {
		
		var phrase1 = "You should be worried.";
			 phrase2 = "You should study quite a bit.";
			 phrase3 = "You may not want to cram the night before.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 95 && FG <= 100) {
		
		var phrase1 = "You should be REALLY worried!";
			 phrase2 = "You should be praying!";
			 phrase3 = "You should ask yourself why you are in this situation!";
		
		var phrase = randomize(phrase1,phrase2,phrase3);
			}
		else if(FG > 100 && FG < 200) {
		
		var phrase1 = "It's impossible!";
			 phrase2 = "Do you believe in miracles?";
			 phrase3 = "You don't need to get your hopes up because it's definitely not your lucky day.";
		
		var phrase = randomize(phrase1,phrase2,phrase3);	
			}
		else {
			var phrase = "Please input valid numbers";
			}
//print out the final grade
	alert("You need " + FG + "% in order to receive " + b + "% in the class. " + phrase);
	 }
	
function calculate5() {	

	var a = document.getElementById('TT').value;
	var b = document.getElementById('FFF').value;
	
	if (a.length <= 0) {
		alert("Total points must be entered!");
		return;	
		}
	if (isNaN(a) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	if (b.length <= 0) {
		alert("Final points must be entered!");
		return;
		}
	if (isNaN(b) == true) {
		alert("Only numbers are accepted!");
		return;
		}
	
	var a = parseInt(a);
	var b = parseInt(b);
	
	var FW = Math.round((b/a)*100*100)/100;
	
	alert("Your final is worth " + FW + "% of your grade.");
	}






/*

function swapDivs(div1,div2) {
	 var d1 = document.getElementById(div1);
	     d2 = document.getElementById(div2);
	     d3 = document.getElementById('related');
		 
	if (d1.style.display == "block") {
		d1.style.display = "none";
		d2.style.display = "block";
		d3.style.display = "none";
		}
	}
	
function swapreverse(div1,div2) {
	var d1 = document.getElementById(div1);
	    d2 = document.getElementById(div2);
	    d3 = document.getElementById('related');
	   if (d1.style.display == "block") {
	   	d1.style.display = "none";
	   	d2.style.display = "block";
	   	d3.style.display = "block";
	   	}
	}
	
	

*/



function switchdivs() {
	var a = document.getElementById('selection').value;
	var b = document.getElementById('form');
	var c = document.getElementById('overall');
	var d =document.getElementById('twoparts');
	var e = document.getElementById('testweight');
	var f = document.getElementById('pointsys');

	
	if (a == "std" ) {
		b.style.display = "block";
		c.style.display = "none";
		d.style.display = "none";
		e.style.display = "none";
		f.style.display = "none";
		
		
		
		}
	if (a == "oa") {
		b.style.display = "none";
		c.style.display = "block";
		d.style.display = "none";
		e.style.display = "none";
		f.style.display = "none";
		}
	if (a == "mp") {
		b.style.display = "none";
		c.style.display = "none";
		d.style.display = "block";
		e.style.display = "none";
		f.style.display = "none";
		}
		
		if (a == "per") {
		b.style.display = "none";
		c.style.display = "none";
		d.style.display = "none";
		e.style.display = "block";
		f.style.display = "none";
		}
		
		
		if (a == "ptsys") {
		b.style.display = "none";
		c.style.display = "none";
		d.style.display = "none";
		e.style.display = "none";
		f.style.display = "block";
		}
		
		
		
		
		
		
		
		
	}

		 
		 



			
	


	
