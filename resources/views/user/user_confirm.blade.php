@extends('layouts.common_layout')

@section('title','入力確認')

@section('content')
    @csrf

    <h5 class="text-center my-4">以下の内容で登録します。</h5>
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
@endsection
