<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
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

    public function store(Request $request)
    {
        $validate = $request->validate([
            'category_name' => 'required|min:5|max:15'
        ]);

        $category = Category::create([
            'name' => $request->category_name,
            'slug' => Str::of($request->category_name)->slug('-'),
            'description' => $request->description
        ]);

        if ($category) {
            return redirect()->route('category.index')->with('success', 'Success create new category.');
        }
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('module.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'category_name' => 'required|min:5|max:15'
        ]);

        $category = Category::findOrFail($id);
        $category->name = $request->category_name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Success update category.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Success delete category.');
    }
}
