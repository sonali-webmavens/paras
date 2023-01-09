<div class="card-body">
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EMPLOYEE RECORD') }}</div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                </div>
            </div>
            </div>
            </div>
            </div>

<!DOCTYPE html>
    <html>
        <head>
            <style>
                #customers {
                    border-collapse: collapse;
                    width: 50%;
                    }

                    #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                    }

                    #customers tr:nth-child(even){background-color: #f2f2f2;}

                    #customers tr:hover {background-color: #ddd;}

                    #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #04AA6D;
                    color: white;
                    }
                    .btn-primary{
                        background: aqua;
                        color:  #000000;
                        border: 0;
                        padding: 4px 10px;
                        border-radius: 3px;
                        cursor: pointer;

                    }
                    .btn-danger{
                        background: red;
                        color:  #fff;
                        border: 0;
                        padding: 4px 10px;
                        border-radius: 3px;
                        cursor: pointer;

                    }
                    .W-5{
                        display: none;
                    }
                #customer {
                  font-family: Arial, Helvetica, sans-serif;
                  border-collapse: collapse;
                  width: 100%;
                }

                #customer td, #customer th {
                  border: 1px solid #ddd;
                  padding: 8px;
                }

                #customer tr:nth-child(even){background-color: #f2f2f2;}

                #customer tr:hover {background-color: #ddd;}

                #customer th {
                  padding-top: 12px;
                  padding-bottom: 12px;
                  text-align: left;
                  background-color: #04AA6D;
                  color: white;
                }
                .btn-primary{
                    background: aqua;
                    color:  #000000;
                    border: 0;
                    padding: 4px 10px;
                    border-radius: 3px;
                    cursor: pointer;

                }
                .btn-danger{
                    background: red;
                    color:  #fff;
                    border: 0;
                    padding: 4px 10px;
                    border-radius: 3px;
                    cursor: pointer;

                }

            </style>
        </head>
        <body>
            <form action="{{ route('EmpResource.store') }}" method="POST">
                @csrf
<<<<<<< Updated upstream
                <table id="customers" align="center">
                    <td align="center"><h1>EMPLOYEE REGISTRATIONS</h1></td>
                <tr><td><input type="text" name="fname" placeholder="Employee First Name" /></td></tr>
                    <tr><td>@error('fname')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="text" name="lname" placeholder="Employee Last Name" /><td></tr>
                    <tr><td>@error('lname')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="text" name="company" placeholder="Employee companies Name" /></td></tr>
                    <tr><td>@error('company')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="text" name="email" placeholder="Employee Email" /></td></tr>
                    <tr><td>@error('email')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="number" name="phone" placeholder="Employee Number" /></td></tr>
                    <tr><td>@error('phone')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td align="center"><input type="submit" name="submit" class="btn btn-primary" value="Employee Register"></td>
                                    </td></tr>
                </table>
=======
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
>>>>>>> Stashed changes
            </form>
        </body>

    <body>
        <div>

            <br>
            <table id="customer" align="center">
             <td colspan="7" align="center"><h1>Employee Data</h1></td>
                <tr>

                    <td>id</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Company Name</td>
                    <td>Email</td>
                    <td>Contact Number</td>
                    <td>action</td>
                </tr>
                @foreach($emp as $emps)
                 <tr>
                    <td>{{ $emps->id }}</td>
                    <td>{{ $emps->fname}}</td>
                    <td>{{ $emps->lname}}</td>
                    <td>{{ $emps->company }}</td>
                    <td>{{ $emps->email}}</td>
                    <td>{{ $emps->phone}}</td>
                    <td ><a href="{{ route('EmpResource.edit',$emps) }}" class="btn btn-primary">Edit</a><br><br>
                    <form method="post" action="{{ route('EmpResource.destroy',$emps) }}" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Are You Sure ?')">Delete</button>
                    </form>
                        </td>
                </tr>

                @endforeach
            </table>
            <div>
                {{ $emp->links() }}
            </div>
        </div>

    </body>

</html>


@endsection
