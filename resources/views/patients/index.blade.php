@extends('players.layouts')
     
@section('content')
    
<div class="container">
    <div class="row" style="margin:20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Patient Registration Form</h2>
                </div>
                <div class="card-body"><br>
                    <a class="btn btn-success" href="{{route('patients.create')}}">Create New Patient</a>
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
                                    <th>Telephone</th>
                                    <th>Name</th>
                                    <th>D.O.B</th>
                                    <th>ID No.</th>
                                    <th>Address</th>
                                    <th>County</th>
                                    <th>Sub County</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Marital Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($patients as $patient)
                                <tr>
                                    <td>{{ $patient->id }}</td>
                                    <td>{{ $patient->telephone }}</td>
                                    <td>{{ $patient->name }}</td>
                                    <td>{{ $patient->dob }}</td>
                                    <td>{{ $patient->id_number }}</td>
                                    <td>{{ $patient->address }}</td>
                                    <td>{{ $patient->county }}</td>
                                    <td>{{ $patient->sub_county }}</td>
                                    <td>{{ $patient->telephone }}</td>
                                    <td>{{ $patient->email }}</td>
                                    <td>{{ $patient->gender }}</td>
                                    <td>{{ $patient->marital }}</td>
            
                                    <td>
                                        <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
                            
                                            <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Show</a>
                            
                                            <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
                            
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
