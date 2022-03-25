<?php


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

function translate($title){

   $translate= \App\Models\translate::where('title',$title)->first();

    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
    return  $translate->translate[Session::get('locale')];
    }

    return  $translate->translate['ar'];

}

function translation($title){
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
        return  $title[Session::get('locale')];
    }
    // dd($translate->translate[App::getLocale()]);

    return  $title['ar'];
}

function translateelement($id){

    if (Session::has('locale')) {
        if(Session::get('locale') =='en' ){
            return  \Spatie\Permission\Models\Permission::find($id)->name;

        }



    }
    return  \Spatie\Permission\Models\Permission::find($id)->name_ar;



}


function translateview($title){
    $translate= \App\Models\CustomView::where('title',$title)->first();
    if (Session::has('locale')) {
        App::setLocale(Session::get('locale'));
        return  $translate->translate[Session::get('locale')];
    }

    return  $translate->translate[app()->getLocale()];




}