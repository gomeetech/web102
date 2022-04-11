<?php

use App\Http\Controllers\Admin\General\FileController;
use Illuminate\Support\Facades\Route;

$controller = FileController::class;

admin_routes($controller, true, true);

Route::controller($controller)->name('.')->group(function(){

    /**
     * --------------------------------------------------------------------------------------------------------------------
     *  Method  |  URI                           |  Nethod                               |  Route Name                    
     * --------------------------------------------------------------------------------------------------------------------
     */

    Route::post('/dz-upload-image',              'dzUpload'                              )->name('images.dz-upload');
    Route::get('/get-images',                    'getImageData'                          )->name('images.get-data');
    Route::post('/dz-upload-media',              'dzUploadMedia'                         )->name('media.dz-upload');
    Route::get('/get-media',                     'getMediaData'                          )->name('media.get-data');
    
    
});
