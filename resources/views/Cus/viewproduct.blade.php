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
                               <h3 style="color:red">Add product</h3>
                                <div class="panel-body">
                                    <form role="form" method="post" enctype="multipart/form-data" action="{{url('insert-product')}}">
                                  
                                    @csrf
                                        <!-- <div class="form-group">
                                            <label for="exampleInputEmail1"> Product Name</label>
                                            @php
                                            $data=DB::table('employees')->get();

                                            @endphp
                                        <select id="inputState" name="emp_id" id="emp_id" class="form-control">
                                            <option selected>Choose...</option>
                                           
                                           @foreach($data as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                           @endforeach
                                        </select>
                                                                
                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label for="exampleInputName">Month</label>
                                            <select id="inputMonth" name="month" id="month" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>Jun</option>
                                            <option>July</option>
                                           
                                        </select>
                                       
                                        </div> -->
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Product Name</label>
                                            <input type="name" class="form-control" id="name" name="code_name" placeholder="product name">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Product Code</label>
                                            <input type="code" class="form-control" id="code" name="code" placeholder="product code">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Supplier</label>
                                            @php
                                            $data=DB::table('suppliers')->get();

                                            @endphp  
                                        <select id="inputState" name="name" id="name" class="form-control">
                                            <option selected>Choose...</option>
                                           
                                           @foreach($data as $row)
                                            <option value="{{$row->name}}">{{$row->name}}</option>
                                           @endforeach
                                        </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Warehouse</label>
                                            <input type="advanced_salary" class="form-control" id="warehouse" name="warehouse"placeholder="warehouse">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Buying Date</label>
                                            <input type="advanced_salary" class="form-control" id="buying" name="buying"placeholder="buying date">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPhone">Expire date</label>
                                            <input type="advanced_salary" class="form-control" id="expire" name="expire"placeholder="expire date">
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Buying Price</label>
                                            <input type="advanced_salary" class="form-control" id="buying_price" name="buying_price"placeholder="buying_price date">
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Selling Price</label>
                                            <input type="advanced_salary" class="form-control" id="selling_price" name="selling_price"placeholder="selling_price">
                                        
                                        </div>

                                        <div class="form-group">
                                        <img id="image" src=""/>
                                        <label for="exampleInputPhoto">photo</label>
                                        <input type="file" class="upload" accept="image/*"  id="photo" name="photo"placeholder="photo"  onChange="readURL(this);">
                                        </div>

                                        <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                    </form>
                                </div><!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col-->
                </div>
            </div>
    </div>
            <script type="text/javascript">
                        function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image ').attr('src', e.target.result)
                .width(80)
                .height(80);
            }

            reader.readAsDataURL(input.files[0]);
        }
        }


            </script>
                
                

                @endsection