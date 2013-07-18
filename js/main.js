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
        $(this).animate({ color:'#8D172F'},100);
    }).on('mouseout', '.scroll', function() {
        $(this).animate({ color:'#808080'},100);
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
	    }, 400);
	});
	
	$("body").on('click', '#news', function(){
	    $('html, body').animate({
	        scrollTop: $("#news-text").offset().top - 20
	    }, 400);
	});
	
	$("body").on('click', '#bio', function(){
	    $('html, body').animate({
	        scrollTop: $("#bio-text").offset().top - 20
	    }, 400);
	});
	
	$('body').on('click', '#top', function(){
	    $('html, body').animate({
	        scrollTop: $("#main").offset().top - 20
	    }, 400);
	});
	
}

//$(document).ready(function() {
//  $('.focus').animate({color:'#8D172F', 'borderBottomColor': '#8D172F' },800);
//});
//
//$(document).ready(function(){
//    $(".text").mouseover(function() {
//        $(this).animate({ color:'#8D172F'},250);
//    }).mouseout(function() {
//        $(this).animate({ color:'#4C4C4E'},250);
//    });       
//});
//
//$(document).ready(function(){
//    $(".scroll").mouseover(function() {
//        $(this).animate({ color:'#8D172F'},250);
//    }).mouseout(function() {
//        $(this).animate({ color:'#808080'},250);
//    });       
//});
//
//$(document).ready(function(){
//    $(".text2").mouseover(function() {
//        $(this).animate({ color:'#8D172F'},250);
//    }).mouseout(function() {
//        $(this).animate({ color:'white'},250);
//    });
//});

// $(document).ready(function(){
// 	$(".button").mouseover(function(){
// 		$(this).animate({ color: '#8D172F', backgroundColor:'#D4D4D4'},250);
// 	}).mouseout(function() {
// 		$(this).animate({ color: '#4C4C4E', backgroundColor:'#FAFAFA'},250);
// 	});
// });

//$(document).ready(function(){
//	$(".project-box").hover(
//		function () { $(".project-box").stop().fadeTo(300, 0.6); $(this).stop().fadeTo(200, 1); }, 
//		function () { $(".project-box").stop().fadeTo(300, 1); }
//	);
//});

//$(document).ready(function(){
//  $("#bio").click(function(){
//    $('html, body').animate({
//        scrollTop: $("#bio-text").offset().top - 80
//    }, 800);
//  });
//});
//
//$(document).ready(function(){
//  $("#hobbies").click(function(){
//    $('html, body').animate({
//        scrollTop: $("#hobbies-text").offset().top - 80
//    }, 800);
//  });
//});
//
//$(document).ready(function(){
//  $("#news").click(function(){
//    $('html, body').animate({
//        scrollTop: $("#news-text").offset().top - 80
//    }, 800);
//  });
//});
