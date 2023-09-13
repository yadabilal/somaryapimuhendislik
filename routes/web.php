<?php

// Auth İşlemleri
Route::get('giris-yap', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('giris-yap', 'Auth\LoginController@login');
Route::post('cikis-yap', 'Auth\LoginController@logout')->name('logout');
Route::get('sifremi-unuttum', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('forgotpassword');
Route::post('sifremi-unuttum', 'Auth\ForgotPasswordController@sendResetPassword');



Route::prefix('admin')->namespace('AdminPanel')->middleware('auth', 'super_admin')->group(function () {
  // Profil
  Route::get('password', 'AdminController@index')->name('admin.password');
  Route::post('sifre-kaydet', 'AdminController@save')->name('admin.password.save');
  Route::get('/', 'AdminController@proccess')->name('admin.user.proccess');

    Route::get('ayarlar', 'SettingController@index')->name('admin.setting.index');
    Route::post('ayarlar', 'SettingController@save')->name('admin.setting.save');

    Route::get('sozluk', 'DictionaryController@index')->name('admin.dictionary.index');
    Route::get('mesajlar', 'ContactController@index')->name('admin.contact.index');
    Route::get('aboneler', 'ContactController@subscription')->name('admin.contact.subscription');
    Route::post('sozluk', 'DictionaryController@save')->name('admin.dictionary.save');

    Route::get('kaydet', 'AdminController@form')->name('admin.form');
    Route::post('kaydet', 'AdminController@formSave')->name('admin.form.save');
    Route::get('delete-image', 'AdminController@deleteImage')->name('admin.form.deleteImage');
    Route::get('publish', 'AdminController@publishOrNotPublish')->name('admin.publishOrNotPublish');

});

Route::get('home', function () {
    return redirect('/');
});
Route::get('/', 'HomeController@index')->name('home');
Route::post('/mesaj-gonder', 'HomeController@contact')->name('contact');
Route::post('/abone-ol', 'HomeController@subscribe')->name('subscribe');
Route::get('/{url}/{contentUrl}', 'HomeController@detail')->name('home.detail');
Route::get('/{url}', 'HomeController@index')->name('home.list');
