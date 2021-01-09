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
                        @php
                                    $month=  date('F'); 
                                    $tday=Db::table('expenses')->where('month',$month)->sum('amount');
                                  
                                    @endphp
                                    

                        <div class="row">
                            <div class="col-md-12">
                            <h4 style="color:red" align="center">{{$month}}</h4>
                            <h4 style="color:red" align="center">Total amount: {{$tday}} </h4>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                    <a href="{{route('all.expense')}}" class="panel-title btn btn-sm btn-success pull-right">Add New</a>
                                   
                                        <h3 class="panel-title">Datatable</h3>
                                        <a href="{{route('january.expense')}}" class="btn btn-sm btn-success">January</a>
                                        <a href="{{route('february.expense')}}" class="btn btn-sm btn-warning">February</a>
                                        <a href="" class="btn btn-sm btn-primary">March</a>
                                        <a href="" class="btn btn-sm btn-danger">April</a>
                                        
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                      
                                                        <tr>
                                                            <th>Details</th>
                                                            <th>amount</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($mth as $row)
                                                        <tr>
                                                            <td>{{$row->details}}</td>
                                                            <td>{{$row->amount}}</td>
                                                           

                                                          
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