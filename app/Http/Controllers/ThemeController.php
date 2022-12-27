<?php

namespace App\Http\Controllers;

use App\Models\Themes;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index()
    {
        $themes = Themes::all();
        return view('module.theme.index', ['themes' => $themes]);
    }
}
