<?php

namespace App\Http\Controllers;
use App\Models\Desa;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['desas'] = Desa::orderBy('id','desc')->paginate(5);
        return view('desas.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desas.create');
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
            'namadesa' => 'required',
            'kades' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'status' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('gambar')->store('public/gambar');

        $desa = new Desa;

        $desa->namadesa = $request->namadesa;
        $desa->kades = $request->kades;
        $desa->alamat = $request->alamat;
        $desa->link = $request->link;
        $desa->status = $request->status;
        $desa->gambar = $path;

        $desa->save();


        return redirect()->route('desas.index')
                        ->with('success','Post has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $desa)
    {
        return view('desas.show',compact('desa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Desa $desa)
    {
        return view('desas.edit',compact('desa'));
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
            'namadesa' => 'required',
            'kades' => 'required',
            'alamat' => 'required',
            'link' => 'required',
            'status' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',]);
            $desa = Desa::find($id);

    if($request->hasFile('gambar')){
        $request->validate([
          'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $request->file('gambar')->store('public/gambar');
        $desa->gambar = $path;
    }
        $desa->namadesa = $request->namadesa;
        $desa->kades = $request->kades;
        $desa->alamat = $request->alamat;
        $desa->link = $request->link;
        $desa->status = $request->status;
        $desa->gambar = $path;

        $desa->save();
        return redirect()->route('desas.index')
        ->with('success','Post has been created successfully.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desa $desa)
    {
        $desa->delete();

        return redirect()->route('desas.index')
                        ->with('success','Post has been deleted successfully');
    }
}
