<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model {

    public static function checkLogin($username, $password) {
        return DB::table('login')->where('username', $username)->where('password', $password)->get();
    }

   

}
