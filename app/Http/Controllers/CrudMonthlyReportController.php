<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudMonthlyReportController extends Controller
{
    public function readAll()
    {
        return view('admin.admin_index');
    }
}
