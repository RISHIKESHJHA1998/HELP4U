<x-theme-layout>
    <x-slot name="header">
        <h2>{{ $blog->title }}</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, veritatis.</p>
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
                <img src="{{ asset('post_images/' .$blog->image) }}" class="img-fluid" alt="{{ $blog->title }}">
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="card bg-light p-5">
                    <h4>{{ $blog->user->name }}</h4>
                    <p>{{ $blog->body }}</p>
                    <p class="text-dark">{{ $blog->created_at }}</p>
                </div>
            </div>
        </div>
    </div>

       
</x-theme-layout>