<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index(){
        return response()->download('resources/file/welcome.txt');
    }
}
