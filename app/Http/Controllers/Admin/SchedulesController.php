<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;

class SchedulesController extends Controller
{
    public function index(Request $request){
        return view('admin.schedules.index');
    }

    public function create(Request $request){
        return view('admin.schedules.create');
    }
}
