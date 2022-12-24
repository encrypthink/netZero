<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::paginate(30);
        return view('module.post.index', ['post' => $post]);
    }

    public function create()
    {
        $category = Category::all();
        return view('module.post.create', ['category' => $category]);
    }

    public function store(Request $request)
    {
        if($request->hasFile('post_image')) {
            //get filename with extension
            $filenamewithextension = $request->file('post_image')->getClientOriginalName();
      
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
      
            //get file extension
            $extension = $request->file('post_image')->getClientOriginalExtension();
      
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
      
            //small thumbnail name
            $smallthumbnail = $filename.'_small_'.time().'.'.$extension;
      
            //medium thumbnail name
            $mediumthumbnail = $filename.'_medium_'.time().'.'.$extension;
      
            //large thumbnail name
            $largethumbnail = $filename.'_large_'.time().'.'.$extension;
      
            //Upload File
            $request->file('post_image')->storeAs('public/post_images', $filenametostore);
            $request->file('post_image')->storeAs('public/post_images/thumbnail', $smallthumbnail);
            $request->file('post_image')->storeAs('public/post_images/thumbnail', $mediumthumbnail);
            $request->file('post_image')->storeAs('public/post_images/thumbnail', $largethumbnail);
      
            //create small thumbnail
            $smallthumbnailpath = public_path('storage/post_images/thumbnail/'.$smallthumbnail);
            $this->createThumbnail($smallthumbnailpath, 150, 93);
      
            //create medium thumbnail
            $mediumthumbnailpath = public_path('storage/post_images/thumbnail/'.$mediumthumbnail);
            $this->createThumbnail($mediumthumbnailpath, 300, 185);
      
            //create large thumbnail
            $largethumbnailpath = public_path('storage/post_images/thumbnail/'.$largethumbnail);
            $this->createThumbnail($largethumbnailpath, 550, 340);
      
            return redirect('image')->with('success', "Image uploaded successfully.");
        }
    }

    public function imageUpload(Request $request)
    {
        $imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location'=> "/storage/$imgpath"]);
    }
}
