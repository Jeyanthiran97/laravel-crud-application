@extends('employee.template')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h4>{{ $employee->last_name }}'s Details</h4>
                </div>
                <div class="pull-right">
                    <a class="btn btn-secondary" href="{{ route('employee.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <table class="table table-hover" width="">
            <tbody>
              <tr>
                <th scope="col">First Name</th>
                <td>{{ $employee->first_name }}</td>
              </tr>
              <tr>
                <th scope="col">Last Name</th>
                <td>{{ $employee->last_name }}</td>
              </tr>
              <tr>
                <th scope="col">E-mail</th>
                <td>{{ $employee->email }}</td>
              </tr>
              <tr>
                <th scope="col">Address</th>
                <td>{{ $employee->address }}</td>
              </tr>
              <tr>
                <th scope="col">Phone Number</th>
                <td>{{ $employee->phone }}</td>
              </tr>
            </tbody>
        </table>
    </div>
@endsection
