@extends('web_service.layouts.layouts')

@section('nav')
<nav class="nav">
    <div class="nav_login">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="nav_login_btn btn">ログアウト</button>
        </form>
    </div>
</nav>
@endsection

@section('container')
<div class="dashboard_contents">
    <h1 class="title_page">管理画面</h1>
    <div class="dashboard_contents_inner">
        <section class="dashboard_section">
            <h2 class="title_section">新規登録</h2>
            <form action="{{route('store')}}" method="post">
                <div class="table_wrap">
                    <table class="table_lineup table">
                        <thead>
                            <tr>
                                <th>ラインナップ</th>
                                <th>サービス内容</th>
                                <th>金額（税込）</th>
                                <th><button class="btn">アップロード</button></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="lineup" maxlength="40"></td>
                                <td><textarea name="description" maxlength="255"></textarea></td>
                                <td><input type="text" name="price"></td>
                                <td></td>
                                <td class="w_fit"><button class="btn">登録</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </section>
        <section class="dashboard_section">
            <h2 class="title_section">データ管理</h2>
            <div class="table_wrap">
                <table class="table_lineup table">
                    <thead>
                        <tr>
                            <th>ラインナップ</th>
                            <th>サービス内容</th>
                            <th>金額（税込）</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($web_services as $web_service)
                        <tr>
                            <td class="text_ac">{{$web_service->lineup}}</td>
                            <td>{{$web_service->description}}</td>
                            <td class="text_ac">{{$web_service->price}}</td>
                            <td><img src="{{$web_service->file_path}}"></td>
                            <td class="w_fit"><a href="{{route('edit', $web_service)}}" class="btn">編集</button></td>
                            <td class="w_fit"><button class="btn">削除</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@endsection