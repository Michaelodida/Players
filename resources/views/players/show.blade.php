@extends('players.layouts')
   
@section('content')

    <div class="container">
        <div class="row" style="margin: 20px;">
           <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Show Players</h2>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {{ $player->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                {{ $player->detail }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <img src="/image/{{ $player->image }}" width="500px">
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary float-left" href="{{route('players.index')}}">Back</a>
                    </div>

                </div>

           </div>

        </div>

    </div>

    <!-- <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Player</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('players.index') }}"> Back</a>
            </div>
        </div>
    </div> -->
     
    <!-- <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $player->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $player->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $player->image }}" width="500px">
            </div>
        </div>
    </div> -->
@endsection
