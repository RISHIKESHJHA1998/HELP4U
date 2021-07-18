<x-theme-layout>
    <x-slot name="header">
        <h2>Latest Blogs</h2>
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

    <section id="courses" class="courses">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
            <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($blogs as $blog)

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                          <img src="{{ asset('post_images/' .$blog->image) }}" class="img-fluid" alt="...">
                          <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                              <a href="{{ route('blog.show', $blog->id) }}">

                                <x-primary-button class="btn-success">
                                    {{ __('View Post') }}
                                </x-primary-button></a>

                                <p style="color: #053742;"><b>Created at</b> : {{ $blog->created_at }}</p>
                            </div>
            
                            <h3><a href="course-details.html">{{ $blog->title }}</a></h3>
                            <p>@php
                                $body = $blog->body;
                                echo mb_strimwidth($body, 0, 150, "...");
                            @endphp</p>


                          </div>
                        </div>
                    </div>

                @endforeach
            </div>
  
        </div>
    </section>

       
</x-theme-layout>