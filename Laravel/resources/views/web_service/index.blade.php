@extends('web_service.layouts.layouts')

@section('nav')
<nav class="nav">
    <div class="nav_login">
        <a href="{{route('login')}}" class="nav_login_btn btn">ログイン画面</a>
    </div>
    <button id="js_hamburger" type="button" class="nav_hamburger sp_only" aria-controls="navigation" aria-expanded="false" aria-label="メニューを開く">
        <span class="nav_hamburger_line"></span>
        <span class="nav_hamburger_text"></span>
    </button>
    <div class="js_nav_area nav_list">
        <ul>
            <li class="nav_item"><a href="{{route('web_service')}}/#service" class="js_nav_link nav_link">サービス一覧</a></li>
            <li class="nav_item"><a href="{{route('web_service')}}/#contact" class="js_nav_link nav_link">お問い合わせ</a></li>
        </ul>
        <div id="js_focus_trap" tabindex="0"></div>
    </div>
</nav>
@endsection

@section('container')
<div class="top_kv">
    <img src="{{asset('img/top_kv.png')}}" alt="">
    <div class="top_kv_read">
        <p>テクノロジーを身近に</p>
    </div>
</div>
<section id="service" class="top_service">
    <h2 class="title_page">サービス一覧</h2>
    <div class="top_service_inner">
        <div class="table_wrap">
            <table class="table_lineup table">
                <thead>
                    <tr>
                        <th>ラインナップ</th>
                        <th>サービス内容</th>
                        <th>金額（税込）</th>
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
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<section id="contact" class="top_contact">
    <div class="top_contact_inner">
        <h2 class="top_contact_title title_page">お問合せ</h2>
        <form action="{{route('web_service')}}" method="post">
            @csrf
            <table class="top_contact_table">
                <tr>
                    <th>氏名（必須）</th>
                    <td>
                        <input type="text" name="name" value="{{old('name')}}" require>
                        @error('name')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス（必須）</th>
                    <td><input type="text" name="email" value="{{old('email')}}" require>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror</td>
                </tr>
                <tr>
                    <th>アドレス再入力（必須）</th>
                    <td><input type="text" name="email_chk" value="{{old('email_chk')}}" require>
                        @error('email_chk')
                            <div class="error">{{ $message }}</div>
                        @enderror</td>
                </tr>
                <tr>
                    <th>お問合せ分類（必須）</th>
                    <td>
                        <select name="category" require>
                            <option value="">適切な種類を選択</option>
                            <option value="サービスについて" {{ old('category') == 'サービスについて' ? 'selected' : '' }}>サービスについて</option>
                            <option value="商品について" {{ old('category') == '商品について' ? 'selected' : '' }}>商品について</option>
                            <option value="その他" {{ old('category') == 'その他' ? 'selected' : '' }}>その他</option>
                        </select>
                        @error('category')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <th>お問合せ内容</th>
                    <td><textarea name="msg">{{old('msg')}}</textarea></td>
                </tr>
            </table>
            <div class="top_contact_btn">
                <button type="submit" class="top_contact_btn_submit btn">送信</button>
            </div>
        </form>
    </div>
</section>
<div class="top_map">
<gmp-map center="35.66114044189453,139.70657348632812" zoom="14" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="35.66114044189453,139.70657348632812" title="My location"></gmp-advanced-marker>
    </gmp-map>
</div>
@endsection
@section('script')
<script src="{{asset('js/hamburger.js')}}"></script>
@endsection