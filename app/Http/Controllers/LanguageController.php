<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index($locale){

        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            if (Session::has('locale')) {
                Session::put('locale', $locale);
                App::setLocale(Session::get('locale'));

            }
            else{
                Session::put('locale', $locale);
                App::setLocale(Session::get('locale'));


            }

        }

        return redirect()->back();
    }
    }

