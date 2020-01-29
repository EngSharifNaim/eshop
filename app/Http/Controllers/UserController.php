<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('type','User')->get();
        return view('admin.users.index',compact('users'));
    }
    public function sellers()
    {
        $sellers = User::where('type','Seller')->get();
        return view('admin.sellers.index',compact('sellers'));
    }
    public function admins()
    {
        $admins = User::where('type','Admin')->get();
        return view('admin.admins.index',compact('admins'));
    }
}
