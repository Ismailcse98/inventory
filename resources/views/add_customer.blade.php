@extends('mylayout')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Add Customer</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Customer</li>
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
                <h3 class="card-title">Add Cusomter</h3></div>
            <div class="card-body">
                <form action="{{route('store_customer')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="shopname">Shop Name</label>
                        <input type="text" class="form-control" name="shopname" id="shopname" placeholder="Enter Shopname">
                    </div>
                    <div class="form-group">
                        <label for="account_number">Account Number</label>
                        <input type="text" class="form-control" name="account_number" id="account_number" placeholder="Enter Account Number">
                    </div>
                    <div class="form-group">
                        <label for="bankname">Bank Name</label>
                        <input type="text" class="form-control" name="bankname" id="bankname" placeholder="Enter Bank Name">
                    </div>
                    <div class="form-group">
                        <label for="branchname">Branch Name</label>
                        <input type="text" class="form-control" name="branchname" id="branchname" placeholder="Enter Branch Name">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter City">
                    </div>
                    <div class="form-group">
                        <label for="photo">Upload Image</label>
                        <input type="file" class="form-control" name="photo" name="photo">
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