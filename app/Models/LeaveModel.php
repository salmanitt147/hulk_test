<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class LeaveModel extends Model {

     public static function getAllActiveData($table_name, $field_id) {
        return DB::table($table_name)->orderBy($field_id, 'DESC')->get();
    }
	public static function getAvailableLeaveBalance($id,$date) {
        return DB::table('employee_leave')->where('employee_id' ,$id)->where('employee_id' ,$id)->where('leave_type' ,'!=', 'Paid')->whereRaw('MONTH(date) = ?' ,date('m',strtotime($date)))->whereYear('date' ,date('Y',strtotime($date)))->get();
		// ->where('leave_type' ,$leave_type))
    }
	public static function getAvailableLeaveBalanceYears($id,$date) {
        return DB::table('employee_leave')->where('employee_id' ,$id)->whereYear('date' ,date('Y',strtotime($date)))->get();
		// ->where('leave_type' ,$leave_type))
    }
	
	public static function getData($id,$likeSearch) {
        $q = DB::table('employee_leave')
					->leftJoin('login', 'login.login_id', '=', 'employee_leave.employee_id')
					->select('login.name', 'employee_leave.*');
					if ($id != '') {
						 $q = $q->Where('employee_id', $id);
					}
						
        if (strlen($likeSearch) > 0) {
            $q = $q->orWhere('leave_type', 'LIKE', '%' . $likeSearch . '%');
            $q = $q->orWhere('date', 'LIKE', '%' . $likeSearch . '%');
            $q = $q->orderBy('id', 'DESC')->get();
        } else {
            $q = $q->orderBy('id', 'DESC');
            $q = $q->paginate(10);
        }
        return $q;
    }
	
	 public static function insertData($table_name, $data) {
        return DB::table($table_name)->insertGetId($data);
    }
	public static function updateData($table_name, $field_id, $data, $id) {
        return DB::table($table_name)->where($field_id, $id)->update($data);
    }

   

}
