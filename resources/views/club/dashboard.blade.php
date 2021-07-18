<x-theme-layout>
    <x-slot name="header">
        <h2>Club Dashboard</h2>
        <p>Welcome Back, {{ Auth::user()->name }}</p>
    </x-slot>

    <section id="why-us" class="why-us">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Members List</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('club.members.index') }}" class="more-btn">View Members <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Create Blog</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('club.blog.create') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('Create') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>My Blogs</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('club.blogs.index') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                              
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-images"></i>
                                    <h4>Create Yoga Videos</h4>
                                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                                    <a href="{{ route('club.yoga-video.create') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('Add') }}
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
                                    <i class="bx bx-receipt"></i>
                                    <h4>Create Help Requests</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('user.help-request.create') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                            
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
                                    <h4>My Videos</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('club.yoga-videos.index') }}">
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
    
</x-theme-layout>