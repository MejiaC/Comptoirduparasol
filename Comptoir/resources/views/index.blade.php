@extends('layouts.common')

@section('content')


<section id="content">
 
    <div class="container_24 top-1">
        <div class="grid_16">
            <h2 class="p2">Who we are?</h2>
            <p class="p2"><strong><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow" target="_blank" class="link">Click here</a> for more info about this free website template created by TemplateMonster. This website template is optimized for 1280X1024 screen resolution. It is also XHTML & CSS valid.</strong>Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. Cras mattis tempor eros nec tristique.Sed sed felis arcu vel vehicula augue. Maecenas faucibus sagittis cursus. </p>
            <a href="#" class="link-1">read more</a>
        </div>   
        <div class="grid_8">
            <h2 class="p2">Demande de devis</h2>
            
            {!! Form::open([]) !!}
            {!! Form::text('nom', null, ['placeholder'=> 'Nom']) !!}
            {!! Form::email('email', null, ['placeholder'=> 'Email']) !!}
            {!! Form::text('sujet', null, ['placeholder'=> 'Sujet']) !!}
            {!! Form::text('message', null, ['placeholder'=> 'Message']) !!}
            {!! Form::close() !!}




        </div>    
        <div class="clear"></div>
    </div>
</section> 

@stop
