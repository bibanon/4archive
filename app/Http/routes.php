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

$app->group(['namespace' => '\App\Http\Controllers'], function() use ($app)
{

    $app->get('/archive', function()
    {
        return view('home');
    });
    
    $app->get('/archive/faq', function()
    {
        return view('faq');
    });
    
    /*$app->get('/archive/donate', function()
    {
        return view('donate');
    });*/
    
    $app->get('/archive/terms', function()
    {
        return view('terms');
    });
    
    $app->get('/archive/takedown', ['uses' => 'TakedownController@form']);
    $app->post('/archive/takedown', ['uses' => 'TakedownController@submit']);

    $app->get('/{board}/thread/{thread_id}', ['uses' => 'ThreadController@view']);

    // Api Routes
    $app->get('archive/api/threads/latest/{page}/{board}', ['uses' => 'ApiController@latestThreads', 'as' => 'latest_threads_api']);
  //  $app->get('archive/api/threads/popular/{page}/{board}', ['uses' => 'ApiController@popularThreads', 'as' => 'popular_threads_api']);
    $app->get('archive/api/stats', ['uses' => 'ApiController@statistics', 'as' => 'statistics']);
    $app->post('archive/api/archive', ['uses' => 'ApiController@archive', 'as' => 'archive_api']);

});