<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FilesController extends Controller
{
    public function store(Request $request){
        if (Input::hasFile('file')) {
            $file = $request->file('file');
            $file->move(public_path('/img'),$file->getClientOriginalName());
        }
    }
}
