function loadMenu(){    
		if (screen.width <= 600) {
			$("section.content-description,div#menu-wrapper").hide(0);
        	$("a#hide").hide(0);
        	$("a#show").show(0); }
    }

$(document).ready(function() {

    $('#bgimage').cycle({ 
    	fx:     'fade', 
   		speed:  'fast', 
    	timeout: 0, 
    	next:   '#next', 
    	prev:   '#prev' 
    	
	});
	
      
  /*  function setimage(num){
        $('span#current').html(num + ".jpg");
    };
    
    function nextimage(){
        position +=1;
        if (position >images){ position =1; }
    }

    function previmage(){
        position -=1;
        if (position <1){ position =images; }
    }
*/

	
    
    
      
	var n = $("#bgimage").length;
		$('span#total').html(images);
	
	$("a#hide").click(function(){
        $("section.content-description,div#menu-wrapper").hide(700);
        $("a#hide").hide(0);
        $("a#show").show(0);
    });
    
    $("a#show").click(function(){ 
        $("section.content-description,div#menu-wrapper").show(700);
        $("a#hide").show(0);
        $("a#show").hide(0)(function(){});
    });
    
});