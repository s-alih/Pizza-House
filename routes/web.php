<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/pizzas',function () {
    $pizzas = [
        ['type'=> 'hawalian',
            'base' => 'cheese' ,
            'price' => 19,
        ],
        ['type'=> 'Fooding',
            'base' => 'cheese' ,
            'price' => 19,
        ],
        ['type'=> 'hawalian',
            'base' => 'cheese' ,
            'price' => 19,
        ],
    ];
    return view('pizza',['pizzas' => $pizzas]);
    
});
