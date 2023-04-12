<?php
use Illuminate\Support\Facades\Route;

Route::get('Project', function(){
    echo "Hello  packages";

});

// Route::get('reg',[Curd\Project\curdcontroller::class,'log']);
Route::post('register',[Curd\Project\curdcontroller::class,'store']);

Route::get('hlo', function(){
    return view('Project::register');

});
Route::get('show',[Curd\Project\curdcontroller::class,'show']);
Route::get("delete/{id}",[Curd\Project\curdcontroller::class,'delete']);
Route::get("edit/{id}",[Curd\Project\curdcontroller::class,'edit']);
Route::get("view/{id}",[Curd\Project\curdcontroller::class,'view']);
Route::post("update",[Curd\Project\curdcontroller::class,'update']);
