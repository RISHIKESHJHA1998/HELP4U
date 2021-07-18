{{--<x-theme-layout>
    <x-slot name="header">
        <h2>Add Yoga Videos</h2>
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

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <form action="{{ route('admin.yoga-video.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                            @csrf
                            <label for="title" class="form-label">Enter Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror

                            <br>

                            <label for="description" class="form-label">Enter Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror

                            <br>

                            <label for="url" class="form-label">Enter Youtube Iframe</label>
                            <input type="text" name="url" id="url" class="form-control" required>
                            @error('url') <span class="text-danger">{{ $message }}</span> @enderror

                            <br>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>
                    </div>
                </div>
            </div>
  
        </div>
    </section>   
</x-theme-layout>
--}}

<x-theme-layout>
    <x-slot name="header">
        <h2>Add Yoga Videos</h2>
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
                            
                            <form action="{{ route('admin.yoga-video.store') }}" method="post" class="form-group" enctype="multipart/form-data">
                                @csrf
                                <label for="title" class="form-label">Enter Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
    
                                <br>
    
                                <label for="description" class="form-label">Enter Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
    
                                <br>
    
                                <label for="url" class="form-label">Enter Youtube Iframe</label>
                                <input type="text" name="url" id="url" class="form-control" required>
    
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