<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;
use App\Supplier;
use App\mahasiswa_hobi;
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
Route::get('relasi-1',function(){
    $mahasiswa = Mahasiswa::where('nim','=','1015015072')->first();
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function() {
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();
    return $mahasiswa->dosen->nama;

});

	Route::get('relasi-3', function() {
		$dosen = Dosen::where('nama', '=', 'Yulianto')->first();
		foreach ($dosen->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
    });
    

    Route::get('relasi-4', function() {
		$novay = Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();
		foreach ($novay->hobi as $temp) 
			echo "<li> . $temp->hobi . </li>";
    });
    

    Route::get('relasi-5', function() {
		$mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();
		foreach ($mandi_hujan->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';

    });
    
    Route::get('eloquent', function() {
		$mahasiswa = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
		return View::make('eloquent', compact('mahasiswa'));
	});

	Route::	resource('dosen','DosenController');
	Route::	resource('hobi','HobiController');
	Route::	resource('mahasiswa','MahasiswaController');
	Route::	resource('wali','WaliController');
	Route::	resource('minuman','MinumanController');
	Route::	resource('supplier','SupplierController');
	Route::	resource('makanan','MakananController');
	Route::	resource('customer','CustomerController');
	Route::	resource('biodata','BiodataController');

	//admin
		Route::group(
			['prefix' => 'admin','middleware' =>['auth']],
			function () {
				Route::get('/', function () {
					return view('admin.index');
				});
				Route::resource('kategori','KategoriController');
				Route::resource('tag','TagController');
				Route::resource('artikel','ArtikelController');
			}
		);

		Route::group(
			['prefix' => '/'],
			function () {
				Route::get('/', 'FrontendController@index')->name('index');
				Route::get('/about', function(){
					return view('frontend.about');
				});
				Route::get('/contact', function(){
					return view('frontend.contact');
				});
				Route::get('/blog', 'FrontendController@allblog')->name('all.blog');
				Route::get('/blog/{artikel}', 'FrontendController@detailblog')->name('detail.blog');
				Route::get('/blog/kategori/{cat}', 'FrontendController@blogcat')->name('cat.blog');
				Route::get('/blog/tag/{tag}', 'FrontendController@blogtag')->name('tag.blog');
			}
			);

		

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
