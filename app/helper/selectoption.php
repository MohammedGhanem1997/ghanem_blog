<?php
use Illuminate\Support\Facades\DB;
function navigation(){

 return \App\Models\NavigationBar::all();
}

function menufooter(){



    return \App\Models\Menu::where('navigation_bar_id',1)->get();
}


function sub_menu(){



    return \App\Models\Menu::whereIn('navigation_bar_id',[2,3])->get();
}
 function department(){



    return \App\Models\Department::all();
}

function social(){



    return \App\Models\Social::all();
}

function site(){



    return \App\Models\SiteControl::first();
}


function lable($title){



    return \App\Models\Info::where('label',$title)->first()->description;
}
function  countries(){


            $countries= DB::table('countries')->get();



    return $countries;


    }
