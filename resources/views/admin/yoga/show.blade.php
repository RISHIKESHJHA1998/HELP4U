<x-theme-layout>
    <x-slot name="header">
        <h2>{{ $video->title }}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum!</p>
    </x-slot>

    <div class="row">
        <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif 
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                @php
                    echo $iframe = trim($video->url);
                @endphp
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light p-5">
                    <h4>{{ $video->title }}</h4>
                    <p>{{ $video->description }}</p>
                    <p class="text-dark">{{ $video->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
  
</x-theme-layout>