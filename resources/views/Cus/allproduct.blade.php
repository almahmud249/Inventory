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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Datatable</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                      
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Code</th>
                                                            <th>Selling price </th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($dt as $row)
                                                        <tr>
                                                            <td>{{$row->code_name}}</td>
                                                            <td>{{$row->code}}</td>
                                                            <td>{{$row->selling_price}}</td>
                                                            <td> <img src="{{$row->photo}}" style="height:60px; width:60px;"></td>
                                                        

                                                        <td>
                                                            <!-- <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">View</button> -->
                                                            <a href="{{URL::to('each-product/'.$row->id)}}" class="btn btn-primary">View</a>
                                                            <a href="{{URL::to('edit-product/'.$row->id)}}" class="btn btn-success">Edit</a>
                                                            <a href="{{URL::to('delete-product/'.$row->id)}}" id="delete" class="btn btn-danger">Delete</a>

                                                        </td>
                                                    </tr>
                                                        @endforeach
                                                      
                                                    </tbody> 
                                                    
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> <!-- End Row -->


</div>
</div>
</div>