<?php




Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    
    Config::set('auth.defines','admin');//key value from config/auth.php file
    Route::get('login', [ 'as' => 'login', 'uses' => 'AdminAuth@login']);
    Route::post('login', [ 'as' => 'login', 'uses' => 'AdminAuth@doLogin']);
    Route::get('forgot/password', 'AdminAuth@forgot_password');
    Route::post('forgot/password', 'AdminAuth@forgot_password_post');
    Route::get('reset/password/{token}', 'AdminAuth@reset_password');
    Route::post('reset/password/{token}', 'AdminAuth@reset_password_post');


    Route::group(['middleware' => 'admin:admin'], function (){

        Route::resource('admin','AdminController',[
            'names' => [
                'index' => 'admin.index',
                'create' => 'admin.create',
                'store' => 'admin.store',
                'show' => 'admin.show',
                'edit' => 'admin.edit',
                'update' => 'admin.update',
                'destroy' => 'admin.destoy'
            ],
        ]);
        Route::delete('admin/destroy/all','AdminController@multi_delete');

        Route::resource('users','UserController',[
            'names' => [
                'index' => 'users.index',
                'create' => 'users.create',
                'store' => 'users.store',
                'show' => 'users.show',
                'edit' => 'users.edit',
                'update' => 'users.update',
                'destroy' => 'users.destoy'
            ],
        ]);
        Route::delete('users/destroy/all','UserController@multi_delete');
        Route::resource('countries','CountriesController',[
            'names' => [
                'index' => 'countries.index',
                'create' => 'countries.create',
                'store' => 'countries.store',
                'show' => 'countries.show',
                'edit' => 'countries.edit',
                'update' => 'countries.update',
                'destroy' => 'countries.destoy'
            ],
        ]);
        Route::delete('countries/destroy/all','CountriesController@multi_delete');
        Route::resource('cities', 'CitiesController',[
            'names' => [
                'index' => 'cities.index',
                'create' => 'cities.create',
                'store' => 'cities.store',
                'show' => 'cities.show',
                'edit' => 'cities.edit',
                'update' => 'cities.update',
                'destroy' => 'cities.destoy'
            ],
        ]);
        Route::delete('cities/destroy/all', 'CitiesController@multi_delete');
        Route::resource('states', 'StatesController',[
            'names' => [
                'index' => 'states.index',
                'create' => 'states.create',
                'store' => 'states.store',
                'show' => 'states.show',
                'edit' => 'states.edit',
                'update' => 'states.update',
                'destroy' => 'states.destoy'
            ],
        ]);
        Route::delete('states/destroy/all', 'StatesController@multi_delete');
        Route::resource('trademarks', 'TradeMarksController');
        Route::delete('trademarks/destroy/all', 'TradeMarksController@multi_delete');
        Route::resource('departments', 'DepartmentsController');


        Route::get('/', function () {
        return view('admin.home');
       });

       Route::get('settings', 'Settings@setting');
       Route::post('settings', 'Settings@setting_save');

       Route::any('logout','AdminAuth@logout');//get or post
    });
    Route::get('lang/{lang}',function($lang){
        session()->has('lang') ? session()->forget('lang') : '';
        $lang=='ar' ? session()->put('lang','ar') : session()->put('lang','en');
        return back();
    });

});