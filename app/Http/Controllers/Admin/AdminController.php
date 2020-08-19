<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use DB, Validator,Helper, Redirect, Auth, Crypt, Hash;
class AdminController extends Controller
{
    public function dashboard() 
    {   
        $user = Auth::user();    
        return view('admin.pages.dashboard');
     
    }
}
