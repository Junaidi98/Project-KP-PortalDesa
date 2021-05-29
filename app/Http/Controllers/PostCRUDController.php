<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::orderBy('id','desc')->count();

        return view('posts.index', $data);
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bumil()
    {
        return view('posts.bumil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'niks' => 'required',
            'nama_pasiens' => 'required',
            'nama_suamis' => 'required',
            'tpt_lahirs' => 'required',
            'tgl_lahirs' => 'required',
            'umurs'=>'required',
            'alamat_povs'=>'Required',
            'alamat_kabs'=>'Required',
            'alamat_kecs'=>'Required',
            'desas'=>'Required',
            'rws'=>'Required',
            'rts'=>'Required',
            'hps'=>'Required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('public/images');

        $post = new Post;

        $post->niks = $request->niks;
        $post->nama_pasiens = $request->nama_pasiens;
        $post->nama_suamis = $request->nama_suamis;
        $post->tpt_lahirs = $request->tpt_lahirs;
        $post->tgl_lahirs = $request->tgl_lahirs;
        $post->umurs = $request->umurs;
        $post->alamat_povs = $request->alamat_povs;
        $post->alamat_kabs = $request->alamat_kabs;
        $post->alamat_kecs = $request->alamat_kecs;
        $post->desas = $request->desas;
        $post->rws = $request->rws;
        $post->rts = $request->rts;
        $post->hps = $request->hps;
        $post->image = $path;

        $post->save();


        return redirect()->route('posts.index')
                        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'niks' => 'required',
            'nama_pasiens' => 'required',
            'nama_suamis' => 'required',
            'tpt_lahirs' => 'required',
            'tgl_lahirs' => 'required',
            'umurs'=>'required',
            'alamat_povs'=>'Required',
            'alamat_kabs'=>'Required',
            'alamat_kecs'=>'Required',
            'desas'=>'Required',
            'rws'=>'Required',
            'rts'=>'Required',
            'hps'=>'Required',

        ]);

        $post = Post::find($id);

        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $post->image = $path;
        }

        $post->niks = $request->niks;
        $post->nama_pasiens = $request->nama_pasiens;
        $post->nama_suamis = $request->nama_suamis;
        $post->tpt_lahirs = $request->tpt_lahirs;
        $post->tgl_lahirs = $request->tgl_lahirs;
        $post->umurs = $request->umurs;
        $post->alamat_povs = $request->alamat_povs;
        $post->alamat_kabs = $request->alamat_kabs;
        $post->alamat_kecs = $request->alamat_kecs;
        $post->desas = $request->desas;
        $post->rws = $request->rws;
        $post->rts = $request->rts;
        $post->hps = $request->hps;
        $post->save();

        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
                        ->with('success','Post has been deleted successfully');
    }
}
