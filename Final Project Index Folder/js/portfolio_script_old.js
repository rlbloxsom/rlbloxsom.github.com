
   
$(document).ready(function() {

    
    function setimage(num){
        $('body').css('background-image',"url('portfolioimages/" + base + "/bg" + num + ".jpg')");
        
    $('span#current').html(num);

    }
    
    function nextimage(){
        position +=1;
        if (position >images){ position =1; }
        
        setimage(position);
    }

    function previmage(){
        position -=1;
        if (position <1){ position =images; }
        
        setimage(position);
    }
    
    setimage(position);

    $('span#total').html(images);
    
    $('a#next').click(nextimage);
    $('a#prev').click(previmage);
    
    
    
    
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