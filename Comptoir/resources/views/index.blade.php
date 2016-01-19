

@extends('layouts.common')
@section('content')
<section id="content">
   <div class="container_24 top-1">
   <div class="grid_14">
        <div class="the-slider" data-tesla-plugin="slider" data-tesla-item=".slide" data-tesla-next=".slide-right" data-tesla-prev=".slide-left" data-tesla-container=".slide-wrapper">
                    <div class="slide-arrows">
                        <div class="slide-left"></div>
                        <div class="slide-right"></div>
                    </div>
                    <ul class="slide-wrapper">
                        <li class="slide"><img src="../images/.jpg" alt="slider image"></li>
                        <li class="slide"><img src="../images/.jpg" alt="slider image"></li>
                        <li class="slide"><img src="images/slide-6.jpg" alt="slider image"></li>
                    </ul>
                </div>
   </div>
   <div class="grid_8">
      <h2 class="h2-4">devis</h2>
      <div class="p2">
         {!! Form::open([]) !!}
         {!! Form::text('nom', null, ['placeholder'=> 'Nom']) !!}
         </br>
         {!! Form::email('email', null, ['placeholder'=> 'Email']) !!}
         </br>
         {!! Form::text('sujet', null, ['placeholder'=> 'Sujet']) !!} 
         </br>
         {!! Form::textarea('message', null, ['placeholder'=> 'Message']) !!}
         {!! Form::submit('Envoyer !') !!}
         {!! Form::close() !!}
      </div>
   </div>
   <div class="grid_24 align-c">
      <h2 class="h2-2">Notre secteur d'activité:</h2>
      <div class="grid_8 top-1">
         <div class="box-2">
            <img src="images/terrasse.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
         <div class="box-2 top-4 p2">
            <img src="images/forains.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
      </div>
      <div class="grid_8 top-1">
         <div class="box-2">
            <img src="images/mesure.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
         <div class="box-2 top-4">
            <img src="images/tente.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
      </div>
      <div class="grid_8 top-1">
         <center>
            <h3> Coordonnées </h3>
            <hr style="width:200px;" />
            <strong>
            Comptoir du parasol 
            </br></strong>
            13 Rue Jean Varenne
            </br>
            75018 Paris
            </br>
            Tel : 01 42 54 81 17
            </br>
            Fax : 01 42 54 81 11
            <h5>Horaires d'ouverture</h5>
            <hr style="width:100px;" />
            Lundi - Vendredi
            </br>
            9h00 - 12h00 / 13h00 - 18h00
            Week-end
            </br>
            fermé
         </center>
      </div>
   </div>
   <div class="grid_24 align-c">
      <div class="grid_8 top-1">
         <div class="box-2">
            <img src="images/Location.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
         <div class="box-2 top-4 p2">
            <img src="images/reception.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
      </div>
      <div class="grid_8 top-1">
         <div class="box-2">
            <img src="images/marche.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
         <div class="box-2 top-4">
            <img src="images/Eclairage.jpg" alt="" class="img-indent img-border">
            <div class="extra-wrap">
               <p>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec <br>tristique.</p>
            </div>
         </div>
      </div>
   </div>
</section>
@stop

