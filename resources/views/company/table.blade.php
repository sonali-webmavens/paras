<div class="card-body">
    @extends('layouts.app')
    
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
        <div class="body">
            <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" >
        </div>
    <div class="container" style="margin-top: 1%">
        <table class="table table-striped" id="companyTable">
            <thead>
            <tr>
                <td>id</td>
                <td>Company Name</td>
                <td>Email</td>
                <td>Company Logo</td>
                <td>Company Website</td>
                <td>action</td>
            </tr>
            <tbody>
            @foreach($company as $comps)
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
        
        </tbody>
    </table>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>

    <script>
        $(document).ready( function () {
            $('#companyTable').DataTable({     
		    });
	    });
    </script>
</div>
</div>
</div>
@endsection