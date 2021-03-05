<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_mapel = Mapel::get();
        return view('mapel.index',compact('data_mapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mapel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_mapel' => 'required',
            'guru_id' => 'required'
        ]);

        Mapel::create([
            'nama_mapel' => $request->get('nama_mapel'),
            'guru_id' => $request->get('guru_id')
        ]);

        return redirect()->route('mapel.index')->with('message','Mapel berhasil di tambah');
    }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_mapel = Mapel::find($id);
        return view('mapel.edit',compact('data_mapel'));
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
        $data_mapel = Mapel::find($id);
        $data_mapel->update([
            'nama_mapel' => $request->get('nama_mapel'),
            'guru_id' => $request->get('guru_id')
        ]);

        return redirect()->route('mapel.index')->with('message','Mapel berhasil di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_mapel = Mapel::find($id);
        $data_mapel->delete();
        return redirect('mapel');
    }
}