<x-theme-layout>
    <x-slot name="header">
        <h2>Register</h2>
        <p>Fill the given form to register a club.</p>
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
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div>
  
            </div>
  
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <form action="{{ route('register.club.store') }}" method="post" class="form-group">
                        @csrf
                        <input type="text" class="form-control" name="name" placeholder="Enter Club Name">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        <textarea cols="15" rows="5" class="form-control mt-2" name="about" placeholder="Few lines about Club"></textarea>
                        @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-success">Register Club</button>
                        </div>
                    </form>
                </div>
            </div>
  
        </div>
    </section>   
</x-theme-layout>