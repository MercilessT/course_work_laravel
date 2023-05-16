<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function contacts() {
        return view('contacts');
    }

    public function services() {
        return view('services');
    }

    public function about_us() {
        return view('about_us');
    }

    public function sign_up() {
        return view('sign_up');
    }

    public function sign_up_check(SignUpRequest $request) {
        Session::flash('success_message', 'Успішно відправлено!');
        return back()->withInput();
    }
}
