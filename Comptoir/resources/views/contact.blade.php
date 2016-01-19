@extends('layouts.common')

@section('content')
<section id="content">
	<div class="container_24 top-3">  
        <div class="grid_7">
            <h2 class="h2-4">Nous contacter:</h2>
            <div class="map img-border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.865252821858!2d2.3339578507963727!3d48.89890510570625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66ef82dd9bb33%3A0xc45e795a1b7a5ea5!2s13+Rue+Jean+Varenne%2C+75018+Paris-18E-Arrondissement!5e0!3m2!1sfr!2sfr!4v1451303484820" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
            <dl class="adr">
                <dt>Action</dt>
                <dd class="upper">13 Rue Jean Varenne, 75018 Paris</dd>
                <dd><span class="upper">Telephone:</span><strong></strong></dd>
                <dd><span class="upper">Fax:</span><strong></strong></dd>
                <dd><span class="upper">Email:</span><a href="#" class="link">contact@comptoirduparasol.fr</a></dd>
            </dl> 
        </div>
        <div class="grid_16 prefix_1">
            <h2 class="h2-4">Formulaire de contact:</h2>
            <form id="form" method="post" >
              <fieldset>
                <label><strong>Nom:</strong><input type="text" value=""></label>
                <label><strong>Prenom:</strong><input type="text" value=""></label>
                    <label><strong>Email:</strong><input type="text" value=""></label>
                <label><strong>Message:</strong><textarea></textarea></label>
                <INPUT type="checkbox" name="choix1" value="1"> Anniversaire
                <INPUT type="checkbox" name="choix1" value="2"> Mariage
                 <INPUT type="checkbox" name="choix1" value="3"> Cocktail / Soirée entreprise
                 <INPUT type="checkbox" name="choix1" value="4"> Réunion de famille
                <INPUT type="checkbox" name="choix1" value="5"> Communion / Baptême
                                    <INPUT type="checkbox" name="choix1" value="6"> Séminaire / Congrès
                                        <INPUT type="checkbox" name="choix1" value="1"> Autre ( à préciser)
                <div class="btns"><a href="#" class="link-1">Effacer</a><a href="#" class="link-1" onClick="document.getElementById('form').submit()">Envoyer</a></div>
              </fieldset>  
            </form> 
        </div>
        <div class="clear"></div>
    </div>
</section> 

@stop