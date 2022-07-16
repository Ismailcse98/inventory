<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\AttendenceModel;

class AttendenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Take_attendence()
    {
        $employee = EmployeeModel::get();
        return view('take_attendence',compact('employee'));
    }
    public function Store_attendence(Request $r)
    {
        $date = $r->att_date;
        $existingData = AttendenceModel::where('att_date',$date)->first();
        if($existingData){
            return redirect()->back()->with('error','Todays attendence already has been taken');
        }else{
            $result=false;
            foreach ($r->user_id as $id) {
               $data=[
                'user_id'=>$id,
                'att_date'=>$r->att_date,
                'att_year'=>$r->att_year,
                'attendence'=>$r->attendence[$id],
                'edit_date'=>$r->edit_date
               ]; 
              $result = AttendenceModel::create($data);
            }

            if ($result) {
                return redirect(route('all_attendence'));
            }
        }
        
    }
    public function All_attendence()
    {
        $attendence = AttendenceModel::select('edit_date')->groupBy('edit_date')->get();
        return view('all_attendence',compact('attendence'));
    }
    public function Show_attendence($date)
    {
        $employee = AttendenceModel::where('edit_date',$date)->get();
        return view('show_attendence',compact('employee'));
    }
    public function Update_attendence(Request $r)
    {
        dd($r->edit_date);
    }
}
