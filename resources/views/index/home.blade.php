@extends('public.base')
@section('customer_css')
<link rel="stylesheet" href="/css/index/home.css">
@endsection
@section('content')
<div class="a-list container">
    @foreach($articles as $article)
        <div class="row a-item">
            <div class="col-md-1 col-xs-2">
                <span class="badge">42</span>
            </div>
            <div class="col-md-9 col-xs-12">
                <h4><a href="/a/{{$article->id}}">{{$article->title}}</a></h4>
            </div>
            <div class="col-md-2 col-xs-2">
                <a href="/m/{{$article->user->nickname}}">{{$article->user->nickname}}</a>
                <small>{{$article->created_at}}</small>
            </div>
        </div>
    @endforeach
    {!! $articles->render() !!}
</div>
@endsection
@section('customer_js')
@endsection
