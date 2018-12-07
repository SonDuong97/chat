<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedisController extends Controller
{
    public function showMessage(Request $request) {
    	return redirect()->route('home', ['name' => $request->name, 'content' => $request->content]);
    }
}
