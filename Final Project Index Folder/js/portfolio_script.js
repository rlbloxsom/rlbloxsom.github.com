function loadMenu(){    
		if (screen.width <= 600) {
			$("section.content-description,div#menu-wrapper").hide(0);
        	$("a#hide").hide(0);
        	$("a#show").show(0); }
    }

$(document).ready(function() {

	var imgNumber = 1;	

	$('a#next').click(
	
	    function(){
	    
	        imgNumber += 1;
	        
	        if (imgNumber > images) {
	                imgNumber = 1;
	            }
	        
	        $('span#current').text(imgNumber);
	        
	        //fade out all bg images (could just fade out the one showing but same difference)
	        $('#bgimage img').fadeOut(50);
	        
	        //find the image that correlates to imgNumber and fade it in
	        //the eq(n) JQuery function finds the nth object that is being requested
	        $('#bgimage img').eq(imgNumber-1).fadeIn(50);
	    
	    });	
	    
	$('a#prev').click(
	
	    function(){
	    
	        imgNumber -= 1;
	        
	        if (imgNumber < 1) {
	                imgNumber = images;
	            }
	        
	        $('span#current').text(imgNumber);
	        
	        //same as in the next function
	        $('#bgimage img').fadeOut(50);
	        $('#bgimage img').eq(imgNumber-1).fadeIn(50);
	    
	    });	
	    
	    
	//AUTOMATIC IMAGE CYCLER (OPTIONAL)
	//define a function called nextImage
	function nextImage() {
	
		//every 5000 milliseconds, run the trigger function
		//the JQuery trigger function triggers a "click" on a#next every 5000 millseconds
		//setInterval("$('a#next').trigger('click');",5000);
		//which changes the image number through the a#next.click function below
		
	}
	
	//initiate the function
	nextImage();
    
    
      
	var n = $("#bgimage").length;
		$('span#total').html(images);
		
		
	
	$("a#hide").click(function(){
        $("section.content-description,section.content,div#menu-wrapper").hide(340);
        $("a#hide").hide(0);
        $("a#show").show(0);
        
        //add and remove appropriate classes so that we know via CSS
        //that the info is now hidden
        $('#bgimage').removeClass('info-on').addClass('info-off');
        
    });
    
    $("a#show").click(function(){ 
        $("section.content-description,section.content,div#menu-wrapper").show(340);
        $("a#hide").show(0);
        $("a#show").hide(0);
        
        //add and remove appropriate classes so that we know via CSS
        //that the info is now showing
        $('#bgimage').removeClass('info-off').addClass('info-on');
        $('.info-on').fadeIn(700);
        
        
    });
    
    
    
    
    
    
    
});