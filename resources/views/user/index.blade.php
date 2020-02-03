@extends('layouts.common_layout')

@section('title','手かざし人数集計さん')

@section('content')
    <h2 class="my-5 text-center">手かざし人数集計さん</h2>
    <button onclick="location.href='{{action('CrudMonthlyReportController@post')}}'"
            class="btn btn-block btn-danger mb-3">人数入力
    </button>
    <button onclick="location.href='{{action('CrudMonthlyReportController@viewLastMonthReport')}}'"
            class="btn btn-block btn-primary">報告を見る
    </button>
@endsection
