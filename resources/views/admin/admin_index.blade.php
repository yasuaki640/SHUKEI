@extends('layouts.common_layout')

@section('title','管理者画面')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th scope="col">名前</th>
            <th scope="col">組手人数</th>
            <th scope="col">未組手人数</th>
            <th scope="col">未組手来場者数</th>
            <th scope="col">登録日時</th>
            <th scope="col">更新日時</th>
        </tr>
        </thead>
        <tbody>
        @foreach($monthly_reports as $monthly_report)
            <tr>
                <th scope="row">{{$monthly_report->id}}</th>
                <th scope="row">{{$monthly_report->name}}</th>
                <td>{{$monthly_report->numOfKumite}}</td>
                <td>{{$monthly_report->numOfNonKumite}}</td>
                <td>{{$monthly_report->numOfVisitors}}</td>
                <td>{{$monthly_report->created_at}}</td>
                <td>{{$monthly_report->updated_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
