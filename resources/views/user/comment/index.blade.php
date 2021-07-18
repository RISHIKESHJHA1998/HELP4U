<x-theme-layout>
    <x-slot name="header">
        <h2>My Feedbacks</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius, voluptas?</p>
    </x-slot>

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">My Feedbacks</th>
                                <th scope="col">Post Name</th>
                                <th scope="col">View</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->comment }}</td>
                                        <td>{{ $comment->help->title }}</td>
                                        <td>
                                            <a href="{{ route('user.comment.show', $comment->id) }}">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('user.comment.destroy', $comment->id) }}" method="post">
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