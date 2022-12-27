<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $post = Post::where('post_status', 'publish');
        $category = Category::count();
        return view('dashboard', ['post' => $post, 'category' => $category]);
    }
}
