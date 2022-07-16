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
                    <li class="breadcrumb-item active">Monthly Expense List</li>
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
                <h3 class="card-title">Monthly Expense List</h3>
                <a href="{{route('january_expnese')}}" class="btn btn-primary">Jan</a>
                <a href="{{route('february_expnese')}}" class="btn btn-info">Feb</a>
                <a href="{{route('march_expnese')}}" class="btn btn-success">Mar</a>
                <a href="{{route('april_expnese')}}" class="btn btn-danger">Apr</a>
                <a href="{{route('may_expnese')}}" class="btn btn-primary">May</a>
                <a href="{{route('june_expnese')}}" class="btn btn-success">Jun</a>
                <a href="{{route('july_expnese')}}" class="btn btn-info">Jul</a>
                <a href="{{route('august_expnese')}}" class="btn btn-success">Aug</a>
                <a href="{{route('september_expnese')}}" class="btn btn-danger">Sep</a>
                <a href="{{route('october_expnese')}}" class="btn btn-info">Oct</a>
                <a href="{{route('november_expnese')}}" class="btn btn-success">Nov</a>
                <a href="{{route('december_expnese')}}" class="btn btn-primary">Dec</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr align="center">
                                    <th>SL</th>
                                    <th>Details</th>
                                    <th>Amount</th>
                                    <th>Month</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($monthexpense as $key=>$data)
                                <tr>
                                    <td>{{++$key;}}</td>
                                    <td>{{$data->details}}</td>
                                    <td align="right">{{$data->amount}} /=</td>
                                    <td>{{$data->month}}</td>
                                    <td>{{$data->date}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                        <a href="" class="btn btn-info">View</a>
                                    </td>
                                </tr>
                                @endforeach
                               <tr>
                                    <td colspan="2" align="right"> Total Expense</td>
                                    <td align="right">{{$sum}} /=</td>
                                    <td colspan="2"></td>
                                </tr>
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