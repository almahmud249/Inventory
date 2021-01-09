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
                                    <form role="form" method="post" enctype="multipart/form-data" action="{{url('insert-salaries')}}">
                                   @csrf
                                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            @php
                                            $data=DB::table('employees')->get();

                                            @endphp
                                        <select id="inputState" name="emp_id" id="emp_id" class="form-control">
                                            <option selected>Choose...</option>
                                           
                                           @foreach($data as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                           @endforeach
                                        </select>
                                                                
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">Month</label>
                                            <select id="inputMonth" name="month" id="month" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>Jun</option>
                                            <option>July</option>
                                           
                                        </select>
                                       
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Year</label>
                                            <input type="year" class="form-control" id="year" name="year" placeholder="year">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Advance Salary</label>
                                            <input type="advanced_salary" class="form-control" id="advanced_salary" name="advanced_salary"placeholder="advanced_salary">
                                        
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