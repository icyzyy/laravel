<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;

class ToolsController extends Controller
{
    public function list()
    {
        return view('Tools.main', ['test' => 'Hello world']);
    }
}
