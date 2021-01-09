@extends('layouts.app')

@section('content')

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

            <form class="container" method="post" action="{{url('insert-suppliers')}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="name">
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone"placeholder="+65998822">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress2">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="form-group col-md-6">
                <label for="inputState">State</label>
                <select id="inputState" name="states" id="states" class="form-control">
                    <option selected>Choose...</option>
                    <option>Dhaka</option>
                    <option>Chittagong</option>
                </select>
                </div>
                
                <div class="form-group col-md-6">
                <label for="inputZip">bank_branch</label>
                <input type="text" class="form-control" id="bank_branch" name="bank_branch">
                </div>
                <div class="form-group col-md-6">
                <label for="inputZip">bank_account</label>
                <input type="text" class="form-control" id="bank_account" name="bank_account">
                </div>
                <div class="form-group col-md-6">
                <label for="inputZip">bank_holder</label>
                <input type="text" class="form-control" id="bank_holder" name="bank_holder">
                </div>
                <div class="form-group col-md-6">
                <label for="inputZip">bank_name</label>
                <input type="text" class="form-control" id="bank_name" name="bank_name"> 
                </div>
                
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            </div>
            </div>

@endsection