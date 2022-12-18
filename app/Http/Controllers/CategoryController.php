<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::paginate(15);
        return view('module.category.index', ['category' => $category]);
    }

    public function create()
    {
        return view('module.category.create');
    }

    public function store()
    {
        # code...
    }

    public function edit($id)
    {
        # code...
    }

    public function update(Request $request, $id)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }
}
