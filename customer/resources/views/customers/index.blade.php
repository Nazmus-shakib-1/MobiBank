@extends('customers.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </br> <h2>Customer Dashboard Explored!</h2></br>
            </div>
            <div class="pull-right">
            </br> <a class="btn btn-success" href="{{ route('customers.create') }}"> Create New Customer</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Passwords</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->password }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links() !!}

    <i><u><h2><a  class="btn btn-primary" href="{{ route('logout.index') }}">Logout</a></h2></u></i>
    <i><u><h2> <a class="btn btn-info" href="live_search">Search Customer</a></h2></u></i>
    <i><u><h2> <a class="btn btn-success" href="dynamic_pdf">Customer details download</a></h2></u></i>
    <i><u><h2> <a class="btn btn-primary" href="jobs">Add New Job</a></h2></u></i>
    <i><u><h2> <a class="btn btn-info" href="accounts">Add New Customer Account</a></h2></u></i>
    <i><u><h2> <a class="btn btn-success" href="account_pdf">Account Details Download</a></h2></u></i>
    <i><u><h2> <a class="btn btn-primary" href="file-upload">Upload Files(csv,pdf,xlx)</a></h2></u></i>
    <i><u><h2> <a class="btn btn-info" href="ajaxImageUpload">Image Upload</a></h2></u></i>

      
@endsection


