<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function setAz() {
        session()->put('locale', 'az');
        return redirect()->back();
    }

    public function setEn() {
        session()->put('locale', 'en');
        return redirect()->back();
    }
}
