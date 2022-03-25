<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\MenuController;
use App\Http\Controllers\admin\MenuFooterController;
use App\Http\Controllers\admin\SubMenuController;
use App\Http\Controllers\admin\FooterController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ControllerPermissionController;

use App\Http\Controllers\Auth\EmployeeRegisterController;
Route::get('home', function () {

    return view('admin.index');

})->name('home');

Route::get('/', function () {


//    $controllers = [];
//     $controller=[];
//    foreach (Route::getRoutes()->getRoutes() as $route)
//    {
//        $action = $route->getAction();
////        $controllers[]=$action;
//
//
//        if (array_key_exists('controller', $action))
//        {
//
//            // to separate the class name from the method
//            $controllers[] = explode('@', $action['controller']);
//        }
//    }
//
//    foreach ($controllers as $control){
//        $controller[]=$control[0];
//    }
//
//    $unique = array_unique($controller);
//
////    $controller_class = new ReflectionClass($unique[1]);
//    //$controller_methods = $controller_class->getMethods(ReflectionMethod::IS_PUBLIC);
//    //return $controller_methods;
//
//  //  return $unique ;
//
//    foreach ($unique as $data ){
//
//        $this_controller=\App\Models\Controller::create([
//            'name'=> $data
//        ]);
//        $controller_class = new ReflectionClass($data);
//        $controller_methods = $controller_class->getMethods(ReflectionMethod::IS_PUBLIC);
//
//        foreach ($controller_methods as $method){
//            \App\Models\Method::create([
//                'controller_id'=>$this_controller->id,
//                'name'=> $method->name
//            ]);
//
//        }
////        return $controller_methods[0]->name;
//
//
//    }


return view('admin.index');
});


Route::post('reset_password_without_token', [AdminController::class,'validatePasswordRequest']);
Route::get('reset_password/{token}', [AdminController::class,'resetPassword']);
Route::post('changepassward', [AdminController::class,'changepassward']);
Route::get('resetpasswordform', [AdminController::class,'resetpasswordform']);








Route::group(['prefix'=>'acount-setting','as'=>'acount-setting.'] ,function() {
    Route::get('/',[AdminController::class,'index'])->name('admin');
    Route::post('update/{id}', [AdminController::class,'update'])->name('update');
    Route::get('reset-email-phone', [AdminController::class,'reset'])->name('reset');
    Route::get('security', [AdminController::class,'security'])->name('security');
    Route::post('changepasswordpost', [AdminController::class,'changepasswordpost'])->name('changepasswordpost');
    Route::get('/edit-acount',[AdminController::class,'edit'])->name('edit');

    Route::get('change/password', [AdminController::class,'changepassword'])->name('changepassword');

}) ;

Route::group(['prefix'=>'head' ,'as'=>'head.'] ,function() {
    Route::get('/social-setting', [HeaderController::class,'social'])->name('social');
    Route::post('/social-post', [HeaderController::class,'social_post'])->name('social-post');
    Route::get('logo',          [HeaderController::class,'logo'])->name('logo');
    Route::get('private/{id}', [HeaderController::class,'private'])->name('private');
    Route::post('logo-post', [HeaderController::class,'logopost'])->name('logo-post');
    Route::post('phone-post', [HeaderController::class,'phone_post'])->name('phone-post');
    Route::post('email-post', [HeaderController::class,'email_post'])->name('email-post');
    Route::post('address-post', [HeaderController::class,'address_post'])->name('address-post');
    Route::post('site-post', [HeaderController::class,'site_post'])->name('site_post');

}) ;

Route::group(['prefix'=>'menus','as'=>'menu.'] ,function() {
    Route::get('show-all-menus', [MenuController::class,'index'])->name('index');
    Route::get('add-new-menu', [MenuController::class,'create'])->name('create');
    Route::post('store', [MenuController::class,'store'])->name('store');
    Route::get('edit/{slug}', [MenuController::class,'edit'])->name('edit');
    Route::post('update/{id}', [MenuController::class,'update'])->name('update');
    Route::get('delete/{id}', [MenuController::class,'destroy'])->name('delete');

}) ;
Route::group(['prefix'=>'customize','as'=>'customize.'] ,function() {
    Route::get('/', [\App\Http\Controllers\Admin\SideOrderController::class,'index'])->name('index');

    Route::get('show-all-sidemenu', [\App\Http\Controllers\Admin\SideOrderController::class,'sort'])->name('sort');
    Route::get('delete/{id}', [\App\Http\Controllers\Admin\SideOrderController::class,'destroy'])->name('delete');
    Route::get('edit-sidemenu/{id}', [\App\Http\Controllers\Admin\SideOrderController::class,'edit'])->name('edit');
    Route::get('create', [\App\Http\Controllers\Admin\SideOrderController::class,'create'])->name('create');
    Route::post('update', [\App\Http\Controllers\Admin\SideOrderController::class,'update'])->name('update');
    Route::post('store', [\App\Http\Controllers\Admin\SideOrderController::class,'store'])->name('store');
    Route::get('destroy/{id}', [\App\Http\Controllers\Admin\SideOrderController::class,'delete'])->name('destroy');

    Route::post('updatemenu/{id}', [\App\Http\Controllers\Admin\SideOrderController::class,'updatemenu'])->name('updatemenu');

}) ;

