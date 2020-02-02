@extends('layouts.common_layout')

@section('title',  date('m',strtotime('-1 months')) . "月次報告")

@section('content')
    <h5 class="text-center my-4">{{date('m',strtotime('-1 months'))}}月分報告</h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col" class="text-center">名前</th>
            <th scope="col" class="text-center">組手人数</th>
            <th scope="col" class="text-center">未組手人数</th>
            <th scope="col" class="text-center">未組手来場者数</th>
        </tr>
        </thead>
        <tbody>
        @foreach($last_month_reports as $last_month_report)
            <tr>
                <th scope="row" class="text-center">{{$last_month_report->name}}</th>
                <td class="text-center">{{$last_month_report->numOfKumite}}</td>
                <td class="text-center">{{$last_month_report->numOfNonKumite}}</td>
                <td class="text-center">{{$last_month_report->numOfVisitors}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
