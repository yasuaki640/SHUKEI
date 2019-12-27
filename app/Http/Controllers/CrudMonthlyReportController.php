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
        $validate_rule = [
            'name' => 'required',
            'numOfKumite' => 'required|numeric',//lll
            'numOfNonKumite' => 'required|numeric',
            'numOfVisitors' => 'required|numeric',
        ];

            $this->validate($request, $validate_rule);


        return view('user.user_post');
    }

    public function confirm(Request $request)
    {
        //フォームから受け取ったすべての値を取得しインスタンスに突っ込む
        $monthly_report = new MonthlyReport($request->all());

        return view('user.user_confirm', ['monthly_report' => $monthly_report,]);
    }
}
