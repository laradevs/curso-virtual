<?php

namespace App\Http\Controllers;

use App\{Post,Category};
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use LaraDevs\Fcm\FcmSendJob;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create')->with([
            'post_count'=>auth()->user()->posts()->count(),
            'categories'=>Category::pluck('name','id')->toArray()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
       $post= Post::create($request->validated());

        FcmSendJob::dispatch('Se ha publicado el post '.$request->title,['cqBikp5Yzuc:APA91bHZwNiqZSVn3u3BBP5cmqp77bzTern245Edjg8v-HEuEbAhLnMck0tLFzsVbwQAykHj0G07QDU7P2RLYpVA_dB-761WIYIZ39mx3l9S7gTjyBPE6f0G_u8bC9hVBf_TQ2u2NizX'],route('view_post',$post));

        session()->flash('success','Artículo publicado correctamente');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return view('post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        abort_if($post->user_id!=auth()->user()->id,403);
        return view('post.edit',compact('post'))
         ->with([
            'post_count'=>auth()->user()->posts()->count(),
            'categories'=>Category::pluck('name','id')->toArray()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePostRequest $request, Post $post)
    {
        abort_if($post->user_id!=auth()->user()->id,403);
        $post->fill($request->validated());
        $post->save();
        session()->flash('success','Artículo actualizado correctamente');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        abort_if($post->user_id!=auth()->user()->id,403);
        $post->delete();
        session()->flash('success','Artículo eliminado correctamente');
        return redirect()->route('home');
    }
}
