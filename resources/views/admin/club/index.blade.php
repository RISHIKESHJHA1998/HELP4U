<x-theme-layout>
    <x-slot name="header">
        <h2>Clubs List</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, numquam.</p>
    </x-slot>

    <div class="row">
        <div class="col-md-12 m-2">
            <a href="{{ url('user-manager')}}">
                <button class="btn btn-sm btn-success">Make Club</button>
            </a>
        </div>
    </div>

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
                                <th scope="col">Club Name</th>
                                <th scope="col">Created At</th>
                                <th scope="col">View</th>
                                <th scope="col">Approval</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($clubs as $club)
                                    <tr>
                                        <td>{{ $club->id }}</td>
                                        <td>{{ $club->user_id }}</td>
                                        <td>{{ $club->name }}</td>
                                        <td>{{ $club->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.club.details', $club->id) }}">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            @if ($club->user->hasRole('club') == True)
                                                @if ($club->status === 0)
                                                    <form action="{{ route('admin.club.add', $club->id) }}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <button class="btn btn-sm btn-warning text-white">Pending</button>
                                                    </form>
                                                @else
                                                    <button class="btn btn-sm btn-info text-white">Approved</button>
                                                @endif
                                            @elseif ($club->user->hasRole('club') === False && $club->status === 1)
                                                <form action="{{ route('admin.club.add', $club->id) }}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <button class="btn btn-sm btn-dark text-white">Disapprove</button>
                                                </form>
                                            @else
                                                <button class="btn btn-sm btn-outline-warning disabled">Change Role</button>
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