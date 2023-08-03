@extends('players.layouts')
     
@section('content')
    
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>SHOFCO MATHARE PLAYERS</h2>
                </div>
                <div class="card-body"><br>
                    <a class="btn btn-success" href="{{route('players.create')}}">Create New Player</a>
                    <br>
                    <br>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="table table-bordered">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($players as $player)
                                <tr>
                                    <td>{{ $player->id }}</td>
                                    <td><img src="/image/{{ $player->image }}" width="100px"></td>
                                    <td>{{ $player->name }}</td>
                                    <td>{{ $player->detail }}</td>
                                    <td>
                                        <form action="{{ route('players.destroy',$player->id) }}" method="POST">
                            
                                            <a class="btn btn-info" href="{{ route('players.show',$player->id) }}">Show</a>
                            
                                            <a class="btn btn-primary" href="{{ route('players.edit',$player->id) }}">Edit</a>
                            
                                            @csrf
                                            @method('DELETE')
                                
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>

                        </table>

                    </div>

                </div>
            </div>

        </div>


    </div>

</div>
        
@endsection
