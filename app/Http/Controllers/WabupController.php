<?php

namespace App\Http\Controllers;
use App\Models\Wabup;
use Illuminate\Http\Request;

class WabupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['wabups'] = Wabup::orderBy('id','desc')->paginate(5);

        return view('wabup.index',$data);
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
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto')->store('public/foto');

        $wabup = new Wabup;

        $wabup->nama = $request->nama;
        $wabup->foto = $path;

        $wabup->save();


        return redirect()->route('wabup.index')
                        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $path = $request->file('foto')->store('public/foto');

        $wabup = new Wabup;

        $wabup->nama = $request->nama;
        $wabup->foto = $path;

        $wabup->save();
        return redirect()->route('wabup.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wabup $wabup)
    {
        return view('wabup.edit',compact('wabup'));
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
            $wabup = Wabup::find($id);

    if($request->hasFile('foto')){
        $request->validate([
          'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto')->store('public/foto');
        $wabup->foto = $path;
    }
         $wabup->nama = $request->nama;
        $wabup->foto = $path;

        $wabup->save();
        return redirect()->route('wabup.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wabup $wabup)
    {
        $wabup->delete();

        return redirect()->route('wabup.index')
                        ->with('success','Post has been deleted successfully');
    }
}
