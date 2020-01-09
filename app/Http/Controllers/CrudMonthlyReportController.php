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
        $input = new MonthlyReport($request->all());

        $validate_rule = [
            'name' => 'required',
            'numOfKumite' => 'required|numeric',
            'numOfNonKumite' => 'required|numeric',
            'numOfVisitors' => 'required|numeric',
        ];

        $this->validate($request, $validate_rule);

        return view('user.user_confirm', compact('input'));
    }

    public function create(Request $request)
    {
        //セッションから取得
        $monthly_report = new MonthlyReport($request->all());
        //DBの更新
        $monthly_report->save();
        //ビューの表示
        return redirect('/user_complete');
    }

    public function complete()
    {
        return view('user.user_complete');
    }

    public function showLastMonthReport()
    {
        $last_month_report = DB::table('monthly_report')->whereMonth('created_at', now()->modify('-1 months')->format('m')); //TODO 先月分の月次報告を検索させる。
        return view('admin.admin_show');
    }
}
