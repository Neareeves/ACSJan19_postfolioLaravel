<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>
  <link href="https://fonts.googleapis.com/css?family=Anton|Righteous|Timmana" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset(mix('/css/app.css')) }}">
  <link rel="stylesheet" type="text/css" href="{{ asset(mix('/css/style.css')) }}">

<link rel="manifest" href="manifest.json">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </head>
 <body>

<nav>
  <ul>
    <li><a href='{{ route("home") }}'><img src="{{asset('images/logo.png')}}"></a></li>
    <li class='francais'><a href="{{ route('accueil') }}">Qui suis-je?</a></li>
     <li class='anglais'><a href="{!! url('/accueil'); !!}">Who am I?</a></li>

    <li class='francais'><a href='{!! url("/projet"); !!}'>Projets</a></li>
    <li class='anglais'><a href='{!! url("/projet"); !!}'>Projects</a></li>
    <li class='francais'><a href="{{asset('images/CV.pdf')}}">CV</a></li>
    <li class='anglais'><a href="{{asset('images/resume.pdf')}}">Resume</a></li>
    <li><a href='{!! url("/accueil#contact"); !!}'>Contact</a></li>
    <li id="inEnglish" class="francais">Anglais</a></li>
     <li id="inFrench" class="anglais">Français</a></li>
    
  </ul>
</nav>