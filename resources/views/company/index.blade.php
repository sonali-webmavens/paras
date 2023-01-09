<div class="card-body">
    @extends('layouts.app')
    
    @section('content')
    <div class="container mt-5">
        <div class="row ">
    
            <div class="col-md-6">
                <h3 class="mb-5">Add Company Data</h3>
                <form action="{{ route('CompanyResource.store', app() -> getLocale()) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <label for="cnm">Company Name</label>
                        <input type="text" class="form-control" id="cnm" name="cnm" placeholder="Company Name">
                        @error('cnm')<font color:'red'> {{ $message }} </font> @enderror<br>
    
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Company Email">
                        @error('email')<font color:'red' class=btn btn-danger> {{ $message }} </font> @enderror<br>
    
                        <label for="logo">Company Profile</label>
                        <input type="file" class="form-control" id="logo" name="logo" placeholder="Company Profiles">
                        @error('logo')<font color:'red'> {{ $message }} </font> @enderror<br>
    
                        <label for="website">Company Website</label>
                        <input type="text" class="form-control" id="website" name="website" placeholder="Company Website">
                        @error('website')<font color:'red'> {{ $message }} </font> @enderror<br>
    
                    <input type="submit" name="submit" class="btn btn-primary" value="Company Register">    
                </form>
            </div>
        </div>
    </div>
    </div>
    @endsection
    