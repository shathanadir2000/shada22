 <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;

 Route::get('/', function(){
    return view('welcome');
 });
 Route::get('aboute', function(){
      $name = request('name');
     return view('aboute', compact('name'));
 });
 Route::post('store', function(){
    $name = request('name');
    return view('aboute', compact('name'));
});
Route::get('tasks', function(){
    $tasks = ['task1 ', 'task2','task3'];
    return view('tasks', compact('tasks'));
});
Route::get('show/{id}', function($id){
    $tasks = ['task1 ', 'task2','task3'];
       $task = $tasks[$id];
    return view('show', compact('task'));
});

Route::get('/',[TaskController::class,'index'])->name('tasks');
Route::get('/tasks/{id}',[TaskController::class,'show'])->name('show');
Route::post('store',[TaskController::class,'store'])->name('store');
Route::get('delete/{id}',[TaskController::class,'destroy'])->name('show');
Route::get('edit/{id}',[TaskController::class,'showData'])->name('show');
Route::post('edit/',[TaskController::class,'update'])->name('show');