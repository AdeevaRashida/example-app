<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/hello', function () {
    $dataArray = [
        'message' => 'Hello, World'
    ];
    // return response()->json($dataArray);
    ddd($dataArray);
});

Route::get('/hi', function () {
    return response()->json([
        'pesan' => 'Hi World'
    ]);
});

Route::get('/tasks/{param}', [TaskController::class, 'show']);

Route::get('/tasks/', [TaskController::class, 'index']);

Route::post('/tasks', [TaskController::class, 'store']);

Route::put('/tasks/{key}', [TaskController::class, 'update']);

Route::delete('tasks/{key}', [TaskController::class, 'destroy']);





// //Route Paramater
// Route::get('/tasks/{param}', function ($param) use($taskList){
//     return $taskList[$param];
// });

// Route::get('/tasks/', function () use($taskList){
//     if(request()->search){
//         return $taskList[request()->search];
//     }
//     return $taskList;
// });

// Route::post('/tasks', function () use($taskList){
//     //return request()->all()
//     $taskList[request()->label] = request()->task;
//     return $taskList;
// });

// //mengupdate data
// Route::put('/tasks/{key}', function ($key) use($taskList){
//     $taskList[$key] = request()->task;
//     return $taskList;
// });

// //mengupdate data
// Route::patch('/tasks/{key}', function ($key) use($taskList){
//     $taskList[$key] = request()->task;
//     return $taskList;
// });

// Route::delete('/tasks/{key}', function ($key) use($taskList){
//     unset($taskList[$key]);
//     return $taskList;
// });