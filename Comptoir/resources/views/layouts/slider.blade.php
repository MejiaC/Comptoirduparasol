<?php

$images = [
  [
    'image' => 'images/resultats/resultat1.jpg',
    'description' => 'description image 1',
    'titre' => 'Image 1'
  ],
  [
    'image' => 'images/resultats/resultat2.jpg',
    'description' => 'description image 2',
    'titre' => 'Image 2'
  ],
  [
    'image' => 'images/resultats/resultat3.jpg',
    'description' => 'description image 3',
    'titre' => 'Image 3'
  ],
  [
    'image' => 'images/resultats/resultat4.jpg',
    'description' => 'description image 4',
    'titre' => 'Image 4'
  ],
  [
    'image' => 'images/resultats/resultat5.jpg',
    'description' => 'description image 5',
    'titre' => 'Image 5'
  ],
];

 ?>





<div id="slideshow-wrap">
    <input type="radio" id="button-1" name="controls" checked="checked"/>
    <input type="radio" id="button-2" name="controls"/>
    <input type="radio" id="button-3" name="controls"/>
    <input type="radio" id="button-4" name="controls"/>
    <input type="radio" id="button-5" name="controls"/>

    <label for="button-1"></label>
    <label for="button-2"></label>
    <label for="button-3"></label>
    <label for="button-4"></label>
    <label for="button-5"></label>

    <label for="button-1" class="arrows" id="arrow-1">></label>
    <label for="button-2" class="arrows" id="arrow-2">></label>
    <label for="button-3" class="arrows" id="arrow-3">></label>
    <label for="button-4" class="arrows" id="arrow-4">></label>
    <label for="button-5" class="arrows" id="arrow-5">></label>
    <div id="slideshow-inner">
        <ul>
          @foreach ($images as $index => $data)
            <li id="slide1">
                <img src="{{ $data['image'] }}" />

                <div class="description">
                    <input type="checkbox" id="show-description-{{ $index + 1}}"/>
                    <label for="show-description-{{ $index + 1}}" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2>{{ $data['titre'] }}</h2>
                        <p>{{ $data['description'] }}</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
