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
Route::resource('entreprise','EntrepriseController');
Route::resource('offres','OffreController');
Route::delete('offres/force/{offre}', 'OffreController@forceDestroy')->name('offres.force.destroy');
Route::put('offres/restore/{offre}', 'OffreController@restore')->name('offres.restore');

//genealabs hethi jarabt'ha
Route::get('/', function(){
        $config = array();
        $config['center'] = 'auto';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';

        app('map')->initialize($config);

        // set up the marker ready for positioning
        // once we know the users location
        $marker = array();
        app('map')->add_marker($marker);

        $map = app('map')->create_map();
        echo "<html><head><script>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";
});

Route::get('/maps','Controller@maps');




Route::get('/candidat',function(){
    return view('candidat');
});
Route::get('/entreprise/liste-offres',function(){
    return view('offres');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
