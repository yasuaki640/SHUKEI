<?php

namespace App\Http\Controllers;

use App\MonthlyReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudMonthlyReportController extends Controller
{
    public function index()
    {
        $monthly_reports = MonthlyReport::all();
        return view('admin.admin_index', ['monthly_reports' => $monthly_reports]);
    }

    public function post(Request $request)  //$requestはサービスプロバイダで自動生成される
    {
        return view('user.user_post');
    }

    public function confirm(Request $request)
    {
        //フォームから受け取ったすべての値を取得しインスタンスに突っ込む
        $monthly_report = new MonthlyReport($request->all());

        return view('user.user_confirm', ['monthly_report' => $monthly_report,]);
    }
}
