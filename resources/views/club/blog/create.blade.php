<x-theme-layout>
    <x-slot name="header">
        <h2>Create a Post</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, molestiae quo facilis pariatur delectus vero mollitia blanditiis voluptatibus maiores reiciendis?</p>
    </x-slot>

    <main>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">

                    </div>

                    <div class="col-md-6">
                        <div class="card p-4 bg-light">

                            <div>
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <x-auth-validation-errors class="mb-4" :errors="$errors" />

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
                            
                            <form action="{{ route('club.blog.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                                @csrf
                                <label for="title" class="form-label">Enter Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
    
                                <br>
    
                                <label for="body" class="form-label">Enter Post Description</label>
                                <textarea name="body" id="" cols="30" rows="10" class="form-control" required></textarea>
    
                                <br>
    
                                <label for="image" class="form-label">Choose a image</label>
                                <input type="file" name="image" id="image" class="form-control" required>
    
                                <br>
    
                                <x-primary-button class="btn-success">
                                    {{ __('Create') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-theme-layout>
