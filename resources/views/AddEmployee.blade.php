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
                                    <form role="form" method="post" enctype="multipart/form-data" action="{{url('insert_employee')}}">
                                    @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"placeholder="Enter email">
                                            @error('email')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName">name</label>
                                            <input type="name" class="form-control" id="name" name="name" placeholder="Name">
                                                                                        @error('name')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAddress">address</label>
                                            <input type="address" class="form-control" id="address" name="address" placeholder="address">
                                            @error('address')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPhone">phone</label>
                                            <input type="phone" class="form-control" id="phone" name="phone"placeholder="phone">
                                            @error('phone')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSalary">salary</label>
                                            <input type="salary" class="form-control" id="salary" name="salary" placeholder="salary">
                                                                                        @error('salary')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputSalary">experience</label>
                                            <input type="experience" class="form-control" id="experience" name="experience" placeholder="experience">
                                            @error('experience')
                                            <div style="color:red">{{$message}}</div>

                                            @enderror
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