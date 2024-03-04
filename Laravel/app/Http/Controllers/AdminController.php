<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebService;

class AdminController extends Controller
{
    //管理画面
    function index(){
        $web_services = WebService::all();
        return view('web_service.dashboard.dashboard', compact('web_services'));
    }

    //新規登録完了画面
    function showStoreResult(){
        return view('web_service.dashboard.store_result');
    }

    //編集画面
    function showEdit(WebService $web_service){
        return view('web_service.dashboard.edit', compact('web_service'));
    }

    //更新完了画面
    function showUploadResult(){
        return view('web_service.dashboard.upload_result');
    }

    //削除完了画面
    function showDeleteResult(){
        return view('web_service.dashboard.delete_result');
    }
}
