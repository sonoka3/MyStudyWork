<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormAdminMail;
use App\Mail\ContactFormUserMail;
use App\Models\WebService;

class WebServiceController extends Controller
{
    //トップページ表示
    function index(){
        $web_services = WebService::all();
        return view('web_service.index', compact('web_services'));
    }
    
    //お問い合わせ入力処理
    function post(Request $request){
        $data = $request->only('name', 'email', 'email_chk', 'category', 'msg');
        $rules = [
            'name' => 'required|string|no_space',
            'email' => 'required|email:filter,dns|no_space',
            'email_chk' => 'required|email|same:email|no_space',
            'category' => 'required',
            'msg' => 'string',
        ];
        
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect('/web-service#contact')->withInput()->withErrors($validator);
        }

        $request->session()->put('form_input', $data);

        return redirect()->route('confirm');
    }
    
    //お問い合わせ確認画面表示
    function showConfirm(Request $request){
		$data = $request->session()->get('form_input');
		
		if(!$data){
			return redirect('/web-service#contact');
		}
		return view('web_service.contact.confirm', ['data' => $data]);
    }
    
    //お問い合わせ送信処理
    function send(Request $request){
		$data = $request->session()->get('form_input');

        if($request->has('back')){
            return redirect('/web-service#contact')->withInput($data);
        }

		$request->session()->forget('form_input');

        // 送信先メールアドレス
        $email_admin = env('MAIL_FROM_ADDRESS');
        $email_user  = $data['email'];

        $escapedData = array_map('htmlspecialchars', $data);
        Mail::to($email_admin)->send(new ContactFormAdminMail($escapedData));
        Mail::to($email_user)->send(new ContactFormUserMail($escapedData));

		return redirect()->route('complete');
	}

    //完了画面表示
    function showComplete(){	
		return view("web_service.contact.complete");
	}
}
