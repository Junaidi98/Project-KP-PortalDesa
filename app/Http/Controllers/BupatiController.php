<?php

namespace App\Http\Controllers;
use App\Models\Bupati;
use Illuminate\Http\Request;

class BupatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bupatis'] = Bupati::orderBy('id','desc')->paginate(5);
        return view('bupati.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bupati.create');
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
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto')->store('public/foto');

        $bupati = new Bupati;

        $bupati->nama = $request->nama;
        $bupati->foto = $path;

        $bupati->save();


        return redirect()->route('bupati.index')
                        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $path = $request->file('foto')->store('public/foto');

        // $bupati = new Bupati;

        // $bupati->nama = $request->nama;
        // $bupati->foto = $path;

        // $bupati->save();
        // return redirect()->route('bupati.index')
        // ->with('success','Post has been created successfully.');
        return view('bupati.index',compact('bupati'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bupati $bupati)
    {
        return view('bupati.edit',compact('bupati'));
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
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
            $bupati = Bupati::find($id);

    if($request->hasFile('foto')){
        $request->validate([
          'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto')->store('public/foto');
        $bupati->foto = $path;
    }
         $bupati->nama = $request->nama;
        $bupati->foto = $path;

        $bupati->save();
        return redirect()->route('bupati.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bupati $bupati)
    {
        $bupati->delete();

        return redirect()->route('bupati.index')
                        ->with('success','Post has been deleted successfully');
    }
}