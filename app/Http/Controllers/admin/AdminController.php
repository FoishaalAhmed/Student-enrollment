<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\admin\teacher;
use App\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginForm()
    {
    	return view('admin.login');
    }

    public function login(Request $request) 
    {
        Sentinel::authenticate($request->all());
        if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin'){
            return redirect('/admin-dashbord');
        }else{
             return redirect('/admin-login')->with(['error'=>'username or password does not match']);
        }
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect('/admin-login');
    }

    public function showDashbord()
    {
        $students = User::where('value',1)->count('id');
        $teachers = teacher::all()->count('id');
        return view('admin.dashbord',compact('students','teachers'));
    }
}
