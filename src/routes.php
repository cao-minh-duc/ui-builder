<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Route::post('/ckeditor/upload',function(Request $request){
//     $filePath = $request->file('upload')->store('public/ckeditor');

//     return response()->json([
//          'url' => asset(
//             Storage::url($filePath)
//         )
//     ]);
// })->name('ui-builder::ckeditor-upload');