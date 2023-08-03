@extends('players.layouts')
  
@section('content')

<div class="container">
    <div class="row" style="margin: 12px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Add New Patient</h2>
                </div>
                <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('patients.update',$patient->id) }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Telephone:</strong>
                                <input type="text" name="telephone" value="{{ $patient->telephone }}" class="form-control" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{ $patient->name }}" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>D.O.B:</strong>
                                <input type="date" name="dob" value="{{ $patient->dob }}" class="form-control" placeholder="Enter Date">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>ID:</strong>
                                <input type="text" name="id_number" value="{{ $patient->id_number }}" class="form-control" placeholder="Enter National ID">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <input type="text" name="address" value="{{ $patient->address }}" class="form-control" placeholder="Enter County">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>County:</strong>
                                <input type="text" name="county" value="{{ $patient->county }}" class="form-control" placeholder="Enter County">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Sub County:</strong>
                                <input type="text" name="sub_county" value="{{ $patient->sub_county }}" class="form-control" placeholder="Enter Sub County">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" value="{{ $patient->email }}" class="form-control" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Gender:</strong>
                                <input type="text" name="gender" value="{{ $patient->gender }}" class="form-control" placeholder="Enter Gender">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Marital Status:</strong>
                                <input type="text" name="marital" value="{{ $patient->marital }}" class="form-control" placeholder="Enter Marital">
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                    
                </form>


                </div>

            </div>

        </div>
    </div>

</div>

@endsection