<x-theme-layout>
    <x-slot name="header">
        <h2>Dashboard</h2>
        <p>Welcome Back, {{ Auth::user()->name }}</p>
    </x-slot>

    <section id="why-us" class="why-us">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Become a Member?</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('user.club.index') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Help request</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('user.help-request.create') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('Create') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>My Feedbacks</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('user.comments.index') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                              
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Joined Clubs</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                    <a href="{{ route('user.clubs.joined') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
  
        </div>
    </section>

    <section id="why-us" class="why-us">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">

                            
                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>My Requests</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('user.help-requests.index') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Yoga Videos</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('yoga-videos') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('Watch') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
  
        </div>
    </section>

    <section>
        <div class="col-md-12 d-flex align-items-stretch">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><a href="">Register A Club</a></h5>
                    <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                    <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('user.club.create') }}">
                            <x-primary-button class="btn-success">
                                {{ __('Register') }}
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
</x-theme-layout>
