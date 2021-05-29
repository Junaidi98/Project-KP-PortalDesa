<?php

namespace App\Http\Controllers;
use App\Models\Sekda;
use Illuminate\Http\Request;

class SekdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sekdas'] = Sekda::orderBy('id','desc')->paginate(5);

        return view('sekda.index',$data);
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

        $sekda = new Bupati;

        $sekda->nama = $request->nama;
        $sekda->foto = $path;

        $sekda->save();


        return redirect()->route('sekda.index')
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
        $path = $request->file('foto')->store('public/foto');

        $sekda = new Bupati;

        $sekda->nama = $request->nama;
        $sekda->foto = $path;

        $sekda->save();
        return redirect()->route('sekda.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekda $sekda)
    {
        return view('sekda.edit',compact('sekda'));
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
            $sekda = Sekda::find($id);

    if($request->hasFile('foto')){
        $request->validate([
          'foto' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('foto')->store('public/foto');
        $sekda->foto = $path;
    }
         $sekda->nama = $request->nama;
        $sekda->foto = $path;

        $sekda->save();
        return redirect()->route('sekda.index')
        ->with('success','Post has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
