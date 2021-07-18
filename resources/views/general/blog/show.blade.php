<x-theme-layout>
    <x-slot name="header">
        <h2>{{ $blog->title }}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, facilis.</p>
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

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <img src="{{ asset('post_images/' .$blog->image) }}" alt="{{ $blog->title }}" width="600px">
        </div>
    </div>

    <div class="row m-5 bg-light rounded p-5">
        <div class="col-md-12">
            <p style="color: #f0ad4e;"><b>Written by</b> : {{ $blog->user->name }} | <b>Created at</b> : {{ $blog->created_at }}</p>
            <br>
            <h2 style="color: #053742;">{{ $blog->title }}</h2>
            <br>
            <p>{{ $blog->body }}</p>
        </div>
    </div>

       
</x-theme-layout>
{{--

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

--}}