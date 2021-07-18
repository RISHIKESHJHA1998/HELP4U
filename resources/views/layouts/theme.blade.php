<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'HELP4U') }}</title>
    
        <x-styles />
    
    </head>

    <body>
        @include('layouts.theme-navigation')

        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                {{ $header }}
            </div>
        </div>
        
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">
                <main id="main">
                    {{ $slot }}
                </main>
            </div>
        </section>
        
        <x-footer />
      
        <div id="preloader"></div>  
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>
    
        <x-scripts />
    
    </body>

</html>