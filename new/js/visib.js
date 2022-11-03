


$(document).bind( "mouseup touchend", function(e)
{
    var container = $("#navlist1 li");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $('#navlist1').css('visibility', 'hidden');
		$('#burger1').css('visibility', "visible");
		$('#burger1').css('display', "block");
		$.cookie("nav", "false" );
    }
});
	
function toggle_visibility(cl){
	var els = document.getElementById(cl);
	els.style.visibility ='visible';	
	var els2 = document.getElementById('burger1');
	els2.style.visibility = "hidden";
	els2.style.display = "none";
	$.cookie("nav", "true" );

}



// When document is ready...
$(document).ready(function() {

    // If cookie is set, scroll to the position saved in the cookie.
    if ( $.cookie("scroll") !== null ) {
        $(document).scrollTop( $.cookie("scroll") );
    }
    if ( $.cookie("nav") == "true" ) {
        toggle_visibility('navlist1');
    }
    // When a button is clicked...
    $('#navlist1 li a').on("click", function() {

        // Set a cookie that holds the scroll position.
        $.cookie("scroll", $(document).scrollTop() );
		
		var divs = document.getElementsByClassName("main");
		for (var i = 0; i < divs.length; i = i + 1) {
				
			$(divs[i]).fadeTo(100,0);
		}		

    });
	
    $('#scroll1').on("click", function() {

        // Set a cookie that holds the scroll position.
        $.cookie("scroll", $(document).scrollTop() );
	    
		var divs = document.getElementsByClassName("main");
		for (var i = 0; i < divs.length; i = i + 1) {
				
			$(divs[i]).fadeTo(100,0);
		}	

    });
	
	$('#logo11').on("click", function() {

    // Set a cookie that holds the scroll position.
    $.cookie("scroll", $(document).scrollTop() );
	   
	var divs = document.getElementsByClassName("main");
	for (var i = 0; i < divs.length; i = i + 1) {
			
		$(divs[i]).fadeTo(100,0);
	}	
    });
});




// scrolling


