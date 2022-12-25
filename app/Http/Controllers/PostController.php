<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

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
        $request->validate([
            'title' => 'required|min:5',
            'post_image' => 'required',
            'body' => 'required',
            'status' => 'required'
        ]);

        if($request->hasFile('post_image')) {
            $filenamewithextension = $request->file('post_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('post_image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $thumbnail = $filename.'_'.time().'.'.$extension;
            $request->file('post_image')->storeAs('public/post_images', $filenametostore);
            $request->file('post_image')->storeAs('public/post_images/thumbnail', $thumbnail);
            $thumbnailpath = public_path('storage/post_images/thumbnail/'.$thumbnail);
            $this->createThumbnail($thumbnailpath, 550, 340);
        }

        $post = Post::create([
            'title' => $request->title,
            'main_image' => $filenametostore,
            'body' => $request->body,
            'slug' => Str::of($request->title)->slug('-'),
            'post_status' => $request->status,
            'author_id' => Auth::user()->id
        ]);

        if ($request->category !== null) {
            foreach ($request->category as $key) {
                PostCategory::create([
                    'post_id' => $post->id,
                    'category_id' => $key
                ]);
            }
        }

        if ($post) {
            return redirect()->route('post.index')->with('success', 'Success create new Post.');
        }
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $category = Category::all();
        return view('module.post.edit', ['post' => $post, 'category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = Str::of($request->title)->slug('-');
        $post->post_status = $request->status;
        $post->author_id = Auth::user()->id;

        if($request->hasFile('post_image')) {
            Storage::delete(['public/post_images/'.$post->main_image, 'public/post_images/thumbnail/'.$post->main_image]);
            $filenamewithextension = $request->file('post_image')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('post_image')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;
            $thumbnail = $filename.'_'.time().'.'.$extension;
            $request->file('post_image')->storeAs('public/post_images', $filenametostore);
            $request->file('post_image')->storeAs('public/post_images/thumbnail', $thumbnail);
            $largethumbnailpath = public_path('storage/post_images/thumbnail/'.$thumbnail);
            $this->createThumbnail($largethumbnailpath, 550, 340);

            $post->main_image = $filenametostore;
        }

        PostCategory::where('post_id', $post->id)->delete();
        if ($request->category !== null) {
            foreach ($request->category as $key) {
                PostCategory::create([
                    'post_id' => $post->id,
                    'category_id' => $key
                ]);
            }
        }

        $post->save();

        return redirect()->route('post.index')->with('success', 'Success update Post.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        PostCategory::where('post_id', $id)->delete();
        Storage::delete(['public/post_images/'.$post->main_image, 'public/post_images/thumbnail/'.$post->main_image]);
        $delete = $post->delete();

        if ($delete) {
            return redirect()->route('post.index')->with('success', 'Success delete Post.');
        }
    }

    public function imageUpload(Request $request)
    {
        $imgpath = request()->file('file')->store('uploads', 'public');
        return response()->json(['location'=> "/storage/$imgpath"]);
    }

    public function createThumbnail($path, $width, $height) {
        $img = Image::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }
}
