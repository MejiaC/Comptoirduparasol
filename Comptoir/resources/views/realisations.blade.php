@extends('layouts.common')

@section('content')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>jQuery Photo Slide Show with Slick Caption Tutorial Revisited</title>

<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {      
    
    //Execute the slideShow, set 4 seconds for each images
    slideShow(4000);

});

function slideShow(speed) {


    //append a LI item to the UL list for displaying caption
    $('ul.slideshow').append('<li id="slideshow-caption" class="caption"><div class="slideshow-caption-container"><h3></h3><p></p></div></li>');

    //Set the opacity of all images to 0
    $('ul.slideshow li').css({opacity: 0.0});
    
    //Get the first image and display it (set it to full opacity)
    $('ul.slideshow li:first').css({opacity: 1.0}).addClass('show');
    
    //Get the caption of the first image from REL attribute and display it
    $('#slideshow-caption h3').html($('ul.slideshow li.show').find('img').attr('title'));
    $('#slideshow-caption p').html($('ul.slideshow li.show').find('img').attr('alt'));
        
    //Display the caption
    $('#slideshow-caption').css({opacity: 0.7, bottom:0});
    
    //Call the gallery function to run the slideshow    
    var timer = setInterval('gallery()',speed);
    
    //pause the slideshow on mouse over
    $('ul.slideshow').hover(
        function () {
            clearInterval(timer);   
        },  
        function () {
            timer = setInterval('gallery()',speed);         
        }
    );
    
}

function gallery() {


    //if no IMGs have the show class, grab the first image
    var current = ($('ul.slideshow li.show')?  $('ul.slideshow li.show') : $('#ul.slideshow li:first'));
    
    //trying to avoid speed issue
    if(current.queue('fx').length == 0) {   
    
        //Get next image, if it reached the end of the slideshow, rotate it back to the first image
        var next = ((current.next().length) ? ((current.next().attr('id') == 'slideshow-caption')? $('ul.slideshow li:first') :current.next()) : $('ul.slideshow li:first'));
            
        //Get next image caption
        var title = next.find('img').attr('title'); 
        var desc = next.find('img').attr('alt');    
    
        //Set the fade in effect for the next image, show class has higher z-index
        next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);
        
        //Hide the caption first, and then set and display the caption
        $('#slideshow-caption').slideToggle(300, function () { 
            $('#slideshow-caption h3').html(title); 
            $('#slideshow-caption p').html(desc); 
            $('#slideshow-caption').slideToggle(500); 
        });     
    
        //Hide the current image
        current.animate({opacity: 0.0}, 1000).removeClass('show');

    }

}
</script>
<style type="text/css">

body {
    font-family:arial;  
    font-size:12px;
}

ul.slideshow {
    list-style:none;
    width:800px;
    height:400px;
    overflow:hidden;
    position:relative;
    margin:auto;
    padding:0;
    margin-top:20px;
    border: double 7px #E69400
}   

ul.slideshow li {
    position:absolute;
    left:0;
    right:0;
}

ul.slideshow li.show {
    z-index:500;    
}

ul img {
    border:none;  
}


#slideshow-caption {
    width:450px;
    height:70px;
    position:absolute;
    bottom:0;
    left:0; 
    color:#fff;
    background:#000;
    z-index:500;
    margin: 0px;
margin-left: 1px;
}

#slideshow-caption .slideshow-caption-container {
    padding:5px 10px;       
    z-index:1000;
}

#slideshow-caption h3 {
    margin:0;
    padding:0;  
    font-size:14px;
}

#slideshow-caption p {
    margin:5px 0 0 0;
    padding:0;
}

</style>
</head>
<body>

<div class="slogan">
    <div class="slogan-1">
        <span id="animationslogan" class="bounceInUp animated" style="display: block">
            <h5>Vous recherchez de l'expérience</h5> 
        </span>

        <span id="animationslogan" class="zoomIn delay1s0ms animated" style="display: block">
            <h7 class="abris">Vous êtes à la recherche de professionnels ?</h6>
        </span>
    </div>

    <div class="slogan-2">
        <span id="animationslogan" class="rollIn delay3s0ms animated" style="display: block">
            <h7 class="realisation">Réalisation de vos</h6>
        </span>

        <span id="animationslogan" class="bounceInDown delay4s0ms animated" style="display: block">
            <h7 class="forum">Forums</h6>
        </span>

        <span id="animationslogan" class="bounceInDown delay5s0ms animated" style="display: block">
            <h7 class="sport">Evènements sportifs</h6>
        </span>

        <span id="animationslogan" class="bounceInDown delay5s5ms animated" style="display: block">
            <h7 class="gala">Marché</h6>
        </span>
    </div>    
</div>
<div class="sous-slogan">
    <h7 class="sous-slogan"></p>
    <a class="btn btn-large btn-primary" href="/contact/">Contactez-nous !</a>
</div>



<hr class="style18">



<ul class="slideshow">
    <li class="show">
        <img src="images/realisation/a.jpg" title="Tentes" alt="Installation de tentes de 3 mètres sur 3 mètres sur une péniche au coeur de Paris"/></a></li>
    <li><img src="images/realisation/b.jpg" title="Tentes" alt="Installation de tentes de couleur bleu pour un forum"/></a></li>
    <li><img src="images/realisation/c.jpg" title="Tente de réception" alt="Tente de réception de 12 mètres par 4 mètres"/></a></li>
    <li><img src="images/realisation/e.jpg" title="Défilé" alt="Installation de voile et ensemble pour un défilé de mode au coeur de Paris"/></a></li>
    <li><img src="images/realisation/f.jpg" title="Tentes" alt="Installation de tentes pour un forum associatif"/></a></li>
    <li><img src="images/realisation/g.jpg" title="Scène" alt="Installation de podium de 6 mètres par 4 mètres couvert"/></a></li>
    <li><img src="images/realisation/h.jpg" title="Cocktail" alt="Installation de reception pour un cocktail au coeur de paris"/></a></li>
    <li><img src="images/realisation/i.jpg" title="" alt=""/></a></li>
    <li><img src="images/realisation/j.jpg" title="Fête" alt="Installation pour une fête de quartier"/></a></li>
    <li><img src="images/realisation/k.jpg" title="" alt=""/></a></li>
    <li><img src="images/realisation/m.jpg" title="Comité" alt="Installation pour un comité d'entreprise"/></a></li>
    <li><img src="images/realisation/o.jpg" title="Mariage" alt="Installation pour un mariage/></a></li>
    <li><img src="images/realisation/p.jpg" title="Forum" alt=""/>Installation pour un forum sportif sur un espace vert</a></li>
    <li><img src="images/realisation/q.jpg" title="Braderie" alt=""/>Installation pour une braderie</a></li>
</ul>

<br/><br/>


</body>
</html>
@stop