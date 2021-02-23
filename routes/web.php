<?php
use App\Address;
use App\User;
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

Route::get('/user', function(){

    $users = User::all();

    return view('users.index', compact('users', $users));
});

// Create address for a user via one to one relationship

/*Route::get('/user/create', function(){
    $user = factory(User::class)->create();
        $user->address()->create(
            [
            'country' => 'IVORY COAST'
            ]
        );
});
*/

Route::get('/user/create', function(){
    $user = factory(User::class)->create();
        $address = new Address([
            'country' => 'MAROC'
        ]);
        $address->user()->associate($user);
        $address->save();
});

Route::get('/addresses', function(){
    $users = User::with('addresses')->get();
    $users[0]->addresses()->create([
        'country' => 'IVORY COAST'
    ]);
    return view('users.index', compact('users', $users));
});

Route::get('/country', function(){
    $addresses = Address::all();

    return view('addresses.index', compact('addresses', $addresses));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
