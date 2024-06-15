<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocalController extends Controller
{
    public function setLocale(Request $request, $locale = null)
    {
        $locales = ['en', 'in', 'jp', 'kr', 'cn'];
        $locale = in_array($locale, $locales) ? $locale : 'en';
    
        App::setLocale($locale);
        Session::put("locale", $locale);
    
        return redirect()->route('index');
    }
}
