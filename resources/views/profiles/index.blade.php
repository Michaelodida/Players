@extends('players.layouts')
@section('content')
 
<div class="container">
    <div class="row" style="margin: 12px;">
     <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Profile for Players</h2>
                
            </div>
            <br>
            <div class="card-body">
            <a  class="btn btn-success float left" href="{{route('profiles.create')}}">Create Profile</a>
                <br><br>
            <div class="table table-bordered">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $profile)
                        <tr>
                            <td>{{ $profile->id}}</td>
                            <td>{{ $profile->name }}</td>
                            <td>{{ $profile->phone }}</td>
                            <td>{{ $profile->date }}</td>
                            <td>{{ $profile->address }}</td>
                            <td>{{ $profile->city }}</td>
                            <td>{{ $profile->country }}</td>
                            <td>
                                <form action="{{ route('profiles.destroy', $profile->id) }}" method="post">

                                    <a class="btn btn-primary" href="{{ route('profiles.show', $profile->id) }}">Show</a>
                                    <a class="btn btn-info" href="{{ route('profiles.edit', $profile->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger">Delete</button>
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

    </div>

</div>

@endsection