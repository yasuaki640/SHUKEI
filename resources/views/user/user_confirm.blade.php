@extends('layouts.common_layout')

@section('title','入力確認')

@section('content')
    @csrf
    <div class="row">
        <div class="col">報告者名</div>
        <div class="col">{{$input->name}}</div>
    </div>
    <div class="row">
        <div class="col">組手手かざし人数</div>
        <div class="col">{{$input->numOfKumite}}</div>
    </div>
    <div class="row">
        <div class="col">未組手手かざし人数</div>
        <div class="col">{{$input->numOfNonKumite}}</div>
    </div>
    <div class="row">
        <div class="col">未組手来場者数</div>
        <div class="col">{{$input->numOfVisitors}}</div>
    </div>
@endsection
