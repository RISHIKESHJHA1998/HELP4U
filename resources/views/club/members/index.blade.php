<x-theme-layout>
    <x-slot name="header">
        <h2>Members List</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, necessitatibus.</p>
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

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Aadhar Info</th>
                                <th scope="col">Phone</th>
                                <th scope="col">View</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Admin Approval</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if (isset($club->members))
                                    @foreach ($club->members as $member)
                                    
                                        <tr>
                                            <td>{{ $member->id }}</td>
                                            <td>{{ $member->user->name }}</td>
                                            <td>{{ $member->aadhar }}</td>
                                            <td>{{ $member->phone }}</td>
                                            
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-sm btn-success">View</button>
                                                </a>
                                            </td>
                                            <td>
                                                @if ($member->club_status == '0')
                                                    <form action="{{ route('club.member.create', $member->id) }}" method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <button class="btn btn-sm btn-warning text-white">Pending</button>
                                                    </form>
                                                @else
                                                    <span class="badge bg-info text-white p-2">Approved</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($member->status == '0')
                                                    <span class="badge bg-danger text-white p-2">Pending</span>
                                                @else
                                                    <span class="badge bg-success text-white p-2">Approved</span>
                                                @endif
                                            </td>
                                        </tr>
                                    
                                    @endforeach
                                @else
                                    
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>  
        </div>
    </section>   
</x-theme-layout>