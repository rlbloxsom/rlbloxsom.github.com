$(document).ready(function() {

    var rand = Math.ceil(Math.random() * 4	);  
        
    var randUrl;
    
    //alert(rand);
    
    $('body').css('background-image',"url('images/bgimages/bg" + rand + ".jpg')")
    
    $("section#about-me, div#contact-info").show(700);    
    
    
});