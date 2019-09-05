<?php
//$res = ($A == $B) ? "A es igual a B" : "A no es igual a B";
//Estado es la variable que me indica si esta en produccion o en local host, los valores son 'prod' o 'local'
$estado= 'local';

$direcotio = ($estado == 'local') ?  'temp/' :  'public/temp/';




?>

@extends ('index')

@section('importaciones')
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

<link rel="apple-touch-icon" href="apple-touch-icon.png">
        
<link rel="stylesheet" href="{{asset('directorio')}}css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('')}}css/bootstrap-theme.min.css">
<link rel="stylesheet" href="{{asset('public/')}}temp/css/fontAwesome.css">
<link rel="stylesheet" href="{{asset('public/temp/')}}css/hero-slider.css">
<link rel="stylesheet" href="{{asset('public/temp/css/templatemo-style.css')}}">
<link rel="stylesheet" href="{{asset('public/temp/')}}css/lightbox.css">
<script src="{{asset('directorio')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('public/temp')}}/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="{{asset('public/temp')}}/js/vendor/bootstrap.min.js"></script>
<script src="{{asset('public/temp')}}/js/plugins.js"></script>
<script src="{{asset('public/temp')}}/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
@endsection