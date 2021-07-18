<x-theme-layout>
    <x-slot name="header">
        <h2>Donators' List</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum, quisquam.</p>
    </x-slot>

    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">

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

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Title</th>
                                <th scope="col">Message</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Status</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                               @foreach ($donations as $donation)
                                  <tr>
                                      <td>{{$donation->id}}</td>
                                      <td>{{$donation->name}}</td>
                                      <td>{{$donation->email}}</td>
                                      <td>{{$donation->phone}}</td>
                                      <td>{{$donation->title}}</td>
                                      <td>{{$donation->message}}</td>
                                      <td>{{$donation->created_at}}</td>
                                      <td>
                                        @if (isset($donation->status))
                                            @if ($donation->status === 0)
                                                <form action="{{ route('admin.donation.status', $donation->id) }}" method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <x-button class="btn-warning text-white btn-sm">
                                                        Pending
                                                    </x-button>
                                                </form>
                                            @else
                                                <x-button class="btn-info text-white btn-sm">
                                                    Completed
                                                </x-button>
                                            @endif
                                        @else
                                            
                                        @endif
                                    </td>
                                      <td>
                                        <form action="{{route('admin.donation.delete', $donation->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <x-button class="btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">
                                                Delete
                                            </x-button>
                                        </form>
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
                    {{$donations->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </section>   
</x-theme-layout>