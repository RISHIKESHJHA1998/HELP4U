{{--<x-theme-layout>
    <x-slot name="header">
        <h2>Join Club</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates eos ab fugiat sed rerum voluptate ipsum magnam perferendis praesentium voluptatum.</p>
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
  
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>{{ $club->name }}</h4>
                  <p style="font-weight: bold">{{ $club->created_at }}</p>
                  <p>{{ $club->about }}</p>
                </div>
              </div>
  
            </div>
  
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="{{ route('user.club.joined', $club->id) }}" method="post" class="form-group">
                        @csrf
                        <input type="number" class="form-control" name="aadhar" placeholder="Enter Aadhar Number" required>
                        @error('aadhar') <span class="text-danger">{{ $message }}</span> @enderror
                        <input type="tel" class="form-control mt-4" name="phone" placeholder="Enter Mobile Number" required>
                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-center mt-2">
                            <x-primary-button class="btn-success">
                                {{ __('Join club') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
  
        </div>
    </section> 

</x-theme-layout>--}}


<x-theme-layout>
    <x-slot name="header">
        <h2>Join Club</h2>
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
                            
                            <form action="{{ route('user.club.joined', $club->id) }}" method="post" class="form-group">
                                @csrf

                                <div class="m-3">
                                    <label class="form-label" for="aadhar">Enter Aadhar Number</label>
                                    <input type="number" class="form-control" name="aadhar" required>
                                </div>

                                <div class="m-3">
                                    <label class="form-label" for="phone">Enter Phone Number</label>
                                    <input type="tel" class="form-control" name="phone" required>
                                </div>
                                
                                <div class="m-3">
                                    <x-primary-button class="btn-success">
                                        {{ __('Join club') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-theme-layout>