<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::paginate(25);

        return view('module.page.index', ['pages' => $pages]);
    }
}
