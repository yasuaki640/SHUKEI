@extends('layouts.common_layout')

@section('title','月次報告登録')

@section('content')

    <h3>{{date('m',strtotime('-1 months'))}} 月分の報告を入力してください</h3>

    @if($errors->any())
        @foreach($errors->all() as $error)
            <ul class="text-danger">{{$error}}</ul>
        @endforeach
    @endif
    <form action="{{action('CrudMonthlyReportController@confirm')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">報告者名</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
        </div>
        <div class="form-group">
            <label for="numOfKumite">組手手かざし人数</label>
            <input type="number" class="form-control" name="numOfKumite"
                   value="{{old('numOfKumite')}}">
        </div>
        <div class="form-group">
            <label for="numOfNonKumite">未組手手かざし人数</label>
            <input type="number" class="form-control" name="numOfNonKumite"
                   value="{{old('numOfNonKumite')}}">
        </div>
        <div class="form-group">
            <label for="numOfVisitors">未組手来場者数</label>
            <input type="number" class="form-control" name="numOfVisitors"
                   value="{{old('numOfVisitors')}}">
        </div>
        <button type="submit" class="btn btn-block btn-primary" value="post">確認</button>
    </form>
@endsection
