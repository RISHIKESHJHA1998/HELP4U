<x-theme-layout>
    <x-slot name="header">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, molestiae quo facilis pariatur delectus vero mollitia blanditiis voluptatibus maiores reiciendis?</p>
    </x-slot>

    <main>
        @include('pages.components.about')
        @include('pages.components.counts')
        @include('pages.components.testimonials')
    </main>
 
</x-theme-layout>
