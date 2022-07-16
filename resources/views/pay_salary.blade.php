@extends('mylayout')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Welcome !</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Pay Salary List</li>
                </ol>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- end page title -->

<!--Widget-4 -->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pay Salary List ( <span style="color: red;"><?php 
                    echo date("F Y");
                ?></span> )</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr align="center">
                                    <th>SL</th>
                                    <th>Employee Name</th>
                                    <th>Image</th>
                                    <th>Month</th>
                                    <th>Salary</th>
                                    <th>Advanced</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($paySalary as $key=>$data)
                                <tr>
                                    <td>{{++$key;}}</td>
                                    <td>{{$data->name}}</td>
                                    <td><img src="uploads/{{$data->photo}}" style="width: 70px;" alt="Image not found"></td>
                                    <td>
                                        <h3>
                                        <span class="badge badge-success">{{$data->month}}</span>
                                        </h3>
                                    </td>
                                    <td>{{$data->salary}}</td>
                                    <td>{{$data->advanced_salary}}</td>
                                    <td>
                                        <a href="" class="btn btn-info">Pay Now</a>
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

</div>
<!-- End Row -->
@endsection