<x-theme-layout>
    <x-slot name="header">
        <h2>My Help Requests</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, suscipit.</p>
    </x-slot>

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($requests as $request)
                                    <tr>
                                        <td>{{ $request->title }}</td>
                                        <td>{{ $request->body }}</td>
                                        <td>
                                            <a href="{{ route('user.help-request.show', $request->id) }}">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('user.help-request.destroy', $request->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
--}}