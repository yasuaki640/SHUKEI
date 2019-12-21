<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudMonthlyReportController extends Controller
{
    public function index()
    {
        $monthly_reports = DB::table('monthly_report')->get();
        return view('admin.admin_index', ['monthly_reports' => $monthly_reports]);
    }


}
