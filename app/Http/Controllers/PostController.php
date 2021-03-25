<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $posts = Post::where('title', 'LIKE', '%'.$request->search.'%')->paginate(4);
            return view('adminlte.posts.index', compact('posts'));
        }else{
            $posts = Post::paginate(4);
            return view('adminlte.posts.index', compact('posts'));
        }
    }

    public function add()
    {
        $categories = Category::all();
        return view('adminlte.posts.add', compact('categories'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'thumbnail' => 'required',
        ]);

        $post = Post::create([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect()->route('posts.index')->with('sukses', 'Berhasil menambah berita');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return back();
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('adminlte.posts.edit',compact('post','categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        
        $post = Post::findOrFail($id);
        
        $old_thumbnail = $post->thumbnail;
        //($old_thumbnail);
        if( empty($request->thumbnail) ){
            $input = array_merge($request->all(), ['thumbnail' => $old_thumbnail]);
            $post->update($input);
            return redirect()->route('posts.index')->with('sukses','Berhasil update berita');
        }
        $post->update([
            'user_id' => auth()->user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect()->route('posts.index')->with('sukses', 'Berhasil mengubah berita');
    }


}
