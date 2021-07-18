<x-theme-layout>
    <x-slot name="header">
        <h2>My Blogs</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, explicabo!</p>
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
                                <th scope="col">User ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">View</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->user_id }}</td>
                                        <td>{{ $blog->user->name }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.blog.show', $blog->id) }}">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                            </form>
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