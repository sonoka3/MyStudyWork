@extends('web_service.layouts.layouts')

@section('container')
<div class="dashboard_contents">
    <h1 class="title_page">登録画面</h1>
    <div class="dashboard_contents_inner">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        @endif
        @if(session('message'))
            <p>{{ session('message') }}</p>
        @endif
        <div class="dashboard_back">
            <a href="{{route('dashboard')}}" class="btn">管理画面に戻る</a>
        </div>
    </div>
</div>
@endsection