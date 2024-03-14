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
            <form action="{{route('dashboard')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="table_wrap">
                    <table class="table_lineup table">
                        <thead>
                            <tr>
                                <th>ラインナップ</th>
                                <th>サービス内容</th>
                                <th>金額（税込）</th>
                                <th><button type="button" class="js_file_trigger btn">アップロード</button><input type="file" name="image" class="js_file"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" name="lineup" maxlength="40" required></td>
                                <td><textarea name="description" maxlength="255" required></textarea></td>
                                <td><input type="text" name="price" required></td>
                                <td class="text_ac"><img id="image"></td>
                                <td class="w_fit"><button type="submit" class="btn">登録</button></td>
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
                            <td class="text_ac"><img src="{{ Storage::url($web_service->file_path) }}" alt=""></td>
                            <td class="w_fit"><a href="{{route('edit', $web_service)}}" class="btn">編集</button></td>
                            <td class="w_fit">
                                <form action="{{route('delete', $web_service)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onclick="return confirm('本当に削除しますか？')" class="btn">削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@endsection
@section('script')
<script>
    document.querySelector('.js_file_trigger').addEventListener('click', function() {
        document.querySelector('.js_file').click();
    });

    const input_file = document.querySelector('.js_file');
    input_file.addEventListener("change", function (e) {
      const file = e.target.files[0];//複数ファイルはfiles配列をループで回す
      const reader = new FileReader();
      const image = document.getElementById("image");
      reader.addEventListener("load", function () {
        image.src = reader.result;
      }, false);

      if (file) {
        reader.readAsDataURL(file);
      }
    })
</script>
@endsection