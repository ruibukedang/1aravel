@extends('index.layout')
@section('customer_css')
<link rel="stylesheet" href="/css/user/show.css">
@endsection
@section('content')
<div class="u-main am-container">
    Nickname: {{$user->nickname}}<br>
    Email: {{$user->email}}<br>
    Blog: {{$user->blog}}<br>
</div>
@endsection @section('customer_js')
@endsection
