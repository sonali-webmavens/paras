<div class="card-body">
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('COMPANY RECORD') }}</div>

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
                        .w-5{
                            display:none;
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
                {{-- @if($errors)
                    @foreach ($errors->all() as $errors)
                        <p class="alert alert-danger">{{ $errors }}</p>
                    @endforeach
                @endif --}}
                <form action="{{ route('CompanyResource.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table id="customers" align="center">
                        <td align="center"><h1>COMPANY REGISTRATIONS</h1></td>
                    <tr><td><input type="text" name="cnm" placeholder="Company Name" />
                    </td></tr>
                    <tr><td>@error('cnm') {{ $message }} @enderror</td></tr>
                    <tr><td><input type="text" name="email" placeholder="Company Email" /></td></tr>
                    <tr><td>@error('email') {{ $message }} @enderror</td></tr>
                    <tr><td><input type="file" name="logo" placeholder="Company Logo" /></td></tr>
                    <tr><td>@error('logo') {{ $message }} @enderror</td></tr>
                    <tr><td><input type="text" name="website" placeholder="Company Site" /></td></tr>
                    <tr><td>@error('website') {{ $message }} @enderror</td></tr>
                    <tr><td align="center"><input type="submit" name="submit" class="btn btn-primary" value="Company Register"></td>
                                        </td></tr>
                    </table>
                </form>
            </body>

        <body>
            <div>

                <br>
                <table id="customer" align="center">
                 <td colspan="7" align="center"><h1>Company Data</h1></td>
                    <tr>

                        <td>id</td>
                        <td>Company Name</td>
                        <td>Email</td>
                        <td>Company Logo</td>
                        <td>Company Website</td>
                        <td>action</td>
                    </tr>
                    @foreach($com as $comps)
                     <tr>
                        <td>{{ $comps->id }}</td>
                        <td>{{ $comps->cnm}}</td>
                        <td>{{ $comps->email}}</td>
                        <td><img src="{{ asset('/storage/'.$comps->logo) }}" width="100px" height="100px"  ></td>
                        <td>{{ $comps->website}}</td>
                        <td ><a href="{{ route('CompanyResource.edit',$comps) }}" class="btn btn-primary">Edit</a><br><br>
                        <form method="post" action="{{ route('CompanyResource.destroy',$comps) }}" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are You Sure ?')">Delete</button>
                        </form>
                            </td>
                    </tr>

                    @endforeach
                </table>
                <div>
                    {{ $com->links() }}
                </div>
            </div>

        </body>

    </html>


    @endsection
