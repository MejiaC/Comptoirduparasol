<?php

$image = [
  'images/resultats/resultat1.jpg' => 'resultat1',
  'images/resultats/resultat2.jpg' => 'resultat2',
  'images/resultats/resultat3.jpg' => 'resultat3',
  'images/resultats/resultat4.jpg' => 'resultat4',
  'images/resultats/resultat5.jpg' => 'resultat5',
];

 ?>





<div id="slideshow-wrap">
    <input type="radio" id="button-1" name="controls" checked="checked"/>
    <label for="button-1"></label>
    <input type="radio" id="button-2" name="controls"/>
    <label for="button-2"></label>
    <input type="radio" id="button-3" name="controls"/>
    <label for="button-3"></label>
    <input type="radio" id="button-4" name="controls"/>
    <label for="button-4"></label>
    <input type="radio" id="button-5" name="controls"/>
    <label for="button-5"></label>
    <label for="button-1" class="arrows" id="arrow-1">></label>
    <label for="button-2" class="arrows" id="arrow-2">></label>
    <label for="button-3" class="arrows" id="arrow-3">></label>
    <label for="button-4" class="arrows" id="arrow-4">></label>
    <label for="button-5" class="arrows" id="arrow-5">></label>
    <div id="slideshow-inner">
        <ul>
          @foreach ($image as $value => $front)
            <li id="slide1">
                <img src="{{ $value }}" />
          @endforeach

                <div class="description">
                    <input type="checkbox" id="show-description-1"/>
                    <label for="show-description-1" class="show-description-label">I</label>
                    <div class="description-text">
                        <h2></h2>
                        <p></p>
                    </div>
                </div>

            </li>
        </ul>
    </div>
</div>
