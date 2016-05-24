 
<title>Comptoir du parasol - accessoires et matériel forains </title>
 <?php

$jours = [
  [
    'jour' => 'Lundi',
    'heure' => '9:00 - 18:00',
  ],
  [
    'jour' => 'Mardi',
    'heure' => '9:00 - 18:00',
  ],
  [
  'jour' => 'Mercredi',
  'heure' => '9:00 - 18:00',
  ],
  [
  'jour' => 'Jeudi',
  'heure' => '9:00 - 18:00',
  ],
  [
  'jour' => 'Vendredi',
  'heure' => '9:00 - 18:00',
  ],
  [
  'jour' => 'Samedi',
  'heure' => 'Fermé',
  ],
  [
  'jour' => 'Dimanche',
  'heure' => 'Fermé',
  ],
];
    ?>

@extends('layouts.common')
@section('content')

<section id="slideshow">
   <div class="container">
      @include('layouts.slider')
      <div class="coordonnees">
           <h3 class="header-horaires">Heures d'ouverture</h3>
              <ul id="open-hours">
              
                @foreach ($jours as $value => $front)
                  <li>
                    <div class="grid2column"><span>{{ $front["jour"] }}</span></div>
                    <div class="grid2column lastcolumn"><span>{{ $front["heure"]  }}</span></div>
                    <div class="clearfix"></div>
                  </li>
               @endforeach
              </ul>
      </div>

</section>
@stop
