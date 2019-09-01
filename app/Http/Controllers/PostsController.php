<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use function foo\func;
use function MongoDB\BSON\toJSON;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * PostsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('posts.index');
    }

    public function json()
    {
        return datatables()->of(Post::query()->latest())
            ->addColumn('action', function (Post $post){
            $csrf   = csrf_field();
            $method = method_field('DELETE');
            return
                '
                   <form onsubmit="return confirm(\'Apakah Anda Yakin ?\');" action="'.route('posts.destroy', $post->id).'" method="POST">
                        '.$csrf.'
                        '.$method.'
                        <a href="'.route("posts.edit", $post->id).'/" class="btn btn-sm btn-success">EDIT</a>
                        <button class="btn btn-danger btn-sm" type="submit">DELETE</button>
                    </form> 
                ';
        })
        ->toJSON();
    }

    public function show(Request $request)
    {
        $post = Post::where('slug', '=', $request->segment(1))->first();
        if($post){
            return view('posts.show', compact('post'));
        }
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'image'     => 'required|image|mimes:jpeg,jpg,png,gif|max:5000',
            'content'   => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Post::create([
            'title'     => $request->input('title'),
            'slug'      => str_slug($request->input('title')),
            'image'     => $image->hashName(),
            'content'   => $request->input('content'),
        ]);
        return redirect()->route('posts.index')->with(['status' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        if($request->file('image') == "") {

            Post::whereId($post->id)->update([
                'title'     => $request->input('title'),
                'slug'      => str_slug($request->input('title')),
                'content'   => $request->input('content'),
            ]);

        } else {

            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Post::whereId($post->id)->update([
                'title'     => $request->input('title'),
                'slug'      => str_slug($request->input('title')),
                'image'     => $image->hashName(),
                'content'   => $request->input('content'),
            ]);
        }
        return redirect()->route('posts.index')->with(['status' => 'Data Berhasil Diupdate!']);

    }

    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::disk('local')->delete('public/posts/'.$post->image);

        $post->delete();
        return redirect()->route('posts.index')->with(['status' => 'Data Berhasil Dihapus!']);
    }


}
