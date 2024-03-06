<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('status', 2)->latest('id')->paginate(8);

        return view('posts.index', ['posts' => $post]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function categoria(Categoria $categoria)
    {
        $post = Post::where('categoria_id', $categoria->id)->where('status', 2)->latest('id')->paginate(6);

        return view('posts.categoria', ['posts' => $post, 'categoria' => $categoria]);
    }
    public function create()
    {
        $categorias = Categoria::all();

        return view('posts.create', ['categorias' => $categorias]);
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->all());

        return redirect()->route('index')->with('status', 'Post creado correctamente!');
    }

    public function user(Request $request)
    {
        $posts = Post::where('user_id', auth()->user()->id)->latest('id')->paginate(6);

        return view('posts.user', ['posts' => $posts]);
    }
}
