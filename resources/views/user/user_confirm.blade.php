@extends('layouts.common_layout')

@section('title','入力確認')

@section('content')
    <h5 class="text-center my-4">以下の内容で登録します。</h5>
    <form action="{{action('CrudMonthlyReportController@create')}}" method="post">
        @csrf
        <table class="table">
            <tbody>
            <tr>
                <th scope="row">報告者名</th>
                <td>{{$input->name}}</td>
            </tr>
            <tr>
                <th scope="row">組手手かざし人数</th>
                <td>{{$input->numOfKumite}}</td>
            </tr>
            <tr>
                <th scope="row">未組手手かざし人数</th>
                <td>{{$input->numOfNonKumite}}</td>
            </tr>
            <tr>
                <th scope="row">未組手来場者数</th>
                <td>{{$input->numOfVisitors}}</td>
            </tr>
            </tbody>
        </table>

        {{--    セッションに確認画面で表示された画面を渡す。    --}}
        <input type="hidden" name="name" value="{{$input->name}}">
        <input type="hidden" name="numOfKumite" value="{{$input->numOfKumite}}">
        <input type="hidden" name="numOfNonKumite" value="{{$input->numOfNonKumite}}">
        <input type="hidden" name="numOfVisitors" value="{{$input->numOfVisitors}}">
        <button type="submit" class="btn btn-primary" value="post">登録</button>
    </form>


@endsection
