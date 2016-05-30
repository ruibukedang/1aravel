@extends('public.base')
@section('customer_css')
<link rel="stylesheet" href="/css/article/show.css">
@endsection
@section('content')
<div class="a-main container">
    Title: {{$article->title}}<br>
    Nickname: {{$article->user->nickname}}<br>
    Content: {{$article->content}}
</div>
<div class="a-comments container">

</div>
@endsection @section('customer_js')
@endsection
