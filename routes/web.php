<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    return view('welcome');
});

Route::get('/get_quotes', function () {
    $quotes=array();
    
    for($i=0; $i < 5; $i++){
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('https://api.kanye.rest/')->getBody();
        $quote = json_decode($request,true);
        $quote = $quote['quote'];
        $quotes[] = $quote;
    }
 
    return response()->json($quotes);
});
