<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $posts = \App\Models\Post::all(); // Ambil semua data post
    return view('posts.index', compact('posts')); // Kirim data ke tampilan
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('posts.create'); // Menampilkan form tambah data
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    \App\Models\Post::create($request->all());

    return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan.');
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $post = \App\Models\Post::findOrFail($id);
    return view('posts.edit', compact('post'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    $post = \App\Models\Post::findOrFail($id);
    $post->update($request->all());

    return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = \App\Models\Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus.');
}

}
