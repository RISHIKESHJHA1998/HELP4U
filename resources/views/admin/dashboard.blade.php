<x-theme-layout>
    <x-slot name="header">
        <h2>Admin Dashboard</h2>
        <p>Welcome Back, {{ Auth::user()->name }}</p>
    </x-slot>

    <section id="why-us" class="why-us">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row">

                <div class="section-title">
                    <p>Users Manager</p>
                </div>

                <div class="col-lg-12 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Users List</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.users-list') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Clubs List</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.club.index') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>All Comments</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.comments.all') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>My Comments</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('user.comments.index') }}">
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

                <div class="section-title">
                    <p>Yoga Videos</p>
                </div>

                <div class="col-lg-12 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Add Videos</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.yoga-video.create') }}">
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
                                    <a href="{{ route('admin.yoga-videos.index') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Approve Videos</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.yoga-video.approve') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>All Videos</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.videos.all') }}">
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

                            <div class="section-title">
                                <p>Blogs</p>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Create Blogs</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.blog.create') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>My Blogs</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.blogs.index') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Approve Blogs</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.blogs.approve') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>All Blogs</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.blogs.all') }}">
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

                            <div class="section-title">
                                <p>Requests</p>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-receipt"></i>
                                    <h4>Subscribers</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.subscribers.all') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Donations</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.donations.all') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Contacts</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('admin.contacts.all') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('View') }}
                                        </x-primary-button>
                                    </a>
                                </div>
                            </div>

                            <div class="col-xl-3 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4>Create Help Request</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                                    <a href="{{ route('user.help-request.create') }}">
                                        <x-primary-button class="btn-success">
                                            {{ __('Create') }}
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