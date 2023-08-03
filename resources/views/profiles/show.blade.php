@extends('players.layouts')
@section('content')

<div class="container">
    <div class="row" style="margin: 12px;">
        <div class="card">
            <div class="card-header">
                <h2>Player Profile</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name</strong>
                            {{ $profile->name }}
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Phone</strong>
                            {{ $profile->phone }}
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Address</strong>
                            {{ $profile->address }}
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>City</strong>
                            {{ $profile->city }}
                        </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Country</strong>
                            {{ $profile->country }}
                        </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</div>


@endsection