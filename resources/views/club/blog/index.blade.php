<x-theme-layout>
    <x-slot name="header">
        <h2>My Blogs</h2>
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
                                <th scope="col">Blog Title</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">View</th>
                                <th scope="col">Approval</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>
                                            <a href="{{ route('club.blog.show', $blog->id) }}">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            @if (isset($blog->status))
                                                @if ($blog->status === 0)
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
            <div class="row mt-5">
                <div class="col-md-12 d-flex justify-content-center">
                    {{$blogs->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>   
        </div>
    </section>   
</x-theme-layout>