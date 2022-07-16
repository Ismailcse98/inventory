@extends('mylayout')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Add Product</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <!-- Basic example -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Product</h3>
            </div>
            <div class="card-body">
                <form action="{{route('store_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Product Name">
                    </div>
                    <div class="form-group">
                        <label for="cat_id">Select Category</label>
                        <select class="form-control" name="cat_id" id="cat_id">
                            <option value="">Select Category</option>
                        @php 
                            $catList = DB::table('categories')->get();
                            foreach ($catList as  $catData){
                        @endphp
                                <option value="{{$catData->id}}">{{$catData->cat_name}}</option>
                        @php
                            }
                        @endphp
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="supplier_id">Select Supplier</label>
                        <select class="form-control" name="supplier_id" id="supplier_id">
                            <option value="">Select Supplier</option>
                         @php 
                        $suppList = DB::table('suppliers')->get();
                        foreach ($suppList as  $suppData){
                        @endphp
                            <option value="{{$suppData->id}}">{{$suppData->name}}</option>
                        @php
                        }
                        @endphp
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="product_code">Product Code</label>
                        <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Enter Product Code">
                    </div>
                    <div class="form-group">
                        <label for="storehouse">Storehouse</label>
                        <input type="text" class="form-control" name="storehouse" id="storehouse" placeholder="Enter Storehouse">
                    </div>
                    <div class="form-group">
                        <label for="route">Route</label>
                        <select class="form-control" name="route" id="route">
                            <option value="">Select Foute</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="buy_date">Buy Date</label>
                        <input type="date" class="form-control" name="buy_date" id="buy_date" placeholder="Enter Buy Date">
                    </div>
                    <div class="form-group">
                        <label for="expire_date">Expire Date</label>
                        <input type="date" class="form-control" name="expire_date" id="expire_date" placeholder="Enter Expire Date">
                    </div>
                    <div class="form-group">
                        <label for="buying_price">Buying Price</label>
                        <input type="text" class="form-control" name="buying_price" id="buying_price" placeholder="Buying Price">
                    </div>
                    <div class="form-group">
                        <label for="selling_price">Selling Price</label>
                        <input type="text" class="form-control" name="selling_price" id="selling_price" placeholder="Selling Price">
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Selling Price">
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>
@endsection