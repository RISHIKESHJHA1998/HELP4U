<x-theme-layout>
    <x-slot name="header">
        <h2>Donate</h2>
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
                            
                            <form action="{{ route('donation.store') }}" method="post">
                                @csrf

                                <div class="m-3">
                                    <label for="Name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" 
                                            value="@if (Auth::user()) {{ Auth::user()->name }} @endif">
                                </div>

                                <div class="m-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                            value="@if (Auth::user()) {{ Auth::user()->email }} @endif">
                                </div>

                                <div class="m-3">
                                    <label for="Phone Number" class="form-label">Phone Number</label>
                                    <input type="tel" name="phone" id="phone" class="form-control">
                                </div>

                                <div class="m-3">
                                    <label for="Title" class="form-label">What would you like to donate?</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>

                                <div class="m-3">
                                    <label for="Message" class="form-label">Message</label>
                                    <br>
                                    <textarea name="message" id="message" cols="15" rows="5" class="form-control"></textarea>
                                </div>
                                
                                <x-primary-button class="btn-success m-3 px-4">
                                    {{ __('Donate') }}
                                </x-primary-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-theme-layout>
