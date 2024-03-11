@extends('web_service.layouts.layouts')

@section('container')
<section id="contact" class="top_contact">
    <div class="top_contact_inner">
        <h2 class="top_contact_title title_page">お問合せ確認</h2>
        <form action="{{route('send')}}" method="post">
            @csrf
            <table class="top_contact_table">
                <tr>
                    <th>氏名（必須）</th>
                    <td>{{$data['name']}}</td>
                </tr>
                <tr>
                    <th>メールアドレス（必須）</th>
                    <td>{{$data['email']}}</td>
                </tr>
                <tr>
                    <th>アドレス再入力（必須）</th>
                    <td>{{$data['email_chk']}}</td>
                </tr>
                <tr>
                    <th>お問合せ分類（必須）</th>
                    <td>{{$data['category']}}</td>
                </tr>
                <tr>
                    <th>お問合せ内容</th>
                    <td>{{$data['msg']}}</td>
                </tr>
            </table>
            <div class="top_contact_btn">
                <button type="submit" class="top_contact_btn_submit btn">送信</button><br>
                <button type="submit" name="back" class="top_contact_btn_back">戻る</button>
            </div>
        </form>
    </div>
</section>
@endsection