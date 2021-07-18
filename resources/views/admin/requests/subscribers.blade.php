<x-theme-layout>
    <x-slot name="header">
        <h2>Subscribers List</h2>
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
                                <th scope="col">Email</th>
                                <th scope="col">Timestamp</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                               @foreach ($subscribers as $subscriber)
                               <tr>
                                   <td>{{$subscriber->id}}</td>
                                   <td>{{$subscriber->email}}</td>
                                   <td>{{$subscriber->created_at}}</td>
                                   <td>
                                    <form action="{{ route('admin.subscriber.delete', $subscriber->id) }}" method="post">
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
                    {{$subscribers->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </section>   
</x-theme-layout>