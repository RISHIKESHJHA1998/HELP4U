<x-theme-layout>
    <x-slot name="header">
        <h2>Help Requests</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, quod.</p>
    </x-slot>

    <section id="events" class="events">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card bg-light p-4">
                    <h4>{{ $request->title }}</h4>
                    <p>{{ $request->body }}</p>
                    <p class="text-dark"><b>From:</b> {{ $request->user->name }} | <b>Timestamp:</b> {{ $request->created_at }}</p>
                </div>

            </div>
        </div>

        @auth
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card bg-light p-4">
                        <h4>Add Comment</h4>
                        <form action="{{ route('user.comment.store', $request->id )}}" method="post">
                            @csrf
                            <div>
                                <input type="text" name="comment" id="comment" class="form-control">
                                <button type="submit" class="btn btn-success mt-2">Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endauth
            
        @guest
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card bg-light p-4">
                    <p>Kindly, <a href="{{ route('login') }}">Log In</a> to comment.</p>
                </div>
            </div>
        </div>
        @endguest

        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card bg-light p-4">
                    <h4>Comments</h4>
                    @foreach ($request->comments as $comment)
                        <div class="bg-white p-2 rounded border border-success mb-4">
                            <p><b>Comment:</b> {{ $comment->comment }}</p>
                            <p class="text-success"><b>From:</b> {{ $comment->user->name }} | <b>Timestamp:</b> {{ $comment->created_at }}</p>
                        </div>     
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-theme-layout>