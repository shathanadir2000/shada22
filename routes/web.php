 <?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

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

Route::get('/',[TaskController::class,'index'])->name('task.index');
Route::get('/tasks/{id}',[TaskController::class,'show'])->name('task.show');
Route::post('/tasks/store',[TaskController::class,'store'])->name('task.store');
Route::Delete('delete/{id}',[TaskController::class,'destroy'])->name('task.delete');
Route::put('edit/{id}',[TaskController::class,'showData'])->name('task.edit');
Route::patch('update/{id}',[TaskController::class, 'update'])-> name('task.update');