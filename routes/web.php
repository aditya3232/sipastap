<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DilanPolresController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SkckOnlineController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormSidikJariController;
use App\Http\Controllers\FormSimController;
use App\Http\Controllers\FormLaporanKehilanganController;
use App\Http\Controllers\FormLaporanTindakKriminalController;
use App\Http\Controllers\FormLaporanPengaduanMasyarakatController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/login');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'role:admin,admin pendaftaran sidik jari,fresh']], function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/berita/create', [AdminController::class, 'index'])->name('berita.create');
});

// permissions
Route::group(['prefix' => 'admin/permissions', 'as' => 'admin.permissions.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/',[ PermissionController::class, 'index'])->name('index');
    Route::post('/datatable', [PermissionController::class, 'dataTable'])->name('datatable');
    Route::get('/create', [PermissionController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('edit');
    Route::post('/store', [PermissionController::class, 'store'])->name('store');
    Route::post('/update/{id}', [PermissionController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [PermissionController::class, 'destroy'])->name('destroy');
});

// roles
Route::group(['prefix' => 'admin/roles', 'as' => 'admin.roles.', 'middleware' => ['auth', 'role:admin,admin pendaftaran sidik jari']], function() {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::post('/datatable', [RoleController::class, 'dataTable'])->name('datatable');
    Route::get('/create', [RoleController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
    Route::post('/store', [RoleController::class, 'store'])->name('store');
    Route::post('/update/{id}', [RoleController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [RoleController::class, 'destroy'])->name('destroy');
    Route::post('/select2permissions/{id}', [RoleController::class, 'select2Permissions'])->name('select2permissions');
    Route::post('assignpermissions/{id}', [RoleController::class, 'assignPermissions'])->name('assignpermissions');
    Route::delete('/deletepermissions/{role_id}/{permission_id}', [RoleController::class, 'deletePermissions'])->name('deletepermissions');
});

// users
Route::group(['prefix' => 'admin/users', 'as' => 'admin.users.', 'middleware' => ['auth', 'role:admin,admin pendaftaran sidik jari']], function() {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::post('/datatable', [UserController::class, 'dataTable'])->name('datatable');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::post('/select2roles', [UserController::class, 'select2Roles'])->name('select2roles');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
});

// setting profile
Route::group(['prefix' => 'admin/profiles', 'as' => 'admin.profiles.', 'middleware' => ['auth']], function() {
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
    Route::post('/update', [ProfileController::class, 'update'])->name('update');
});

// dilanpolres home
Route::group(['prefix' => 'dilanpolres', 'as' => 'dilanpolres.'], function() {
    Route::get('/', [DilanPolresController::class, 'index'])->name('index');
    Route::get('/formsidikjari', [DilanPolresController::class, 'formSidikJari'])->name('formsidikjari');
});

// form sidik jari in dilanpolres
Route::group(['prefix' => 'dilanpolres/formsidikjari', 'as' => 'dilanpolres.formsidikjari.'], function() {
    Route::get('/create', [FormSidikJariController::class, 'create'])->name('create');
    Route::post('/store', [FormSidikJariController::class, 'store'])->name('store');
});

// form sidik jari in admin
Route::group(['prefix' => 'admin/formsidikjari', 'as' => 'admin.formsidikjari.', 'middleware' => ['auth', 'role:admin,admin pendaftaran sidik jari']], function() {
    Route::get('/', [FormSidikJariController::class, 'index'])->name('index');
    Route::post('/datatable', [FormSidikJariController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormSidikJariController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [FormSidikJariController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FormSidikJariController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FormSidikJariController::class, 'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [FormSidikJariController::class, 'pdf'])->name('pdf');
});

// form permohonan sim in dilanpolres
Route::group(['prefix' => 'dilanpolres/formsim', 'as' => 'dilanpolres.formsim.'], function() {
    Route::get('/create', [FormSimController::class, 'create'])->name('create');
    Route::post('/store', [FormSimController::class, 'store'])->name('store');
});

// form permohonan sim in admin
Route::group(['prefix' => 'admin/formsim', 'as' => 'admin.formsim.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [FormSimController::class, 'index'])->name('index');
    Route::post('/datatable', [FormSimController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormSimController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [FormSimController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FormSimController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FormSimController::class, 'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [FormSimController::class, 'pdf'])->name('pdf');
});

// form permohonan laporan kehilangan in dilanpolres
Route::group(['prefix' => 'dilanpolres/formlaporankehilangan', 'as' => 'dilanpolres.formlaporankehilangan.'], function() {
    Route::get('/create', [FormLaporanKehilanganController::class, 'create'])->name('create');
    Route::post('/store', [FormLaporanKehilanganController::class, 'store'])->name('store');
});

// form permohonan laporan kehilangan in admin
Route::group(['prefix' => 'admin/formlaporankehilangan', 'as' => 'admin.formlaporankehilangan.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [FormLaporanKehilanganController::class, 'index'])->name('index');
    Route::post('/datatable', [FormLaporanKehilanganController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormLaporanKehilanganController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [FormLaporanKehilanganController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FormLaporanKehilanganController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FormLaporanKehilanganController::class, 'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [FormLaporanKehilanganController::class, 'pdf'])->name('pdf');
});

// form permohonan laporan tindak kriminal in dilanpolres
Route::group(['prefix' => 'dilanpolres/formlaporantindakkriminal', 'as' => 'dilanpolres.formlaporantindakkriminal.'], function() {
    Route::get('/create', [FormLaporanTindakKriminalController::class, 'create'])->name('create');
    Route::post('/store', [FormLaporanTindakKriminalController::class, 'store'])->name('store');
});

// form permohonan laporan tindak kriminal in admin
Route::group(['prefix' => 'admin/formlaporantindakkriminal', 'as' => 'admin.formlaporantindakkriminal.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [FormLaporanTindakKriminalController::class, 'index'])->name('index');
    Route::post('/datatable', [FormLaporanTindakKriminalController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormLaporanTindakKriminalController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [FormLaporanTindakKriminalController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FormLaporanTindakKriminalController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FormLaporanTindakKriminalController::class, 'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [FormLaporanTindakKriminalController::class, 'pdf'])->name('pdf');
});

// form permohonan laporan pengaduan masyarakat in dilanpolres
Route::group(['prefix' => 'dilanpolres/formlaporanpengaduanmasyarakat', 'as' => 'dilanpolres.formlaporanpengaduanmasyarakat.'], function() {
    Route::get('/create', [FormLaporanPengaduanMasyarakatController::class, 'create'])->name('create');
    Route::post('/store', [FormLaporanPengaduanMasyarakatController::class, 'store'])->name('store');
});

// form permohonan laporan pengaduan masyarakat in admin
Route::group(['prefix' => 'admin/formlaporanpengaduanmasyarakat', 'as' => 'admin.formlaporanpengaduanmasyarakat.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [FormLaporanPengaduanMasyarakatController::class, 'index'])->name('index');
    Route::post('/datatable', [FormLaporanPengaduanMasyarakatController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormLaporanPengaduanMasyarakatController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [FormLaporanPengaduanMasyarakatController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FormLaporanPengaduanMasyarakatController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FormLaporanPengaduanMasyarakatController::class, 'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [FormLaporanPengaduanMasyarakatController::class, 'pdf'])->name('pdf');
});

// form permohonan laporan permohonan skck in dilanpolres
Route::group(['prefix' => 'dilanpolres/formskck', 'as' => 'dilanpolres.formskck.'], function() {
    Route::get('/create', [FormSkckController::class, 'create'])->name('create');
    Route::post('/store', [FormSkckController::class, 'store'])->name('store');
});

// form permohonan laporan permohonan skck in admin
Route::group(['prefix' => 'admin/formskck', 'as' => 'admin.formskck.', 'middleware' => ['auth', 'role:admin']], function() {
    Route::get('/', [FormSkckController::class, 'index'])->name('index');
    Route::post('/datatable', [FormSkckController::class, 'dataTable'])->name('datatable');
    Route::get('/detail/{id}', [FormSkckController::class, 'detail'])->name('detail');
    Route::get('/edit/{id}', [FormSkckController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [FormSkckController::class, 'update'])->name('update');
    Route::delete('/destroy/{id}', [FormSkckController::class, 'destroy'])->name('destroy');
    Route::get('/pdf/{id}', [FormSkckController::class, 'pdf'])->name('pdf');
});

require __DIR__.'/auth.php';