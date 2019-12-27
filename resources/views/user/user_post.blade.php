@extends('layouts.common_layout')

@section('title','月次報告登録')

@section('content')



    <form action="{{url("/user_confirm")}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">報告者名</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="numOfKumite">組手手かざし人数</label>
            <input type="number" class="form-control" id="numOfKumite">
        </div>
        <div class="form-group">
            <label for="numOfNonKumite">未組手手かざし人数</label>
            <input type="number" class="form-control" id="numOfNonKumite">
        </div>
        <div class="form-group">
            <label for="numOfVisitors">未組手来場者数</label>
            <input type="number" class="form-control" id="numOfVisitors">
        </div>
        <button type="submit" class="btn btn-primary" value="post">登録</button>
    </form>
@endsection
