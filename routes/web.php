<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('homayat', function () {
    $name = 'Ayat abu qasme';
    return view('homayat', compact('name'));
});

Route::post('send', function (Request $request) {
    $name = $request->name;
    return view('homayat', compact('name'));
});



Route::get('task', function () {
    $tasks = [
        '1'  => 'task 1',
        '2'  => 'task 2',
        '3'  => 'task 3',
        '4'  => 'task 4'

    ];
    return view('task', compact('tasks'));
});

Route::get('task/show/{id}', function ($id) {
    $tasks = [
        '1'  => 'task 1',
        '2'  => 'task 2',
        '3'  => 'task 3',
        '4'  => 'task 4'
    ];

    $task = $tasks[$id];
    return view('show', compact('task'));
});



Route::get('tasks', function () {
    $tasks = DB::table('tasks')->get();
    //dd($tasks);
    return view('tasks', compact('tasks'));
});



Route::get('task/Show1/{id}', function ($id) {

    $task = DB::table('tasks')->find($id);
    // dd($task);
    return view('Show1', compact('task'));
});


Route::get('todo', function () {
  //  $tasks = DB::table('tasks')->orderBy('title',"asc")->get();

  $tasks = Task::all();

    return view('todo', compact('tasks'));
});



Route::post('store', function (Request $request)  {
    // DB::table('tasks')->insert([
    //        'title' => $request->title]);

    $task = new Task();
    $task ->title = $request->title;
    $task->save();

  return redirect()->back();
});



Route::post('delete/{task}', function ($task)  {
    Task::where('title', $task) -> delete();
    return redirect()->back();

    });
