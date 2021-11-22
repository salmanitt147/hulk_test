<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoginModel;
use Session;

class loginController extends Controller {

    public function index() {
        return view('login');
    }

    public function login_process(Request $request) {
		
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $password = md5($request->input('password'));

        $res = LoginModel::checkLogin($username, $password)->first();
		// print_r($res);exit;
        if ($res) {
            session(['sess_id' => $res->login_id,'type'=>$res->type,'username'=>$res->username,'name'=>$res->name]);
            return redirect('leave')->with('status_success', 'User successfully logged.');
        } else {
            return redirect('/')->with('status_error', 'Incorrect email or password.');
        }
    }

    

    public function logout(Request $request) {
        $request->session()->forget('sess_id');
        $request->session()->forget('type');
        $request->session()->forget('username');
        $request->session()->forget('name');
        return redirect('/');
    }

}
