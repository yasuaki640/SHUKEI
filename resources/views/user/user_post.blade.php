@extends('layouts.common_layout')

@section('title','月次報告登録')

@section('content')
    <form>
        <div class="form-group">
            <label for="name">報告者名</label>
            <input type="text" class="form-control" id="name" placeholder="報告者名">
        </div>
        <div class="form-group">
            <label for="numOfKumite">組手手かざし人数</label>
            <input type="number" class="form-control" id="numOfKumite" placeholder="組手手かざし人数">
        </div>
        <div class="form-group">
            <label for="numOfNonKumite">未組手手かざし人数</label>
            <input type="number" class="form-control" id="numOfNonKumite" placeholder="未組手手かざし人数">
        </div>
        <div class="form-group">
            <label for="numOfVisitors">未組手来場者数</label>
            <input type="number" class="form-control" id="numOfVisitors" placeholder="未組手来場者数">
        </div>
    </form>
@endsection
