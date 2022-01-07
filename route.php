<?php

Route::set('index.php',function (){
    IndexController::CreateView('IndexView');
});
Route::set('advertisement',function (){
    AdvertisementController::CreateView('AdvertisementView');
});

Route::set('user',function (){
    UserController::CreateView('UserView');
});