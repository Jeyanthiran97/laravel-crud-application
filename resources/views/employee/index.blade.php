@extends('employee.template')

@section('content')
    <div class="container mt-5">
        <a href="{{ url('employee/create') }}"><button type="button" class="btn btn-primary">Add Employee</button></a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success mt-1">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->first_name }}</td>
                    <td>{{ $employee->last_name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>{{ $employee->phone }}</td>
                    <td>
                        <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('employee.show', $employee->id) }}"><i class="fa fa fa-eye fa-lg" aria-hidden="true"></i></a>

                            <a class="btn btn-primary" href="{{ route('employee.edit', $employee->id) }}"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
