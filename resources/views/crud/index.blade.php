<div class="card-body">
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row ">

        <div class="col-md-6">
            <h3 class="mb-5">Add Employe Data</h3>
            <form action="{{ route('EmpResource.store', app() -> getLocale()) }}" method="POST">
                @csrf
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Employe first name">
                    @error('firstname')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Employe first name">
                    @error('lastname')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="company">Company Name</label>
                    <select name="company_id" id="company" class="form-control">
                        @foreach($company as $companys)
                        <option value="{{ $companys -> id}}">
                            {{ $companys -> cnm }}
                        </option>
                        @endforeach
                    </select>
                    @error('company')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="email">Employe Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Employe Email Address">
                    @error('firstname')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="phone">Contact Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Employe Contact Number">
                    @error('firstname')<font color:'red'> {{ $message }} </font> @enderror<br>

                <input type="submit" name="submit" class="btn btn-primary" value="Employee Register">
            </form>
        </div>
    </div>
</div>
</div>
@endsection
