<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@index');



Route::get('/WalkingRoute',function(){
   $walkingRoute = App\WalkingRoute::all();
    print_r($walkingRoute);
});
Route::get('/Task',function(){

    $task = App\Task::find(1);
    print_r($task);
});

//Route::get('/hello/{name}', function ($name) {
//    echo ('you are in hello '. $name);
//});
//
//Route::post('test',function(){
//   echo 'POSTED';
//});
//
//
//Route::get('test',function(){
//    echo '<form action="test" method="POST">';
//    echo '<input type="submit" value="Send">';
//    echo '<input type="hidden" name="_token" value="' . csrf_token() . '">';
//    echo '<input type="hidden" name="_method" value="DELETE">';
//    echo '</form>';
//});
//
//
//Route::put('test',function(){
//    echo 'PUT';
//});
//
//Route::delete('test',function(){
//    echo 'DELETE';
//});