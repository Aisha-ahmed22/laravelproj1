
<?php

use Illuminate\Support\Facades\Route;
define('PAGINATION_LIMIT' , 5);         //OFFSET =5

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index');

Route::get('first', function(){
    return 'first route in laravel';
});

Route::get('productDetails/{id}' , function(){  //route will not work without adding the id or variable between {}
    return 'product details page';

});

//optional
Route::get('optionalProduct-{id?}', function(){

        return 'optional id';
})-> name ('a');//3shan anady 3la rout mo3ayyan zay nickname


//('url aw name of route','method elly httnfez mn controller page')

Route::get('productIndex', 'productsController@index')->middleware('auth');//elroute auth lma ad5ol 3leeha mn 3eer ma a3mel login fhatwadeeny 3la route login

Route::get('login', function()
{
    return'you are not logged in';
})->name('login');


//2wel middleware(lazem login:l guard admins only hma elly y5osho 3la kol elroutes de)
Route::namespace('products')->middleware('auth')->group(function(){   // mgmo3et controllers htabba2 3leeha 7aga
    Route::get('productsOffers', 'productsOffers@listOffers');
    Route::get('offer-Details', 'productsOffers@offerDetails');

//-----------------start products route
    Route::get('Products.List', 'productsController@listProducts')->name('list_product');
    Route::get('Products.Create', 'productsController@Create')->name('create_product');
    Route::Post('Products.Insert', 'productsController@insertProduct')->name('insert_product');
    Route::get('Products.Edit/{product_id}', 'productsController@editProduct')->name('edit_product');
    Route::Post('Products.Update', 'productsController@updateProduct')->name('update_product');
    Route::get('Products.Delete/{product_id}', 'productsController@deleteProduct')->name('delete_product');
    Route::get('ReadProduct/{product_id}', 'productsController@readProduct')->name('read_product');
    
    //-----------------end products route
});

//laravel 8 
//Route::get('productIndex', [productsController::class, 'index'])
//laravel 7
//Route::get('productIndex', 'productsController@index')

Route::resource('MyNews' , 'News');//



//-----------home routes

Route::get('HomePage', 'HomeController@index')->name('HomePage');


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@home')->name('home');//->middleware('verified');


Route::get('/Age', 'AgesController@ageCheck')->middleware('NewCheck');


//admin route
Route::get('AdminLogin', 'AdminsLogin@adminLoginForm');
Route::post('AdminLogin', 'AdminsLogin@adminDoLoginForm')->name('Admin_Do_Login');

//web routes
Route::get('/KidsGirl', 'WebController@index')->name('kids_girl');
Route::get('Home', 'WebController@index');
Route::get('CatProducts/{category_id}', 'WebController@categoryProducts')->name('cat_products');
Route::get('ContactUs', 'ContactUsController@index')->name('contact_us');
Route::get('Location', 'WebController@Location')->name('Location');
//carousel controller
Route::get('carousel', 'carouselController@carousel');
Route::get('CreateCarousel', 'carouselController@createCarousel')->name('create_carousel');
Route::Post('InsertCarousel', 'carouselController@insertCarousel')->name('insert_carousel');


//Relation routes
Route::get('UserRel','RelationsController@user_details');

Route::get('AddressRel','RelationsController@address_details');
Route::get('UserSonRel','RelationsController@User_sons');

Route::get('productsCountriesRel','RelationsController@products_countries');

//cart routes

Route::get('about' , 'productsController@countUser');
 
 Route::get('index', 'productsController@index')->name('index');
 Route::get('cart', 'productsController@cart')->name('cart');
 
 Route::get('add-to-cart/{product_id}', 'productsController@addToCart');

Route::patch('update-cart', 'productsController@update');
Route::delete('remove-from-cart','productsController@remove');


Route::get('store','productsController@store')->name('store');

Route::get('checkout/{total}','productsController@checkout')->name('cart.checkout');
Route::post('/charge', 'productsController@charge')->name('cart.charge');

