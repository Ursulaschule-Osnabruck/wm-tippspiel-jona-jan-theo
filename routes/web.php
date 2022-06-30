<?php

use Illuminate\Support\Facades\Route;
use App\Models\Spiel;
use App\Models\Mannschaft;
use App\Models\User;

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
    $spiele = Spiel::paginate(6);
    $mannschaften = Mannschaft::all();

    $sortedUser = collect(User::all())->sortBy('punkte')->toArray();
    //dd($sortedUser);

    $res = array(
        'spiele' => $spiele,
        'mannschaften' => $mannschaften,
        'sortedUser' => $sortedUser,
    );

    return view('home', ['res' => $res]);
});

Route::get('home', function () {
    return view('home');
});

Route::get('spielplan', function () {
    return view('spielplan');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();


