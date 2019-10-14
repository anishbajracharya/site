<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('what-is-seo', function () {
    return view('frontend.pages.index');
});

Route::get('seo-nepal', function () {
    return view('frontend.pages.seoNepal');
});
Route::get('social-media-marketing', function () {
    return view('frontend.pages.social-media-marketing');
});
Route::get('social-media-marketing-nepal', function () {
    return redirect('social-media-marketing');
});

Route::get('facebook-marketing', function () {
    return view('frontend.pages.facebook-marketing');
});

Route::get('Facebook.Marketing-nepal', function () {
    return redirect('facebook-marketing');
});


Route::get('local-seo', function () {
    return view('frontend.pages.localSeo');
});
Route::get('graphic-design-nepal', function () {
    return view('frontend.pages.graphicDesign');
});
Route::get('web-design-development', function () {
    return view('frontend.pages.webDesign');
});

Route::get('web-development', function () {
    return redirect('web-design-development');
});

Route::get('web-development-nepal', function () {
    return redirect('web-design-development');
});

Route::get('why-web-design', function () {
    return view('frontend.pages.why-web-design');
});


Route::get('about-us', function () {
    return view('frontend.pages.about-us');
});


Route::get('contact-us', function () {
    return view('frontend.pages.contact-us');
});

Route::get('how-to-turn-visitors-into-customers', function () {
    return view('frontend.pages.how-can-you-turn');
});


Route::get('selling-products-on-facebook', function () {
    return view('frontend.pages.selling-product');
});

Route::get('seo-benefits-for-business', function () {
    return view('frontend.pages.seo-benifit-business');
});

Route::get('what-makes-good-business-logo', function () {
    return view('frontend.pages.what-makes-good');
});
Route::get('what-makes-a-good-business-logo', function () {
    return redirect('what-makes-good-business-logo');
});

Route::get('career', function () {
    return view('frontend.pages.career');
});

Route::get('outsource-seo', function () {
    return view('frontend.pages.outsource-seo');
});
Route::get('outsource-content-writing', function () {
    return view('frontend.pages.outsource-content-writing');
});
Route::get('outsource-web-design', function () {
    return view('frontend.pages.outsource-web-design');
});
Route::get('outsource-graphic-design', function () {
    return view('frontend.pages.outsource-graphic-design');
});
Route::get('it-training', function () {
    return view('frontend.pages.training-it');
});
Route::get('seo-training', function () {
    return view('frontend.pages.training-seo');
});
Route::get('digital-marketing-training', function () {
    return view('frontend.pages.training-digital');
});

/*
|--------------------------------------------------------------------------
| for custom try 
|--------------------------------------------------------------------------
|
|
*/

Route::get('try', function () {
    return view('frontend.pages.try');
});


Route::post('send/email', 'MailController@mail');
Route::post('sendemail', 'MailController@mail');
Route::post('sendnewsletter', 'MailController@sendnewsletter');
Route::post('send/email/contactus', 'MailController@mailcontactus');
Route::post('send/email/contact', 'MailController@mailcontactus');
