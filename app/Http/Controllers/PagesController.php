<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages::paginate(25);
        return view('module.page.index', ['pages' => $pages]);
    }

    public function create()
    {
        return view('module.page.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:25'
        ]);

        $page = Pages::create([
            'title' => $request->title,
            'slug' => Str::of($request->title)->slug('-'),
            'body' => $request->body
        ]);

        return redirect()->route('pages.index')->with('success', 'Success create new Page.');
    }

    public function edit($id)
    {
        $page = Pages::findOrFail($id);
        return view('module.page.edit', ['page' => $page]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:25'
        ]);

        $page = Pages::findOrFail($id);
        $page->title = $request->title;
        $page->slug = Str::of($request->title)->slug('-');
        $page->body = $request->body;
        $page->save();

        return redirect()->route('pages.index')->with('success', 'Success update Page.');
    }

    public function destroy($id)
    {
        $page = Pages::findOrFail($id);
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Success delete Page.');
    }
}
