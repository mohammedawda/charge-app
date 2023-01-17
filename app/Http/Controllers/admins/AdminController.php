<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $admins = User::where('deleted_at', NULL)->where('is_active', 1)->where('role_id', 1)->get();
        return view('admin.admins.index', ['admins' => $admins]);
    }
}
