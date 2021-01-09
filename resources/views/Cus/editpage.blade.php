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

                                <form role="form" method="post" enctype="multipart/form-data" action="{{url('update-product/'.$dt->id)}}">
                                @csrf
                               
                                <div class="form-group">
                                            <label for="exampleInputAddress">Product Name</label>
                                            <input type="name" value="{{$dt->code_name}}" class="form-control" id="name" name="code_name" placeholder="product name">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Product Code</label>
                                            <input type="code" value="{{$dt->code}}" class="form-control" id="code" name="code" placeholder="product code">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">Supplier</label>
                                            @php
                                            $data=DB::table('suppliers')->get();

                                            @endphp  
                                        <select id="inputState" name="name" id="name" class="form-control">
                                            <option selected>Choose...</option>
                                           
                                           @foreach($data as $row)
                                            <option value="{{$row->name}}"  <?php if($dt->name==$row->name){echo "selected";} ?> >{{$row->name}}</option>
                                           @endforeach
                                        </select>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Warehouse</label>
                                            <input type="advanced_salary"  value="{{$dt->warehouse}}"class="form-control" id="warehouse" name="warehouse"placeholder="warehouse">
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Buying Date</label>
                                            <input type="advanced_salary" value="{{$dt->buying}}" class="form-control" id="buying" name="buying"placeholder="buying date">
                                        
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPhone">Expire date</label>
                                            <input type="advanced_salary" value="{{$dt->expire}}"class="form-control" id="expire" name="expire"placeholder="expire date">
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Buying Price</label>
                                            <input type="advanced_salary" value="{{$dt->buying_price}}" class="form-control" id="buying_price" name="buying_price"placeholder="buying_price date">
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPhone">Selling Price</label>
                                            <input type="advanced_salary"value="{{$dt->selling_price}}"  class="form-control" id="selling_price" name="selling_price"placeholder="selling_price">
                                        
                                        </div>


                                        <div class="form-group">
                                        <img id="image" src=""/>
                                        <label for="exampleInputPhoto">photo</label>
                                        <input type="file" class="upload" accept="image/*"  id="photo" name="photo"placeholder="photo"  onChange="readURL(this);">
                                        </div>

                                        <input type="hidden" name="old_photo" value="{{$dt->photo}}"

                                         <div class="form-group">
                                        <img id="image" src="{{URL::to($dt->photo)}}"  style="height:60px;width:60px;"/>
                                        <label for="exampleInputPhoto">photo</label>
                                       
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