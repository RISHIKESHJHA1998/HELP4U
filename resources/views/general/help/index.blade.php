<x-theme-layout>
    <x-slot name="header">
        <h2>Help Requests</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quod.</p>
    </x-slot>

    <section id="events" class="events">
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

        <div class="row">
            <div class="col-md-12">
                @foreach ($requests as $request)
                    <div class="card bg-light p-4">
                        <h4>{{ $request->title }}</h4>
                        <p>{{ $request->body }}</p>
                        <a href="{{ route('help-request.show', $request->id) }}">View Request</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
</x-theme-layout>