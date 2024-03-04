@extends('web_service.layouts.layouts')

@section('container')
<div class="dashboard_contents">
    <h1 class="title_page">削除画面</h1>
    <div class="dashboard_contents_inner">
        <p>正常に削除されました</p>
        <div class="dashboard_back">
            <a href="{{route('dashboard')}}" class="btn">管理画面に戻る</a>
        </div>
    </div>
</div>
@endsection