<?php


use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\SalaryPayController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /**
     * Route resources are used for employee CRUD operations
     */
    Route::resources(['employees' => EmployeeController::class]);
    Route::get('/employee/search', [EmployeeController::class, 'searchemployee'])->name('employee.search');

    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('/payments/approve', [PaymentController::class, 'approve'])->name('payments.approve');
    Route::post('payments/approve/{id}', [PaymentController::class, 'approve'])->name('payments.approve');


    Route::get('/salary', [SalaryController::class, 'index'])->name('salary.index');
    Route::get('/salary/create', [SalaryController::class, 'create'])->name('salary.create');
    Route::post('/salary', [SalaryController::class, 'store'])->name('salary.store');
});

require __DIR__ . '/auth.php';
