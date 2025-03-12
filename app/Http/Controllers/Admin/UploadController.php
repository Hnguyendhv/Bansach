<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UploadServices;
class UploadController extends Controller
{


    public function store(Request $request){
        $request->file->store('public/images');
        return "upload thành công";
    }
}
