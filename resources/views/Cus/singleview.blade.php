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
                               <h3 style="color:red">Advanced salary provide</h3>
                                <div class="panel-body">

                                <img src="{{URL::to($dt->photo)}}" style="height:300px; width:300px;">
                               
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Name</label>
                                           <p>{{$dt->code_name}}</p>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Code</label>
                                            <p>{{$dt->code}}</p>
                                           
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Supplier Name</label>
                                            <p>{{$dt->name}}</p>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Warehouse</label>
                                            <p>{{$dt->warehouse}}</p>
                                           
                                        </div>

                                    
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Buying</label>
                                            <p>{{$dt->buying}}</p>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Expire Date</label>
                                            <p>{{$dt->expire}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Buying Price</label>
                                            <p>{{$dt->buying_price}}</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Selling price</label>
                                            <p>{{$dt->selling_price}}</p>
                                        </div>
                                        
                                        
                                   
                                </div><!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col-->
                </div>
            </div>
    </div>
    
                

                @endsection