<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('admin.index');
    }
}
