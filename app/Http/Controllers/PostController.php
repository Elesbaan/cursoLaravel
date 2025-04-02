<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [];
    public function index()
    {
        return view('posts.index', [
            'posts' => $this->posts
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post = [
            'title' => $request->input('title'),
            'contenido' => $request->input('contenido'),
        ];
        // Simular almacenamiento (en sesión para que sobreviva entre peticiones)
        $posts = session('posts', []);
        $posts[] = $post;
        session(['posts' => $posts]);

        return redirect()->route('posts.show');
    }
    public function show()
    {
        $posts = session('posts', []);
        return view('posts.show', compact('posts'));
    }
}
