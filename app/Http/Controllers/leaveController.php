<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LeaveModel;
use Session;

class leaveController extends Controller {

	public function index() {
		if(Session::get('type') == 'employee'){
			$id = Session::get('sess_id');
		}else{
			$id = '';
		}
		
        $request = request();
        $likeSearch = '';
        if (strlen($request->search) > 0) {
            $likeSearch = $request->search;
        }
        $data = LeaveModel::getData($id,$likeSearch);
		// print_r($data);exit;
        $total = LeaveModel::getAllActiveData('employee_leave', 'id');
        return view('leave', ['data' => $data, 'total' => count($total)]);
    }

    public function leave_add(Request $request) {
		// print_r($_POST);exit;
        $request->validate([
            'leave_type' => 'required',
            'date' => 'required',
            'is_half' => 'required'
        ]);

        $leave_type = $request->input('leave_type');
        $date = $request->input('date');
        $datess = explode(',',$date);
		// print_r($date);exit;
		
        $is_half = $request->input('is_half');
		$employee_id = Session::get('sess_id');
		$yesrs_leave = '6';
		for($i = 0; $i < COUNT($datess); $i++){
			$leveYears = LeaveModel::getAvailableLeaveBalanceYears($employee_id,date('Y',strtotime($datess[$i])));
			
			$leveMonth = LeaveModel::getAvailableLeaveBalance($employee_id,date('Y-m',strtotime($datess[$i])));
			// print_r($leveMonth);exit;
			if(COUNT($leveMonth) >= '2'){
				$leave_type = 'Paid';
			}else{
				$leave_type = $leave_type;
			} 
			
			if(COUNT($leveYears) < '18'){
				
				$data = array(
		'leave_type' =>  $leave_type,
		'date' =>  date('Y-m-d',strtotime($datess[$i])),
		'is_half' =>  $is_half ,
		'employee_id' =>  $employee_id,
		);

        $res = LeaveModel::insertData('employee_leave', $data);
			}else{
				$res = '';
			}
		
		}
        if ($res) {
            return redirect('leave')->with('status_success', 'Added Successfully.');
        } else {
            return redirect('leave')->with('status_error', 'Data Processing error..');
        }
    }

    

    public function update_status($id,$st) {
		$data = array(
		'status' => $st
		);
		 $res = LeaveModel::updateData('employee_leave','id',$data,$id);
        if ($res) {
            return redirect('leave')->with('status_success', 'Added Successfully.');
        } else {
            return redirect('leave')->with('status_error', 'Data Processing error..');
        }
    }
	public function reject_status(Request $request) {
		$data = array(
		'status' => 2,
		'reject_reason' => $request->input('reject_reason'),
		);
		$id = $request->input('id');
		 $res = LeaveModel::updateData('employee_leave','id',$data,$id);
        if ($res) {
            return redirect('leave')->with('status_success', 'Added Successfully.');
        } else {
            return redirect('leave')->with('status_error', 'Data Processing error..');
        }
    }

}
