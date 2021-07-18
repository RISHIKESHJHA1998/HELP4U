<x-theme-layout>
    <x-slot name="header">
        <h2>My Videos</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quisquam, nemo!</p>
    </x-slot>

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Video Title</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">View</th>
                                <th scope="col">Approval</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr>
                                        <td>{{ $video->id }}</td>
                                        <td>{{ $video->title }}</td>
                                        <td>{{ $video->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.yoga-video.show', $video->id) }}">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            @if (isset($video->status))
                                                @if ($video->status === 0)
                                                    <button class="btn btn-sm btn-warning text-white">Pending</button>
                                                @else
                                                    <button class="btn btn-sm btn-info text-white">Approved</button>
                                                @endif
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>  
        </div>
    </section>   
</x-theme-layout>