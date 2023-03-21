<?php

use App\Http\Controllers\SelectController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Documentation\AddParamAndRequest;
use App\Http\Livewire\Drug\Create;
use App\Http\Livewire\Drug\Index;
use App\Http\Livewire\Lab\Create as LabCreate;
use App\Http\Livewire\Lab\Index as LabIndex;
use App\Models\Immunization;
use App\Models\Familyplanning;
use App\Models\Pregnantmom;
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

$list_menu = [
    'lab' => 'lab',
    'drug' => 'obat',
    'patient' => 'pasien',
    'medicalrecord' => 'rekam-medis',
    'user' => 'user',
    'room' => 'ruangan',
    'diagnosis' => 'diagnosis',
    'queue' => 'antrian',
    'service' => 'layanan',
    'pregnantmom' => 'ibu-hamil',
    'familyplanning' => 'keluargaberencana',
    'immunization' => 'imunisasi',
    'bpjs' => 'bpjs',
    'documentation' => 'dokumentasi',
    'parameter' => 'parameter',
    'response' => 'response'
];


Route::middleware(['auth:web'])->group(function () use ($list_menu) {
    Route::get('/show/{immunization}', \App\Http\Livewire\Immunization\Show::class)->name('immunization.show');
    Route::get('/show/{pregnantmom}', \App\Http\Livewire\Pregnantmom\Show::class)->name('pregnantmom.show');
    Route::get('/dokumentasi_api', [\App\Http\Controllers\DokumentasiController::class,'index'])->name('dokumentasi_api');

    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    // Route::get('antrian/process/{pendaftaran}', \App\Http\Livewire\Queue\Process::class)->name('queue.process');
    Route::get('antrian/process/{queue}', \App\Http\Livewire\Queue\Process::class)->name('queue.process');
    Route::get('dokumentasi/add-params-and-request/{doc}', AddParamAndRequest::class)->name('doc.add-param');
    Route::get('antri/obat', \App\Http\Livewire\Queue\Drug::class)->name('queue.drug');
    Route::get('antri/obat/process/{queue}', \App\Http\Livewire\Drug\Process::class)->name('queue.drug.process');

    foreach ($list_menu as $key => $menu) {
        $name = ucfirst($key);
        $component = "App\\Http\\Livewire\\$name";
        Route::prefix($menu)->name("$key.")->group(function () use ($key, $component) {
            if (@class_exists("$component\\Index")) {
                Route::get('/', "$component\\Index")->name('index');
            }
            if (@class_exists("$component\\Create")) {
                Route::get('/create', "$component\\Create")->name('create');
            }
            if (@class_exists("$component\\Update")) {
                Route::get('/update/{' . $key . '}', "$component\\Update")->name('update');
            }
        });
    }
});
Route::get('login', \App\Http\Livewire\Auth\Login::class)->name('login');
Route::group(['prefix' => 'select'], function () {
    Route::get('doctor', [SelectController::class, 'doctor'])->name('select.doctor');
    Route::get('service', [SelectController::class, 'service'])->name('select.service');
    Route::get('parameter', [SelectController::class, 'parameter'])->name('select.parameter');
    Route::get('response', [SelectController::class, 'response'])->name('select.response');
});

// Route::get('/greet', 'UserController@greet');
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Route generator
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')
   ->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')
   ->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')
   ->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')
   ->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')
   ->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')
   ->name('io_generator_builder_generate_from_file');



// Route::get('/tab1', function() {
//     return view('dokumentasi_api.index');
// });

// Route::get('/tab2', function() {
//     return view('dokumentasi_api.index');
// });
// Route::get('/tab3', function() {
//     return  view('dokumentasi_api.index');
// });


// Route::get('/app', [DokumentasiController::class, 'app']);
