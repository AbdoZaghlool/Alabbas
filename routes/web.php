<?php

    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/order', 'HomeController@postOrder')->name('postOrder');
    Route::post('/order/{id}/payment', 'HomeController@postPayment')->name('postPayment');

    Route::get('/check-status/{id?}/{id1?}', 'HomeController@fatooraStatus');

    Route::get('/fatoora/success', function () {
        return view('fatoora-success');
    })->name('fatoora-success');

    Route::get('/fatoora/error', function () {
        return view('fatoora-error');
    })->name('fatoora-success');





/*admin panel routes*/

Route::get('/admin/home', ['middleware' => 'auth:admin', 'uses' => 'AdminController\HomeController@index'])->name('admin.home');

Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminController\Admin\LoginController@login')->name('admin.login.submit');
    Route::get('password/reset', 'AdminController\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'AdminController\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'AdminController\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'AdminController\Admin\ResetPasswordController@reset')->name('admin.password.update');
    Route::post('logout', 'AdminController\Admin\LoginController@logout')->name('admin.logout');


    Route::group(['middleware' => ['web', 'auth:admin'], 'namespace' => 'AdminController'], function () {
        Route::get('setting', 'SettingController@index');
        Route::post('settings', 'SettingController@store');
        Route::get('setting/create', 'SettingController@create');

        Route::get('/orders', 'OrderController@orders')->name('orders.index');
        Route::get('/orders/paid', 'OrderController@paidOrders')->name('orders.paid');
        Route::get('/orders/canceled', 'OrderController@canceledOrders')->name('orders.canceled');
        Route::get('/orders/{id}', 'OrderController@showOrder')->name('orders.show');
        Route::get('/orders/{id}/delete', 'OrderController@deleteOrder')->name('orders.delete');

        route::get('cities/{id}/delete', 'CityController@destroy');
        Route::resource('cities', 'CityController');

        route::get('sliders/{id}/delete', 'SliderController@destroy');
        Route::resource('sliders', 'SliderController');



        // Admins Route
        Route::resource('admins', 'AdminController');

        Route::get('/profile', [
            'uses' => 'AdminController@my_profile',
            'as' => 'my_profile' // name
        ]);
        Route::post('/profileEdit', [
            'uses' => 'AdminController@my_profile_edit',
            'as' => 'my_profile_edit' // name
        ]);
        Route::get('/profileChangePass', [
            'uses' => 'AdminController@change_pass',
            'as' => 'change_pass' // name
        ]);
        Route::post('/profileChangePass', [
            'uses' => 'AdminController@change_pass_update',
            'as' => 'change_pass' // name
        ]);

        Route::get('/admin_delete/{id}', [
            'uses' => 'AdminController@admin_delete',
            'as' => 'admin_delete' // name
        ]);
    });
});