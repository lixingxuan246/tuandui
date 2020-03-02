<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Admin;
class LoginController extends Controller
{
    public function logindo(Request $request){
    	$user=$request->except('_token');
    	$user['pwd']=$user['pwd'];
    	$admin=Admin::where($user)->first();
        if($admin){
        	
        	session(['admin'=>$admin]);
        	
        	$request->session()->save();
        	
        	return redirect('/admin/index');
        }
    }
}
