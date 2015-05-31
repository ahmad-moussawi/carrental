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
$app->group(['prefix' => 'admin'], function($app)
{
    $app->get('users', function()
    {
        // Matches The "/admin/users" URL
    });
});


$app->get('/', function() use ($app) {
    return view('home');
});

$app->get('/about', function(){
	return view('about');
});

$app->get('/customer/signin', function(){
	return view('signin');
});


$app->get('/customer/signout', function(){
	Session::flush();
	Session::regenerate();
	return redirect('/');
});

$app->post('/customer/signin', function(){
	
	$username = Request::input('username');
	$password = Request::input('password');

	// here we should validate the username/password

	$user = DB::table('customers')
		->where('username', $username)
		->where('password', $password)
		->first();

	if(!$user){
		return view('signin', [
			'error' => 'Wrong username/password'
			]);
	}


	Session::put('user', $user);

	return redirect('/');

});



$app->get('/reservation', ['middleware' => 'customer', function() use ($app) {

	$user = Session::get('user');

	// for more info check http://laravel.com/docs/5.0/queries
	$data = DB::table('reservations')
		->where('customer_id', $user->id )
		->orderBy('date', 'DESC')
		->join('cars', 'cars.id', '=', 'reservations.car_id')
		->join('models', 'models.id', '=', 'cars.model_id')
		->join('brands', 'brands.id', '=', 'models.brand_id')
		->select([
			'reservations.*',
			'cars.color',
			DB::raw('CONCAT(brands.name, " ", models.name, " ", cars.year) as car')
		])
		// ->where('cars.id', '>', '20')
		->get();


    return view('reservation', [
    	'data' => $data
    	]);
}]);
