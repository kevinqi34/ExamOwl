
//page scroll ui


$( document ).ready(function() {


var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0)
			
		
if (w > 1224) {



$('#arrow').click(function(){
	
			
	
	$("html, body").animate({ scrollTop: 750 }, "slow");
	
	
	
	});



}else {
	
	
	$('#arrow').click(function(){
	
			
	
	$("html, body").animate({ scrollTop: 900 }, "slow");
	
	
	
	});
	
	
	
	
	}



});


//output tags


$( document ).ready(function() {
		i = 2;

	setInterval(function(){
				if (i % 5 == 1) {
					word = "<b>High School</b>";				
				}else if (i % 5 == 2) {
					word = "<b>Middle School</b>";	
				}else if (i % 5 == 3) {
					word = "<b>College</b>";	
				}else if (i % 5 == 4) {
					word = "<b>Advanced Placement</b>";
					
				}else if(i % 5 == 0) {			
					word = "<b>IB Diploma</b>";	
				}else {
					
					alert("Error!");
					//break;
					
					}			
		
				document.getElementById("tag").innerHTML = word;
				i++;
		 }, 3000);





});


