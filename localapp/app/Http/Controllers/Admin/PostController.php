<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use App\Post;
use App\Category;
use App\Tag;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.posts.index', compact('posts'));
    }
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags       = Tag::orderBy('name', 'ASC')->get();

        return view('admin.posts.create', compact('categories', 'tags'));
    }
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());
        $this->authorize('pass', $post);
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['file' => asset($path)])->save();
        }
        $post->tags()->attach($request->get('tags'));
        return redirect()->route('posts.edit', $post->id)->with('info', 'Entrada creada con éxito');
    }
    public function show($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);

        return view('admin.posts.show', compact('post'));
    }
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags       = Tag::orderBy('name', 'ASC')->get();
        $post       = Post::find($id);
        $this->authorize('pass', $post);
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);

        $post->fill($request->all())->save();
        if($request->file('image')){
            $path = Storage::disk('public')->put('image',  $request->file('image'));
            $post->fill(['file' => asset($path)])->save();
        }
        $post->tags()->sync($request->get('tags'));
        return redirect()->route('posts.edit', $post->id)->with('info', 'Entrada actualizada con éxito');
    }
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        $this->authorize('pass', $post);

        return back()->with('info', 'Eliminado correctamente');
    }
}
