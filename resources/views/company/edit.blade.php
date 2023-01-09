<div class="card-body">
    @extends('layouts.app')

    @section('content')
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-6">
                <h3 class="mb-5">Edit Employe Data</h3>
            <form action="{{ route('CompanyResource.update',$com) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                    <label for="companyname">Company Name</label>
                    <input type="text" class="form-control" id="companyname" name="cnm" placeholder="Company Name" value="{{$com->cnm}}" width="50" >
                    @error('cnm') {{ $message }} @enderror<br>

                    <label for="email">Company Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Company Email" value="{{ $com->email}}" >
                    @error('email') {{ $message }} @enderror<br>

                    <label for="logo">Company Image</label>
                    <input type="file" class="form-control" id="logo" name="logo" placeholder="Company Logo" value="{{ $com->logo}}" >
                    @error('logo') {{ $message }} @enderror<br>

                    <label for="website">Company Web-Site</label>
                    <input type="text" class="form-control" id="website" name="website" placeholder="Company Website" value="{{ $com->website}}" >
                    @error('website') {{ $message }} @enderror<br>

                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label><br><br>

                    <input type="submit" name="submit" class="btn btn-primary" value="Company Update">
                    <a href="{{ route('CompanyResource.index') }}" class="btn btn-primary">Home</a>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