Route::group(['prefix'=>'menu-footer' ,'as'=>'menu-footer.'] ,function() {
    Route::get('show-all-menu-footer', [MenuFooterController::class,'index'])->name('index');
    Route::get('add-new-menu-footer', [MenuFooterController::class,'create'])->name('create');
    Route::get('edit/{slug}', [MenuFooterController::class,'edit'])->name('edit');
    Route::get('delete/{id}', [MenuFooterController::class,'destroy'])->name('delete');
    Route::post('store', [MenuFooterController::class,'store'])->name('store');
    Route::post('update/{id}', [MenuFooterController::class,'update'])->name('update');

}) ;
Route::group(['prefix'=>'sub_menus' ,'as'=>'sub_menu.'] ,function() {
    Route::get('/', [SubMenuController::class,'index'])->name('index');
    Route::get('create', [SubMenuController::class,'create'])->name('create');
    Route::post('store', [SubMenuController::class,'store'])->name('store');

}) ;

Route::group(['prefix'=>'slider' ,'as'=>'slider.'] ,function() {

    Route::get('/', [SliderController::class,'index'])->name('index');
    Route::get('create', [SliderController::class,'create'])->name('create');
    Route::post('store', [SliderController::class,'store'])->name('store');
    Route::get('edit/{slug}', [SliderController::class,'edit'])->name('edit');
    Route::get('delete/{slug}', [SliderController::class,'destroy'])->name('delete');
    Route::post('update/{id}', [SliderController::class,'update'])->name('update');

}) ;

Route::group(['prefix'=>'page' ,'as'=>'page.'] ,function() {

    Route::get('/', [PageController::class,'index'])->name('index');
    Route::get('create', [PageController::class,'create'])->name('create');
    Route::post('store', [PageController::class,'store'])->name('store');
    Route::get('edit/{id}', [PageController::class,'edit'])->name('edit');
    Route::post('update/{id}', [PageController::class,'update'])->name('update');
    Route::get('delete/{id}', [PageController::class,'destroy'])->name('delete');

}) ;
Route::group(['prefix'=>'employees' ,'as'=>'employee.'] ,function() {

    Route::get('/', [EmployeeController::class,'index'])->name('index');
    Route::get('create', [EmployeeRegisterController::class,'registration'])->name('create');
    Route::get('edit/{id}', [EmployeeController::class,'edit'])->name('edit');
    Route::get('delete/{id}', [EmployeeController::class,'destroy'])->name('delete');
    Route::post('store', [EmployeeRegisterController::class,'customRegistration'])->name('store');
    Route::post('update/{id}', [EmployeeController::class,'update'])->name('update');

}) ;
Route::group(['prefix'=>'departments' ,'as'=>'department.'] ,function() {

    Route::get('/', [DepartmentController::class,'index'])->name('index');
    Route::get('create', [DepartmentController::class,'create'])->name('create');
    Route::post('store', [DepartmentController::class,'store'])->name('store');
    Route::get('edit/{id}', [DepartmentController::class,'edit'])->name('edit');
    Route::post('update/{id}', [DepartmentController::class,'update'])->name('update');
    Route::get('delete/{id}', [DepartmentController::class,'destroy'])->name('delete');

}) ;

