@extends('web_service.layouts.layouts')

@section('container')
<div class="dashboard_contents">
    <h1 class="title_page">編集画面</h1>
    <div class="dashboard_contents_inner">
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
                        <td><input type="text" maxlength="40" value="{{$web_service->lineup}}"></td>
                        <td><textarea name="" maxlength="255">{{$web_service->description}}</textarea></td>
                        <td><input type="text" value="{{$web_service->price}}"></td>
                        <td><img src="{{$web_service->file_path}}"></td>
                        <td class="w_fit"><button class="btn">更新</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dashboard_back">
            <a href="{{route('dashboard')}}" class="btn">管理画面に戻る</a>
        </div>
    </div>
</div>
@endsection