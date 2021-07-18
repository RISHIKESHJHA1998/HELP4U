<x-theme-layout>
    <x-slot name="header">
        <h2>Joined Clubs</h2>
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
                                <th scope="col">Club Name</th>
                                <th scope="col">Joined Date</th>
                                <th scope="col">View</th>
                                <th scope="col">Cancel Membership</th>
                                <th scope="col">status</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                    <tr>
                                        <td>{{ $member->club->name }}</td>
                                        <td>{{ $member->created_at }}</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-sm btn-success">View</button>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')">Cancel</button>
                                            </form>
                                        </td>
                                        <td>
                                            @if (isset($member->status))
                                                @if ($member->status === 0)
                                                    <button class="btn btn-sm btn-warning text-white">Pending</button>
                                                @else
                                                    <button class="btn btn-sm btn-success">Approved</button>
                                                @endif
                                            @else
                                                
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