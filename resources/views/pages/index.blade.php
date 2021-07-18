<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <x-styles />
    
    </head>

    <body>
        @include('layouts.theme-navigation')
        
        @include('pages.components.hero')

        @include('pages.components.about')

        @include('pages.components.counts')

        @include('pages.components.courses')

        
        <div class="section-title d-flex justify-content-center">
           <p>Our Team</p>

        </div>
        @include('pages.components.trainers')

        <x-footer />
      
        <div id="preloader"></div>  
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
    
        <x-scripts />
    
    </body>

</html>