<x-theme-layout>
    <x-slot name="header">
        <h2>Yoga Videos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, illum!</p>
    </x-slot>

    <section id="courses" class="courses">
        <div class="container aos-init aos-animate" data-aos="fade-up">
  
            <div class="row aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($videos as $video)

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">

                            @php
                                $height = '250px';
                                $width = '420px';
                                $iframe = trim($video->url);
                                $iframe = preg_replace('/height="(.*?)"/i', 'height="' . $height .'"', $iframe);
                                $iframe = preg_replace('/width="(.*?)"/i', 'width="' . $width .'"', $iframe);
                                echo $iframe;
                            @endphp

                          <div class="course-content">
                            <h3>{{ $video->title }}</h3>
                            <p>@php
                                $body = $video->description;
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