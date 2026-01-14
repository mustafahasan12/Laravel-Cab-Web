<?php

use App\Http\Controllers\Taxi_ManifestController;
use Illuminate\Support\Facades\Route;
use App\Taxi_Manifest;

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

    return view('admin.index');
});

Route::get('/add_vehicle','VehicleController@create')->name('add_vehicle');
Route::get('/vehicle_list','VehicleController@list')->name('vehicle_list');
Route::post('/vehicle_store','VehicleController@store')->name('vehicle_store');
Route::get('/vehicle_edit/{id}','VehicleController@edit')->name('vehicle_edit');
Route::post('/vehicle_update/{id}','VehicleController@update')->name('vehicle_update');
Route::get('/vehicle_delete/{id}','VehicleController@delete')->name('vehicle_delete');



Route::get('/pace_rides','Taxi_ManifestController@index')->name('pace_rides');

Route::post('/import', 'Taxi_ManifestController@import')->name('taxi_manifest_import');


Route::get('/export', 'Taxi_ManifestController@export')->name('taxi_manifest_export');


Route::get('/driver/create','DriverController@create')->name('driver.create');
Route::get('/driver/list','DriverController@list')->name('driver_list');
Route::post('/driver/store','DriverController@store')->name('driver.store');
Route::get('/driver_edit/{id}','DriverController@edit')->name('driver_edit');
Route::post('/driver/edit/{id}','DriverController@update')->name('driver.edit');
Route::get('/driver/delete/{id}','DriverController@delete')->name('driver.delete');



Route::get('/driver/count', 'Taxi_ManifestController@driverCount')->name('taxi_manifest_driver_count');

Route::get('/schedule/create/{id}','ScheduleController@create')->name('schedule.create');
Route::get('/schedule/view/{id}','ScheduleController@show')->name('schedule.view');
Route::get('/schedule/list','ScheduleController@list')->name('schedule.list');
Route::post('/schedule/store/{id}','ScheduleController@store')->name('schedule.store');
Route::post('/schedule/update/{id}','ScheduleController@update')->name('schedule.update');
Route::post('/schedule/edit/{id}','ScheduleController@edit')->name('schedule.edit');
Route::get('/schedule/duplicate/{id}','ScheduleController@duplicate')->name('schedule.duplicate');

// Route::get('/schedule/{id}/current','ScheduleController@edit')->name('schedule.current.edit');
// Route::post('/schedule/{id}/current','ScheduleController@update')->name('schedule.current.update');
Route::get('/schedule/list/currents','ScheduleController@currentList')->name('schedule.current.list');



Route::get('member/create','MemberController@create')->name('member.create');
Route::get('member/list','MemberController@index')->name('member.list');
Route::post('member/store','MemberController@store')->name('member.store');
Route::get('member/{id}/editsole','MemberController@editsole')->name('member.sole.edit');
Route::get('member/{id}/delete','MemberController@delete')->name('member.delete');
Route::post('member/{id}/soleupdate','MemberController@soleupdate')->name('member.sole.update');
Route::get('member/{id}/editcorporation','MemberController@editcorporation')->name('member.corporation.edit');
Route::post('member/{id}/corporationupdate','MemberController@corporationupdate')->name('member.corporation.update');



Route::get('member/assign_corp_medallion/{id}', 'AssignMedallionController@index')->name('member.assign_medallion');
Route::post('member/addassigncorpmedallion','AssignMedallionController@add')->name('member.add.assignmedallion');

Route::post('/myajax/{id}','MemberController@corpajax');



Route::get('medallion/list','MedallionNumberController@index')->name('medallion.list');
Route::get('medallion/create','MedallionNumberController@create')->name('medallion.create');
Route::post('medallion/add','MedallionNumberController@addmedallion')->name('medallion.add');
Route::get('medallion/edit/{id}','MedallionNumberController@edit')->name('medallion.edit');
Route::get('medallion/delete/{id}','MedallionNumberController@delete')->name('medallion.delete');
Route::post('medallion/update/{id}','MedallionNumberController@update')->name('medallion.update');



Route::get('tools/rates/list', 'RatesController@index')->name('tools.rates.list');
Route::get('tools/rates/add','RatesController@create')->name('tools.rates.add');
Route::post('rates/add','RatesController@addrate')->name('rates.add');
Route::get('tools/rates/edit/{id}','RatesController@edit')->name('tools.rates.edit');
Route::get('tools/rates/delete/{id}','RatesController@delete')->name('tools.rates.delete');
Route::post('rates/edit/{id}','RatesController@editrate')->name('rates.edit');

Route::get('tools/charges/list', 'ChargesController@index')->name('tools.charges.list');
Route::get('tools/charges/add','ChargesController@create')->name('tools.charges.add');
Route::post('charges/add','ChargesController@addcharge')->name('charges.add');
Route::get('tools/charges/delete/{id}','ChargesController@delete')->name('tools.charges.delete');
Route::get('tools/charges/edit/{id}','ChargesController@edit')->name('tools.charges.edit');
Route::post('charges/edit/{id}','ChargesController@editcharge')->name('charges.edit');

Route::get('tools/prices/list', 'PricesController@index')->name('tools.prices.list');
Route::get('tools/prices/add','PricesController@create')->name('tools.prices.add');
Route::post('prices/add','PricesController@addprice')->name('prices.add');
Route::get('tools/prices/delete/{id}','PricesController@delete')->name('tools.prices.delete');
Route::get('tools/prices/edit/{id}','PricesController@edit')->name('tools.prices.edit');
Route::post('prices/edit/{id}','PricesController@editprice')->name('prices.edit');


Route::get('member/corp/list', 'CorporationController@index')->name('member.corp.list');
Route::get('member/corp/add/{id}','CorporationController@create')->name('member.corp.add');
Route::post('corp/add','CorporationController@addcorp')->name('corp.add');
Route::get('member/corp/edit/{id}','CorporationController@editcorp')->name('member.corp.edit');
Route::post('member/edit/{id}','CorporationController@updatecorp')->name('corp.edit');
Route::get('member/corporation/delete/{id}','CorporationController@delete')->name('member.corp.delete');




Route::get('migrate',function(){
    return Artisan::call('migrate');
});

Route::get('ajax/redirect',function(Request $request){
    return redirect()->route($request->redirect)->with('message',$request->message)->with('class',$request->class);
})->name('ajax.redirect');
