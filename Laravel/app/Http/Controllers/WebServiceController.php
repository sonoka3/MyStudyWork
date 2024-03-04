<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebService;

class WebServiceController extends Controller
{
    function index(){
        $web_services = WebService::all();
        return view('web_service.index', compact('web_services'));
    }
}
