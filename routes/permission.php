<?php

use App\Http\Controllers\Permission\PermissionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'permission', 'middleware'=>['permission', 'auth']], function(){
    Route::get('', [PermissionController::class, 'viewRole'])->name('viewRole');
    Route::get('setting', [PermissionController::class, 'settingRole'])->name('settingRole');
    Route::post('savePermission', [PermissionController::class, 'savePermission'])->name('savePermission');
});