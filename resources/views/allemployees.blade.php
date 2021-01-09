@extends('layouts.app')

@section('content')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Serial</th>
      <th scope="col">Account</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
  <tbody>
 
  @foreach($emp as $row)
    <tr>
      <td>{{ $row->email }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->address }}</td>
      
      <td>{{ $row->phone }}</td>
      <td>{{ $row->salary }}</td>
      
      <td>{{ $row->experience }}</td>
      <!-- <td><img src="{{ $row->photo}}"</td> -->
      <td>
      <button type="button" class="btn btn-primary">View</button>
      <a href="{{URL::to('edit-employee/'.$row->id)}}" class="btn btn-success">Edit</a>
      <a href="{{URL::to('delete-employee/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>

</td>
    </tr>
 @endforeach  
    
    
  </tbody>
</table>
</div>
@endsection
