@extends('employee.template')
@section('content')
<div class="container mt-5">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Add Employee</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('employee.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <form class="row g-3 needs-validation" action="{{ route('employee.store') }}" method="POST" novalidate>
        @csrf

        <div class="col-md-6">
            <label for="fname" class="form-label">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please type your First Name.
            </div>
        </div>
        <div class="col-md-6">
            <label for="lname" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="invalid-feedback">
                Please type your Last Name.
            </div>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                    aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please type valid email address.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
            <div class="invalid-feedback">
                Please provide a valid Address.
            </div>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
            <div class="invalid-feedback">
                Please provide a valid Phone Number
            </div>
        </div>
        {{-- <div class="col-md-6">
            <label for="validationCustom04" class="form-label">Ocupation</label>
            <select class="form-select" id="validationCustom04" required>
                <option value=""></option>
                <option value="">Student</option>
                <option value="">Employee</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div> --}}
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit">Submit form</button>
        </div>
    </form>
</div>
@endsection
