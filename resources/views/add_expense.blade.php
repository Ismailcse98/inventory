@extends('mylayout')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Add Expense</h4>
            <div class="page-title-right">
                <ol class="breadcrumb p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Expense</li>
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
                <h3 class="card-title">Add Expense</h3>
                <h5 class="text-right">
                    <a href="{{route('yearly_expense')}}" class="btn btn-primary">Year</a>
                    <a href="{{route('month_expense')}}" class="btn btn-primary">Month</a>
                    <a href="{{route('todays_expense')}}" class="btn btn-info">Todays</a>
                </h5>
            </div>
            <div class="card-body">
                <form action="{{route('store_expense')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="details">Expense Details</label>
                        <textarea class="form-control" rows="5" name="details" id="details" placeholder="Enter Details"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="amount">Expense Amount</label>
                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                    </div>
                    @php 
                    $date = date('d/m/y');
                    $month = date('F');
                    $year = date('Y');
                    @endphp
                    <input type="hidden" name="date" value="{{$date}}">
                    <input type="hidden" name="month" value="{{$month}}">
                    <input type="hidden" name="year" value="{{$year}}">
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div>
</div>
@endsection