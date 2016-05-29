@extends('index.layout')
@section('customer_css')
<link rel="stylesheet" href="/css/index/home.css">
@endsection
@section('content')
<div class="a-list am-container">
    @foreach($articles as $article)
        <div class="am-g a-item">
            <div class="am-u-md-1 am-u-sm-1">
                <p>1</p>
            </div>
            <div class="am-u-md-7 am-u-sm-11">
                <h4><a href="/a/{{$article->id}}">{{$article->title}}</a></h4>
            </div>
            <div class="am-u-md-4 am-u-sm-12">
                <a href="/m/{{$article->user->nickname}}">{{$article->user->nickname}}</a>
            </div>
        </div>
    @endforeach
    {!! $articles->render() !!}
</div>
@endsection
@section('customer_js')
@endsection
