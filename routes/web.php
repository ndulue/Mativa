<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [
    'uses' => 'IndexController@getSlider',
    'as' => 'slider.index'
]);

Route::post('/', [
'uses' => 'IndexController@getBooking',
'as' => 'index.booking'
]);


Route::get('/rooms', [
    'uses' => 'RoomsController@getRooms',
    'as' => 'room.index'
]);

Route::post('/rooms',[
    'uses' => 'RoomsController@getBooking',
    'as' => 'booking.room'
]);

Route::get('/room-detail/{title}', [
    'uses' => 'RoomDetailController@getRoomDetail',
    'as' => 'room-detail.index'
]);


Route::get('/about', [
    'uses' => 'aboutController@getabout',
    'as' => 'about.index'
]);

Route::get('/activities', [
    'uses' => 'activitiesController@getactivities',
    'as' => 'activities.index'
]);
Route::get('/spa', [
    'uses' => 'spaController@getspa',
    'as' => 'spa.index'
]);

Route::post('/room-detail',[
    'uses' => 'RoomsController@getBooking',
    'as' => 'booking.room'
]);

Route::get('/restaurant', [
    'uses' => 'RestaurantController@getMenu',
    'as' => 'restaurant.index'
]);

Route::get('/checkout', [
    'uses' => 'CheckoutController@getCheckout',
    'as' => 'checkout.index'
]);

Route::post('/checkout', [
    'uses' => 'CheckoutController@store',
    'as' => 'checkout.store'
]);

Route::get('/thank-you', [
    'uses' => 'ThankyouController@thankyou',
    'as' => 'thankyou.index'
]);


