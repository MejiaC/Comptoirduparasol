<?php
$event_types = [
'anniversaire' => 'Anniversaire',
'mariage' => 'Mariage',
'cocktail' => 'Cocktail',
'reunion_de_famille' => 'Réunion de Famille',
'communion_bapteme' => 'Communion/Baptême',
'seminaire_congres' => 'Seminaire / Congrès',
'autre' => 'Autre',
];

$rayon_km = [
'20' => '20 Km',
'30' => '30 Km',
'50' => '50 Km',
'80' => '80 Km',
];

$accessoires = [
'bloc_sanitaire' => 'Bloc Sanitaire',
'mange_debout' => 'Mange-debout',
'chaises' => 'Chaises',
'plante' => 'Plante',
'chapiteau' => 'Chapiteau',
'podium' => 'Podium',
'chauffage' => 'Chauffage',
'tables' => 'Tables',
'eclairage' => 'Eclairage',
'tente' => 'Tente',
];

$personnes = [
'5_20' => '5 à 20',
'21_50' => '21 à 50',
'51_75' => '76 à 100',
'76_100' => '101 à 150',
'151_200' => '151 à 200',
'plus_200' => 'Plus de 200',
];

$civilite = [
'particulier' => 'Particulier',
'societe' => 'Société',
'association' => 'Association',
'mairie' => 'Mairie',
'autre' => 'Autre',
]
?>
;

@extends('layouts.common')
@section('content')
<section id="content-contact">
        <div class="grid_16">
            <h2 class="h2-4">Formulaire de devis</h2>


{!! Form::open(array('route' => 'contact', 'class' => 'form')) !!}
            {!!Form::token();!!}
            <label class="grid_16">
                <span class="label grid_5">Type d'évènement</span>
            {!!  Form::select('event_types', $event_types) !!}
            </label>

            <label class="grid_16">
                <span class="label grid_5">Date de l'évènement</span>
                <input type="date" name="date"/>
            </label>

            <label class="grid_16">
                <span class="label grid_5">Nombre de convives estimé</span>
                {!!  Form::select('personnes', $personnes) !!}

            </label>

            <label class"grid_16">
                <span class="label grid_5">Où doit se passer l'événement</span>
              {!!  Form::text('lieu') !!}
            </label>

            <label class="grid_16">
                <span class="label grid_5">Dans un rayon de</span>
                {!!  Form::select('rayon_km', $rayon_km) !!}

            </label>

            <label class="grid_16">
                <span class="label grid_5">Type de prestations recherchées pour du matériel</span>
                <ul class="grid_8">
                @foreach($accessoires as $value => $front)
                    <li>
                      <label>
                      {!! Form::checkbox('accessoires[]', $value) !!}
                      {{ $front }}
                      </label>
                    </li>
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
                {!!  Form::select('civilite', $civilite) !!}
            </label>

            <label class="grid_24">
                <span class="label grid_5"> Prénom</span>
                {!!  Form::text('prenom') !!}
            </label>

            <label class="grid_24">
                <span class="label grid_5"> Nom</span>
                {!!  Form::text('nom') !!}
            </label>

            <label class="grid_24">
                <span class="label grid_5"> Téléphone</span>
                {!!  Form::text('telephone') !!}
            </label>

           <label class="grid_24">
                <span class="label grid_5"> E-mail</span>
                  {!!  Form::email('email') !!}
            </label>

           <label class="grid_24">
                <span class="label grid_5"> Téléphone secondaire</span>
                {!!  Form::text('telephone2') !!}
            </label>

           <label class="grid_24">
                <span class="label grid_5"> Horaires pour vous joindre</span>
                {!!  Form::text('horaires') !!}
            </label>

            <div class="grid_24">
            {!!    Form::submit('Envoyer', '', array('class'=>'btn btn-primary')) !!}
            </div>
{!! Form::close() !!}
        </div>

        <div class="grid_16">
                        <div class="span6">

                            <h4 class="pull-top">Nous <strong>joindre</strong></h4>
                            <p>Si vous souhaitez nous contacter directement ou vous avez besoin d'informations complémentaires pour l'élaboration du devis, voici nos coordonnées.</p>

                            <hr />

                            <h4> La <strong>boutique</strong></h4>
                            <ul class="unstyled">
                                <li><i class="fa fa-map-marker"></i> <strong>Addresse:</strong> 13 Rue Jean Varenne 75018 Paris - FRANCE</li>
                                <li><i class="fa fa-phone"></i> <strong>Phone:</strong> +33(0)1 42 54 81 17</li>
                                <li><i class="fa fa-phone"></i> <strong>Fax:</strong> +33(0)1 42 54 81 11</li>
                                <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">contact-location@comptoirduparasol.fr</a></li>
                            </ul>

                            <hr />

                        </div>

        </div>
<div="clearfix"></div>
</section>
@stop
