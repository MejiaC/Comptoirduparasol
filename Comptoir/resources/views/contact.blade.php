<?php 
$event_types = [
"anniversaire" => "Anniversaire",
"mariage" => "Mariage",
"cocktail" => "Cocktail",
"reunion_de_famille" => "Réunion de Famille",
"communion_bapteme" => "Communion/Baptême",
"seminaire_congres" => "Seminaire / Congrès",
"autre" => "Autre",
];

$rayon_km = [
"20" => "20 Km",
"30" => "30 Km",
"50" => "50 Km",
"80" => "80 Km",
];


$accessoires = [
"bloc_sanitaire" => "Bloc Sanitaire",
"mange_debout" => "Mange-debout",
"chaises" => "Chaises",
"plante" => "Plante",
"chapiteau" => "Chapiteau",
"podium" => "Podium",
"chauffage" => "Chauffage",
"tables" => "Tables",
"eclairage" => "Eclairage",
"tente" => "Tente",
];

$personnes = [
"5_20" => "5 à 20",
"21_50" => "21 à 50",
"51_75" => "76 à 100",
"76_100" => "101 à 150",
"151_200" => "151 à 200",
"plus_200" => "Plus de 200",
];

$civilite = [
"particulier" => "Particulier",
"societe" => "Société",
"association" => "Association",
"mairie" => "Mairie",
"autre" => "Autre",
]
?>
;

@extends('layouts.common')
@section('content')
<section id="content">
    <div class="container_24 top-3">
        <div class="grid_16 container_24">
            <h2 class="h2-4">Demande de devis</h2>

            <form action="" method="POST">
            <h3>Prestation</h3>
            <label class="grid_16">
                <span class="label grid_5">Type d'évènement</span>
                <select name="event_types" required>
                    @foreach($event_types as $value => $front)
                    <option value="{{ $value }}"> {{ $front }} </option>
                    @endforeach
                </select>
            </label>

            <label class="grid_16">
                <span class="label grid_5">Date de l'évènement</span>
                <input type="date" name="date"/>
            </label>

            <label class="grid_16">
                <span class="label grid_5">Nombre de convives estimé</span>
                <select name="personnes">
                    @foreach($personnes as $value => $front)
                    <option value="{{ $value }}"> {{ $front }} </option>
                    @endforeach
                </select>
            </label>

            <label class"grid_16">
                <span class="label grid_5">Où doit se passer l'événement</span>
                <input type="text" name="lieu" required/>
            </label>

            <label class="grid_16">
                <span class="label grid_5">Dans un rayon de</span>
                <select name"rayon_km" required>
                    @foreach($rayon_km as $value => $front)
                        <option value="{{ $value }}"> {{ $front }} </option>
                    @endforeach
                </select>
            </label>

            <label class="grid_16">
                <span class="label grid_5">Type de prestations recherchées pour du matériel</span>
                <ul class="grid_8">
                @foreach($accessoires as $value => $front)
                    <li><input type="checkbox" name="accessoires[]" value=" {{ $value }}"> {{ $front }} </input></li>
                @endforeach
                </ul>
            </label>   

            <label class="grid_16">
                <span class="label grid_5">Indiquez toutes les informations complémentaires importantes pour que nous puissions traiter votre demande au mieux</span>
                <textarea name="informations" rows="5" cols="70"></textarea>
            </label>   

            <h3>Coordonnées</h3>
            <label class="grid_16">
                <span class="label grid_5"> Civilité</span>
                <select name="civilite" required>
                    @foreach($civilite as $value => $front)
                        <option value="{{ $value }}"> {{ $front }} </option>
                    @endforeach
                </select>
            </label>

            <label class="grid_24">
                <span class="label grid_5"> Prénom</span>
                <input type="text" name="prenom" required/>
            </label>

            <label class="grid_24">
                <span class="label grid_5"> Nom</span>
                <input type="text" name="nom" required/>
            </label>

            <label class="grid_24">
                <span class="label grid_5"> Téléphone</span>
                <input type="text" name="telephone" required/>
            </label>

           <label class="grid_24">
                <span class="label grid_5"> E-mail</span>
                <input type="email" name="email" required/>
            </label>

           <label class="grid_24">
                <span class="label grid_5"> Téléphone secondaire</span>
                <input type="text" name="telephone2"/>
            </label> 

           <label class="grid_24">
                <span class="label grid_5"> Horaires pour vous joindre</span>
                <input type="text" name="horaires"/>
            </label>

            <div class="grid_24">
                <input type="submit" value="Envoyer"/>
            </div>
            </form>
        </div>
    </div>
</section> 
@stop