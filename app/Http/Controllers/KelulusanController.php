<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelulusanController extends Controller
{
    public function index()
    {
        return view('admin.management.kelulusan.index');
    }
}
