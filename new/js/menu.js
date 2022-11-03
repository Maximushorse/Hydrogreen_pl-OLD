// distance

$(document).ready(function() {
   
var mX, mY, distance,
	$distance = $('#distance span');
	//$element  = $('#navlist1');
		
function calculateDistancemenu(elem, mouseX, mouseY) {
	return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()*0.8)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
}
function calculateDistance(elem, mouseX, mouseY) {
	return Math.floor(Math.sqrt(Math.pow(mouseX - (elem.offset().left+(elem.width()*0.5)), 2) + Math.pow(mouseY - (elem.offset().top+(elem.height()/2)), 2)));
}		
		
$(document).mousemove(function(e) {  
	mX = e.pageX;
	mY = e.pageY;
 
	$('.navlist li a').each(function(i, obj) {
		distance = calculateDistancemenu($(this), mX, mY);
		$distance.text(distance);  
		if ((distance < 60) && (distance > 20) && ( !$(this).is(".active")) ){
			$(this).css("fontSize", (-(distance-20)*12/40+24));
			$(this).css("margin-top", ((distance-20)*6/40+8));
			$(this).css("margin-bottom", ((distance-20)*6/40+8));
		//	$(this).css("letter-spacing", (-(distance-20)*2/40+2));
			   
			//$(this).css("margin-right", (-(distance-20)*20/40+20));
		} else if ((distance >= 60) && ( !$(this).is(".active"))) {
			$(this).css("fontSize", 12);
			$(this).css("margin-top", 13);
			$(this).css("margin-bottom", 13);
		}
	}); 
	
	distance = calculateDistance($('#burger1'), mX, mY);
	if ((distance < 32) && (distance > 20) && ( !$(this).is(".active")) ){
		$('#burger1').css("background-size", (-(distance-20)*13/12+53));
	} else if (distance >= 32) {
		$('#burger1').css("background-size", 40);
	}
	
	distance = calculateDistance($('#fb'), mX, mY);
	if ((distance < 25) && (distance > 10) && ( !$(this).is(".active")) ){
		$('#fb').css("background-size", (-(distance-10)*5/15+25));
	} else if (distance >= 25) {
		$('#fb').css("background-size", 20);
	}	
	
   	distance = calculateDistance($('#tw'), mX, mY);
	if ((distance < 25) && (distance > 10) && ( !$(this).is(".active")) ){
		$('#tw').css("background-size", (-(distance-10)*5/15+25));
	} else if (distance >= 25) {
		$('#tw').css("background-size", 20);
	}
	
	distance = calculateDistance($('#scroll1'), mX, mY);
	if ((distance < 45) && (distance > 20) && ( !$(this).is(".active")) ){
		$('#scroll1').css("background-size", (-(distance-20)*5/25+22));
	} else if (distance >= 45) {
		$('#scroll1').css("background-size", 17);
	}
	  
});
		
}); 
