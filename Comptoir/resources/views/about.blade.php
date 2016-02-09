<?php
$image = [
"/images/resultats/locationtente-parasol/resultat1.jpg" => "resultat1",
"/images/resultats/locationtente-parasol/resultat2.jpg" => "resultat2",
];
?>

@extends('layouts.common')

@section('content')

<section id="content">
	<div class="container_24 top-3">
    	<div class="grid_24 align-c">
			<h2 class="h2-2">Nos prestations </h2>
           
            <div class="grid_16 top-1">
    			<div class="box-6">
                @foreach ($image as $value => $front)
                	<img src="{{$value}}" width="400" height="300" alt="" class="img-indent img-border">
                @endforeach
                </div>
            </div>
            <div class="grid_8 top-4 p2">   
                <div class="extra-wrap">
                    <p>Description ici</p>
                    <strong>lieu</strong><br>
                    <span> ? </span>
                </div>
            </div>
        </div>  
    <div class="grid_24 align-c">
            <div class="grid_16 top-1">
                <div class="box-6">
                    <img src="images/resultats/resultat1.jpg" width="400" height="300" alt="" class="img-indent img-border">
                </div>
            </div>
            <div class="grid_8 top-4 p2">   
                <div class="extra-wrap">
                    <p>Description ici</p>
                    <strong>lieu</strong><br>
                    <span> ? </span>
                </div>
            </div>
        </div> 
    </div>
        <div class="grid_24 align-c">
            <div class="grid_16 top-1">
                <div class="box-6">
                    <img src="images/resultats/resultat2.jpg" width="400" height="300" alt="" class="img-indent img-border">
                </div>
            </div>
            <div class="grid_8 top-4 p2">   
                <div class="extra-wrap">
                    <p>Description ici</p>
                    <strong>lieu</strong><br>
                    <span> ? </span>
                </div>
            </div>
        </div> 
    </div>
        <div class="grid_24 align-c">
            <div class="grid_16 top-1">
                <div class="box-6">
                    <img src="images/resultats/resultat3.jpg" width="400" height="300" alt="" class="img-indent img-border">
                </div>
            </div>
            <div class="grid_8 top-4 p2">   
                <div class="extra-wrap">
                    <p>Description ici</p>
                    <strong>lieu</strong><br>
                    <span> ? </span>
                </div>
            </div>
        </div> 
    </div>
        <div class="grid_24 align-c">
            <div class="grid_16 top-1">
                <div class="box-6">
                    <img src="images/resultats/resultat4.jpg" width="400" height="300" alt="" class="img-indent img-border">
                </div>
            </div>
            <div class="grid_8 top-4 p2">   
                <div class="extra-wrap">
                    <p>Description ici</p>
                    <strong>lieu</strong><br>
                    <span> ? </span>
                </div>
            </div>
        </div> 
    </div>
        <div class="grid_24 align-c">
            <div class="grid_16 top-1">
                <div class="box-6">
                    <img src="images/resultats/resultat5.jpg" width="400" height="300" alt="" class="img-indent img-border">
                </div>
            </div>
            <div class="grid_8 top-4 p2">   
                <div class="extra-wrap">
                    <p>Description ici</p>
                    <strong>lieu</strong><br>
                    <span> ? </span>
                </div>
            </div>
        </div> 
    </div>
</section> 
@stop
