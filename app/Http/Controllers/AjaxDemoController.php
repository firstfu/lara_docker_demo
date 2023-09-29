<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AjaxDemoController extends Controller
{

    public function index(Request $request)
    {

        if ($request->ajax()) {
            Log::error('lieve', Auth::user()?->toArray());
            return response()->json(['msg' => 'This is a simple message.']);
        }






        return view('demo.demo1');
    }

}
