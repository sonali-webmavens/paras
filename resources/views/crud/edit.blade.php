<div class="card-body">
    @extends('layouts.app')
    
    @section('content')
    <div class="container mt-5">
        <div class="row ">
    
            <div class="col-md-6">
                <h3 class="mb-5">Edit Employe Data</h3>            
            <form action="{{ route('EmpResource.update',$employe) }}" method="POST">
                @csrf
                @method('put')
                <input type="hidden" name="id" placeholder="Company Id" value="{{ $employe->id}}" />
                
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" class="form-control col-3" name="firstname" placeholder="Employee First Name" value="{{ $employe->firstname}}">
                    @error('firstname')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control col-3" id="lastname" name="lastname" placeholder="Employee Last Name" value="{{ $employe->lastname}}" />
                    @error('lastname')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="company">Company</label>
                    <input type="text" class="form-control col-3" id="company" name="company_id" placeholder="Employee companies Name" value="{{ $employe->company_id}}" /></td></tr>
                    @error('company')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="email">Email</label>
                    <input type="text" class="form-control col-3" id="email" name="email" placeholder="Employee Email" value="{{ $employe->email}}" />
                    @error('email')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <label for="phone">Contact NUmber</label>
                    <input type="number" class="form-control col-3" id="phone" name="phone" placeholder="Employee Number" value="{{ $employe->phone}}"/>
                    @error('phone')<font color:'red'> {{ $message }} </font> @enderror<br>

                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label><br>

                    <input type="submit" name="submit" class="btn btn-primary" value="Employee Update">
                    <a href="{{ route('EmpResource.index') }}" class="btn btn-primary">Home</a>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

