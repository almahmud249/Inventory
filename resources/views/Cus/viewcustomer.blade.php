@extends('layouts.app')

@section('content')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">city</th>
      <th scope="col">states</th>
      <th scope="col">bank_branch</th>
      <th scope="col">bank_account</th>
      <th scope="col">bank_holder</th>
      <th scope="col">bank_name</th>
      
    </tr>
  </thead>
  <tbody>
 
  @foreach( $data as $row )
    <tr>
      <td>{{ $row->name }}</td>
      <td>{{ $row->email }}</td>
      <td>{{ $row->phone }}</td>
     <td>{{ $row->address }}</td>
      <td>{{ $row->city }}</td>
      <td>{{ $row->states }}</td>
      <td>{{ $row->bank_branch }}</td>
     <td>{{ $row->bank_account }}</td>
      <td>{{ $row->bank_holder }}</td>
      <td>{{ $row->bank_name }}</td>
     
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
