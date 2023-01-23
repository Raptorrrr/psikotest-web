<?php

use App\Http\Controllers\DetailCFIT;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryTestController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionChoiceController;
use App\Http\Controllers\UserAnswerController;
use App\Http\Controllers\UserController;

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
    return redirect()->route('dashboard');
});

Auth::routes();

Route::get('/dashboard', 'App\Http\Controllers\HomeController@index')->name('dashboard');

//User
Route::group(['middleware' => ['auth', 'role:' . \App\Models\User::ROLE_PARTICIPANT]], function () {
    Route::get('test/{slug}/{session}/intro', [UserAnswerController::class, 'intro'])->name('test.intro');
    Route::get('test/{slug}/{session}', [UserAnswerController::class, 'index'])->name('test.index');
    Route::get('test/finish', [UserAnswerController::class, 'finish'])->name('test.finish');
    Route::post('test/{slug}/{session}', [UserAnswerController::class, 'store'])->name('test.store');
});

//Admin
Route::group(['middleware' => ['auth', 'role:' . \App\Models\User::ROLE_ADMIN]], function () {
    Route::get('history-test', [HistoryTestController::class, 'index'])->name('history-test.index');

    Route::prefix('history-test/detail')->name('history-test.detail.')->group(function () {
        Route::get('cfit/{user}', [HistoryTestController::class, 'detailCFIT'])->name('cfit');
        Route::get('skb/{user}', [HistoryTestController::class, 'detailSKB'])->name('skb');
        Route::get('epps/{user}', [HistoryTestController::class, 'detailEPPS'])->name('epps');
    });

    Route::prefix('setting')->name('setting.')->group(function () {
        // Type
        Route::prefix('type')->name('type.')->group(function () {
            Route::get('', [TypeController::class, 'index'])->name('index');
            Route::post('', [TypeController::class, 'store'])->name('store');
            Route::put('{type}', [TypeController::class, 'update'])->name('update');
            Route::delete('{type}', [TypeController::class, 'destroy'])->name('destroy');
        });

        // Session
        Route::prefix('session')->name('session.')->group(function () {
            Route::get('', [SessionController::class, 'index'])->name('index');
            Route::post('', [SessionController::class, 'store'])->name('store');
            Route::put('{session}', [SessionController::class, 'update'])->name('update');
            Route::delete('{session}', [SessionController::class, 'destroy'])->name('destroy');
        });

        // Question
        Route::prefix('{session}/question')->name('question.')->group(function () {
            Route::get('', [QuestionController::class, 'index'])->name('index');
            Route::get('create', [QuestionController::class, 'create'])->name('create');
            Route::post('', [QuestionController::class, 'store'])->name('store');
            Route::get('{question}', [QuestionController::class, 'edit'])->name('edit');
            Route::put('{question}', [QuestionController::class, 'update'])->name('update');
            Route::delete('{question}', [QuestionController::class, 'destroy'])->name('destroy');
        });

        // Question Choice
        Route::prefix('{session}/question/{question}/choice')->name('question.choice.')->group(function () {
            Route::get('', [QuestionChoiceController::class, 'index'])->name('index');
            Route::post('', [QuestionChoiceController::class, 'store'])->name('store');
            Route::put('{questionChoice}', [QuestionChoiceController::class, 'update'])->name('update');
            Route::delete('{questionChoice}', [QuestionChoiceController::class, 'destroy'])->name('destroy');
        });

        //User Management
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('', [UserController::class, 'index'])->name('index');
            Route::post('', [UserController::class, 'store'])->name('store');
            Route::put('{user}', [UserController::class, 'update'])->name('update');
            Route::delete('{user}', [UserController::class, 'destroy'])->name('destroy');
        });
    });
});
