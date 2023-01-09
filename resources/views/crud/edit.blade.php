<<<<<<< Updated upstream
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
            </style>
        </head>
        <body>
            <form action="{{ route('EmpResource.update',$emp) }}" method="POST">
                @csrf
                @method('put')
                <table id="customers" align="center">
                    <td align="center"><h1>EMPLOYEE REGISTRATIONS</h1></td>
                <tr><td><input type="hidden" name="id" placeholder="Employee Id" value="{{ $emp->id}}" /></td></tr>
                    <tr><td>@error('id')<font color:'red'> {{ $message }} </font> @enderror</td></tr>
=======
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
>>>>>>> Stashed changes

                <tr><td><input type="text" name="fname" placeholder="Employee First Name" value="{{ $emp->fname}}" /></td></tr>
                    <tr><td>@error('fname')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="text" name="lname" placeholder="Employee Last Name" value="{{ $emp->lname}}" /></td></tr>
                    <tr><td>@error('lname')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="text" name="company" placeholder="Employee companies Name" value="{{ $emp->company}}" /></td></tr>
                    <tr><td>@error('company')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="text" name="email" placeholder="Employee Email" value="{{ $emp->email}}" /></td></tr>
                    <tr><td>@error('email')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td><input type="number" name="phone" placeholder="Employee Number" value="{{ $emp->phone}}"/></td></tr>
                    <tr><td>@error('phone')<font color:'red'> {{ $message }} </font> @enderror</td></tr>

                <tr><td align="center"><input type="submit" name="submit" class="btn btn-primary" value="Employee Update">
                    <a href="{{ route('EmpResource.index') }}" class="btn btn-primary">Home</a></td></tr>
                </table>
            </form>
        </body>
    </html>

