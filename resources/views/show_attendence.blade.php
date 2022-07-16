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
                    <li class="breadcrumb-item active">Update Attendence</li>
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
                <h3 class="card-title">Update Attendence</h3>
                <h3 style="color: red;">
                    @if (Session::has('error'))
                    {{Session::get('error')}}
                    @endif
                </h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12">
                        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr align="center">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Attendence</th>
                                </tr>
                            </thead>

                            <tbody>
                                <form action="{{route('update_attendence')}}" method="POST">
                                    @csrf
                                    @method('put')
                                @foreach($employee as $key=>$data)
                                <tr>
                                    <td>{{++$key;}}</td>
                                    <td>{{$data->Employee->name}}</td>
                                    <td>
                                        <img style="width: 70px;" src="{{asset('uploads/'.$data->Employee->photo)}}" alt="Image Not Found">
                                    </td>
                                    <td>
                                        <input type="hidden" name=" user_id[]" value="{{$data->Employee->id}}">
                                        <input type="radio" name="attendence[{{$data->Employee->id}}]" value="Present" @if($data->attendence=='Present')
                                        checked
                                        @endif> Present &nbsp;&nbsp;
                                        <input type="radio" name="attendence[{{$data->Employee->id}}]" value="Absence" @if($data->attendence=='Absence')
                                        checked
                                        @endif> Absence
                                        <input type="hidden" name="edit_date" value="{{$data->edit_date}}">
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"></td>
                                    <td> <button type="submit" class="btn btn-success">Update Attendence</button></td>
                                </tr>
                                </form>
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