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
=======
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
>>>>>>> Stashed changes

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
            <form action="{{ route('CompanyResource.update',$com) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <table id="customers" align="center">
                    <td align="center"><h1>COMPANY UPDATE DATA</h1></td>
                <tr><td><input type="hidden" name="id" placeholder="Company Id" value="{{ $com->id}}" ></td></tr>
                    <tr><td>@error('id') {{ $message }} @enderror</td></tr>
                <tr><td><input type="text" name="cnm" placeholder="Company Name" value="{{$com->cnm}}" ></td></tr>
                    <tr><td>@error('cnm') {{ $message }} @enderror</td></tr>
                <tr><td><input type="text" name="email" placeholder="Company Email" value="{{ $com->email}}" ></td></tr>
                    <tr><td>@error('email') {{ $message }} @enderror</td></tr>
                <tr><td><input type="file" name="logo" placeholder="Company Logo" value="{{ $com->logo}}" ></td></tr>
                    <tr><td>@error('logo') {{ $message }} @enderror</td></tr>
                <tr><td><input type="text" name="website" placeholder="Company Website" value="{{ $com->website}}" ></td></tr>
                    <tr><td>@error('website') {{ $message }} @enderror</td></tr>
                <tr><td align="center"><input type="submit" name="submit" class="btn btn-primary" value="Company Update"></td>
                                    </td></tr>
                </table>
            </form>
<<<<<<< Updated upstream
        </body>
    </html>

=======
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> Stashed changes