Route::group(['prefix'=>'permissions' ,'as'=>'permissions.'] ,function() {

    Route::get('view-all-permissions', [PermissionController::class,'index'])->name('index');
    Route::get('edit/{id}', [PermissionController::class,'edit'])->name('edit');
    Route::get('add-new-permission', [PermissionController::class,'create'])->name('create');
    Route::post('store', [PermissionController::class,'store'])->name('store');

    Route::get('delete/{id}', [PermissionController::class,'destroy'])->name('delete');

}) ;
Route::group(['prefix'=>'roles' ,'as'=>'roles.'] ,function() {

    Route::get('show-all-roles', [RoleController::class,'index'])->name('index');
    Route::get('add-new-role', [RoleController::class,'create'])->name('create');
    Route::post('store', [RoleController::class,'store'])->name('store');
    Route::get('edit/{id}', [RoleController::class,'edit'])->name('edit');
    Route::post('update/{id}', [RoleController::class,'update'])->name('update');
    Route::get('delete/{id}', [RoleController::class,'destroy'])->name('delete');
    Route::get('employee/{id}', [RoleController::class,'employee'])->name('employee');

}) ;
Route::group(['prefix'=>'groups' ,'as'=>'groups.'] ,function() {

    Route::get('/show-all-group', [GroupController::class,'index'])->name('index');
    Route::get('add-new-group', [GroupController::class,'create'])->name('create');
    Route::post('store', [GroupController::class,'store'])->name('store');
    Route::get('/edit/{name}', [GroupController::class,'edit'])->name('edit');
    Route::post('update/{id}', [GroupController::class,'update'])->name('update');
    Route::get('employee/{id}', [GroupController::class,'employee'])->name('employee');
    Route::post('employee/{id}', [GroupController::class,'employee_group'])->name('delete');

}) ;
Route::group(['prefix'=>'footer' ,'as'=>'footer.'] ,function() {

    Route::get('/about_site', [FooterController::class,'about_site'])->name('about-site');
    Route::post('/about_site-post', [FooterController::class,'store'])->name('about-site-post');

}) ;
Route::group(['prefix'=>'translate' ,'as'=>'translate.'] ,function() {

    Route::get('/', [\App\Http\Controllers\Admin\TranslateController::class,'index'])->name('index');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\TranslateController::class,'edit'])->name('edit');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\TranslateController::class,'update'])->name('update');

}) ;
Route::group(['prefix'=>'payment' ,'as'=>'payment.'] ,function() {

    Route::get('/', [PaymentController::class,'index'])->name('index');
    Route::get('add-new-payment', [PaymentController::class,'create'])->name('create');
    Route::post('store', [PaymentController::class,'store'])->name('store');
    Route::post('update/{id}', [PaymentController::class,'update'])->name('update');
    Route::get('edit/{id}', [PaymentController::class,'edit'])->name('edit');
    Route::get('delete/{id}', [PaymentController::class,'destroy'])->name('delete');

}) ;
Route::group(['prefix'=>'currency' ,'as'=>'currency.'] ,function() {

    Route::get('/', [CurrencyController::class,'index'])->name('index');
    Route::get('create', [CurrencyController::class,'create'])->name('create');
    Route::get('edit/{id}', [CurrencyController::class,'edit'])->name('edit');
    Route::post('store', [CurrencyController::class,'store'])->name('store');
    Route::post('update/{id}', [CurrencyController::class,'update'])->name('update');
    Route::get('delete/{id}', [CurrencyController::class,'destroy'])->name('delete');

}) ;
Route::group(['prefix'=>'user' ,'as'=>'user.'] ,function() {
    Route::get('/', [UserController::class,'index'])->name('index');
    Route::get('edit/{id}', [UserController::class,'edit'])->name('edit');
    Route::get('delete/{id}', [UserController::class,'destroy'])->name('delete');

}) ;

Route::group(['prefix'=>'controllers' ,'as'=>'controller.'] ,function() {
    Route::get('/view-all-controllers', [ControllerPermissionController::class,'index'])->name('index');
    Route::get('edit/{id}', [ControllerPermissionController::class,'edit'])->name('edit');
    Route::get('show/{id}', [ControllerPermissionController::class,'show'])->name('show');
    Route::get('delete/{id}', [ControllerPermissionController::class,'destroy'])->name('delete');

}) ;

Route::group(['prefix'=>'blogs' ,'as'=>'blog.'] ,function() {
    Route::get('/view-all-articls', [\App\Http\Controllers\Admin\BlogController::class,'index'])->name('index');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\BlogController::class,'edit'])->name('edit');
    Route::get('create-article', [\App\Http\Controllers\Admin\BlogController::class,'create'])->name('create');
    Route::post('store', [\App\Http\Controllers\Admin\BlogController::class,'store'])->name('store');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\BlogController::class,'update'])->name('update');
    Route::get('show/{id}', [\App\Http\Controllers\Admin\BlogController::class,'show'])->name('show');
    Route::get('delete/{id}', [\App\Http\Controllers\Admin\BlogController::class,'destroy'])->name('delete');

}) ;

Route::group(['prefix'=>'category' ,'as'=>'main-category.'] ,function() {
    Route::get('/view-all-category', [\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('index');
    Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('edit');
    Route::get('create-category', [\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('create');
    Route::post('store', [\App\Http\Controllers\Admin\CategoryController::class,'store'])->name('store');
    Route::post('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('update');
    Route::get('show/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'show'])->name('show');
    Route::get('delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('delete');

}) ;
