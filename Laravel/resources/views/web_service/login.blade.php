@extends('web_service.layouts.layouts')

@section('container')
<div class="login_contents">
    <h1 class="login_title title_page">ログイン画面</h1>
    @if(session('error'))
    {{ session('error') }}
    @endif
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="login_form">
            <table class="login_form_table table">
                <tr>
                    <th>UserName</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>PassWord</th>
                    <td><input type="password" name="password" required></td>
                </tr>
            </table>
            <div class="login_form_btn">
                <button type="submit" class="login_form_btn_submit btn">ログイン</button>
            </div>
        </div>
    </form>
</div>
@endsection