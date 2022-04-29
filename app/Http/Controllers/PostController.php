<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Posts::orderBy('created_at', 'desc')->paginate(2);
        //dd($posts);
        return view('dashboard.post.posts', [
            'posts'=> $posts,
            'categories' => $posts
        
        
        ]);
    }

    //Manda a la vista para mostrar algo
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.post.create', [
            'post' =>new Posts()
        ]);
    }

    //Complemento de create, recibe los datos cuando ya se lleno el formulario, encargado de llenar BD//
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
        //$validated= $request->validate([
        //    'tittle' => 'required | min:5 | max:500',
        //    'url_clean' => 'required',
        //    'content' => 'min:1 | max:500'
        //]);

        //dd($validated);
    
        Posts::create($request->validated());

        return back()->with('status', 'Post created successfully');
    }

    //Usado para consultas, muestra informacion//
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    //Muestra informacion conopcion a editar//
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)

    {
        //
        //dd($post);
        return view('dashboard.post.edit', [
            'post' => $post
        ]);
    }

    //
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Posts $post)
    {
        //Post::where('id', $id)->update($request->validated());
        $post->update($request->validated());
        return back()->with('status', 'Post updated successfully');

        //dd($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        //
        //dd($post);
        $post->delete();
        return back()->with('status', 'Post deleted successfully');


    }
}
