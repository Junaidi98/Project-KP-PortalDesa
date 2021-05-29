<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tentangs'] = Tentang::orderBy('id','desc')->paginate(5);

        return view('tentang.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wabup.create');
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
            'konten' => 'required',
            'foto_tentang' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto_tentang')->store('public/foto_tentang');

        $tentang = new Tentang;

        $tentang->konten = $request->konten;
        $tentang->foto_tentang = $path;

        $tentang->save();


        return redirect()->route('tentang.index')
                        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $path = $request->file('foto')->store('public/foto_tentang');

        $tentang = new Tentang;

        $tentang->konten = $request->nama;
        $tentang->foto = $path;

        $tentang->save();
        return redirect()->route('tentang.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentang $tentang)
    {
        return view('tentang.edit',compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'konten' => 'required',
            'foto_tentang' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
            $tentang = Tentang::find($id);

    if($request->hasFile('foto_tentang')){
        $request->validate([
          'foto_tentang' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto_tentang')->store('public/foto_tentang');
        $tentang->foto_tentang = $path;
    }
         $tentang->konten = $request->konten;
         $tentang->foto_tentang = $path;

        $tentang->save();
        return redirect()->route('tentang.index')
        ->with('success','Post has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
