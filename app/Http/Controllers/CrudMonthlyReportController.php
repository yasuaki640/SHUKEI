<?php

namespace App\Http\Controllers;

use App\MonthlyReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


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

        $validate_rule = [
            'name' => 'required',
            'numOfKumite' => 'required|numeric',
            'numOfNonKumite' => 'required|numeric',
            'numOfVisitors' => 'required|numeric',
        ];

        try {
            $this->validate($request, $validate_rule);
        } catch (ValidationException $e) {
        }
        
        return view('user.user_confirm', ['monthly_report' => $monthly_report,]);
    }
}
