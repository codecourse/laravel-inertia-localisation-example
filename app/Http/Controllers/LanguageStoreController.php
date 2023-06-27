<?php

namespace App\Http\Controllers;

use App\Lang\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LanguageStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        session()->put('language', Lang::tryFrom($request->language)->value);

        return back();
    }
}
