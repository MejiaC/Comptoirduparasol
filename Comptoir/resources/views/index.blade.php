<?php

$jours = [
  [
    'lundi' => 'Lundi',
    'heure' => '9:00 - 18:00'
  ],
  [
    'mardi' => 'Mardi',
    'heure' => '9:00 - 18:00'
  ],
  [
  'mercredi' => 'Mercredi',
  'heure' => '9:00 - 18:00'
  ],
  [
  'jeudi' => 'Jeudi',
  'heure' => '9:00 - 18:00'
  ],
  [
  'vendredi' => 'Vendredi',
  'heure' => '9:00 - 18:00'
  ],
  [
  'samedi' => 'Samedi',
  'heure' => 'Fermé'
  ],
  [
  'dimanche' => 'Dimanche',
  'heure' => 'Fermé'
  ],
];
    ?>

@extends('layouts.common')
@section('content')

<section id="slideshow">
   <div class="container">
      @include('layouts.slider')
<div class="coordonnees">
         <center>
           <h3 class="header-horaires">Heures d'ouverture</h3>
<ul id="open-hours">
  @foreach ($jours as $value => $front)
  <li>
    <div class="date-day grid2column">
     <h6>{{ $value }}</h6>
    </div>
   <div class="hours-date grid2column lastcolumn">{{ $heure  }} </div>
 </li>
 @endforeach
</ul>
         </center>
</div>
      </div>

</section>
@stop
