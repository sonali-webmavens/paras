<div class="card-body">
    @extends('layouts.app')

    @section('content')
    <div class="body">
        <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" >
    </div>

    <div class="container" style="margin-top: 1%">
        <div class="row">
        <div class="col-md-12">
        <table class="table table-striped" id="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Comapny Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employe as $employes)
            <tr>

                <td>{{ $employes->firstname}}</td>
                <td>{{ $employes->lastname}}</td>
                <td>{{ $employes->company_id}}</td>
                <td>{{ $employes->email}}</td>
                <td>{{ $employes->phone}}</td>
                <td>
                    <a href="{{ route('EmpResource.edit',$employes) }}" class="btn btn-primary">Edit</a><br><br>
                        <form method="post" action="{{ route('EmpResource.destroy',$employes) }}" style="display: inline-block">
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
            $('#table').DataTable({
		    });
	    });
    </script>
    </div>
    </div>
</div>
</div>

@endsection
