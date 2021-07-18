<x-theme-layout>
    <x-slot name="header">
        <h2>Clubs List</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet, molestiae quo facilis pariatur delectus vero mollitia blanditiis voluptatibus maiores reiciendis?</p>
    </x-slot>

    <section id="courses" class="courses">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                
                @foreach ($clubs as $club)

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2 ">
                        <div class="course-item">
                            <div class="course-content">

                                <h3>{{ $club->name }}</h3>
                                <p>{{ $club->about }}</p>
                                
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    @if ($club->members->first())
                                        
                                        @foreach ($club->members as $member)
                                            @if ($member->user_id === Auth::user()->id)
                                                @if ($member->status === 0)
                                                    <button class="btn btn-warning text-white">Pending</button> 
                                                @else
                                                    <button class="btn btn-info text-white">Joined</button>
                                                @endif
                                            @else
                                                <a href="{{ route('user.club.join',$club->id) }}">
                                                    <button class="btn btn-success text-white">Join Now</button>
                                                </a>
                                            @endif
                                        @endforeach

                                    @else
                                        <a href="{{ route('user.club.join',$club->id) }}">
                                            <x-primary-button class="btn-success">
                                                {{ __('Join Now') }}
                                            </x-primary-button>
                                        </a>
                                    @endif
                                </div>                            

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>

            <div class="row mt-5">
                <div class="col-md-12 d-flex justify-content-center">
                    {{ $clubs->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
</x-theme-layout>
