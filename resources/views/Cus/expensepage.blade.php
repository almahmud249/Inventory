@extends('layouts.app')

@section('content')





    <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                        <div>
                               
                               <a href="{{route('today.expense')}}" class="btn btn-sm btn-danger pull-right">Today Expense</a>
                               <a href="{{route('monthly.expense')}}" class="btn btn-sm btn-primary pull-right">Monthly Expense</a>
                           </div>
                            <h3 class="pull-left page-title" style="color:green">Add Expense</h3>
                            
                        </div>
                    </div>
                        <div class="col-md-2"></div>
                    <!-- Start   -->
                    <div class="col-md-6">
                            <div class="panel panel-default">
                           
                            
                                <div class="panel-body">
                                    <form role="form" method="post" enctype="multipart/form-data" action="{{url('insert-expense')}}">
                                  @csrf
                          
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Details</label>
                                            <textarea type="details" class="form-control" id="details" rows="4" name="details" placeholder="details"></textarea>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Amount</label>
                                            <input type="amount" class="form-control" id="amount" name="amount" placeholder="amount">
                                           
                                        </div>
                                       
                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" id="month"  value="{{ date('F')}}" name="month"placeholder="month">
                                        
                                        </div>
                                        <div class="form-group">
                                          
                                            <input type="hidden" class="form-control" id="year" value="{{ date('Y')}}" name="year"placeholder="year">
                                            
                                        
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="hidden" class="form-control" id="date"  value="{{ date('d/m/y')}}"  name="date"placeholder="date">
                                        
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