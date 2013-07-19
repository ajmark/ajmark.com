// LOAD CONTENT ON START
$(document).ready(function(){
	
	// HELPER FUNCTIONS
	hoverActions();
	home_scrollToSection();
	
});


// catch all interactions
function hoverActions(){
	
	$('body').on('mouseover', '.text', function() {
        $(this).animate({ color:'#8D172F'},250);
    }).on('mouseout', '.text', function() {
        $(this).animate({ color:'#4C4C4E'},250);
    });


	$('body').on('mouseover', '.scroll', function() {
        $(this).animate({ color:'#808080'},100);
    }).on('mouseout', '.scroll', function() {
        $(this).animate({ color:'#8D172F'},100);
    });
	
	
	// FADE OUT PROJECT BOXES
	$('body').on('mouseover', '.project-box', function(){ 
		$(".project-box").stop().fadeTo(300, 0.6); 
		$(this).stop().fadeTo(200, 1); 
		
	}).on('mouseout', '.project-box', function(){ 
		$(".project-box").stop().fadeTo(300, 1); 
	});
	
	
	$('body').on('mouseover', '.text2', function() {
        $(this).animate({ color:'#8D172F'},250);
    }).on('mouseout', '.text2', function() {
        $(this).animate({ color:'white'},250);
    });
	
}

function home_scrollToSection(){
	
	$('body').on('click', '#portfolio', function(){
	    $('html, body').animate({
	        scrollTop: $("#portfolio-main").offset().top - 20
	    }, 400);
	});
	
	$('body').on('click', '#hobbies', function(){
	    $('html, body').animate({
	        scrollTop: $("#hobbies-text").offset().top - 20
	    }, 500);
	});
	
	$("body").on('click', '#news', function(){
	    $('html, body').animate({
	        scrollTop: $("#news-text").offset().top - 20
	    }, 500);
	});
	
	$("body").on('click', '#bio', function(){
	    $('html, body').animate({
	        scrollTop: $("#bio-text").offset().top - 20
	    }, 500);
	});
	
	$('body').on('click', '#top', function(){
	    $('html, body').animate({
	        scrollTop: $("#main").offset().top - 20
	    }, 500);
	});
	
}

