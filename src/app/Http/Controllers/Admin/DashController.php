<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index(){

        return view('admin/dash/dashboard');

    }
}