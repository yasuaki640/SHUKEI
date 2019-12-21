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
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>テーブルのセル</td>
            <td>テーブルのセル</td>
            <td>テーブルのセル</td>
        </tr>
        </tbody>
    </table>
@endsection
