@extends('layouts.app')

@section('content')





    <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="pull-left page-title">Welcome !</h4>
                            <ol class="breadcrumb pull-right">
                                <li><a href="#">Moltran</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                        <div class="col-md-2"></div>
                    <!-- Start Widget -->
                    <div class="col-md-6">
                            <div class="panel panel-default">
                               
                                <div class="panel-body">
                                <form  method="post" enctype="multipart/form-data" action="{{url('update-employee/'.$dt->id)}}">
                                @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" value="{{$dt->email}}"id="email" name="email" >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">name</label>
                                            <input type="name" class="form-control" value="{{$dt->name}}"id="name" name="name" >
                                         
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">address</label>
                                            <input type="address" class="form-control" value="{{$dt->address}}" id="address" name="address" >
                                         
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">phone</label>
                                            <input type="phone" class="form-control" value="{{$dt->phone}}"id="phone" name="phone">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSalary">salary</label>
                                            <input type="salary" class="form-control" value="{{$dt->salary}}" id="salary" name="salary">
                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSalary">experience</label>
                                            <input type="experience" class="form-control" value="{{$dt->experience}}" id="experience" name="experience">
                                            </div>
                                       
                                        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>
                                   
                                </div><!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col-->
                </div>
            </div>
    </div>
      
                

                @endsection