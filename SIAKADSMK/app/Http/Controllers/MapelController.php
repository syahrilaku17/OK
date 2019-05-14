<?php

namespace App\Http\Controllers;

use App\Jurusan;
use App\Mapel;
use Illuminate\Http\Request;
use DB;
class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $mapel = Mapel::all();
//        $jurusan_mapel = Mapel::with('jurusan')->first();
//        $jurusan_mapel->jurusan->nama_jurusan;
        return view('admin.mapel', compact('mapel', 'jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = Jurusan::all();
        return view('admin.mapel.tambah_mapel', compact('jurusan'));
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
           'nama_mapel' => 'required',
            'id_jurusan' => 'required   '
        ]);

        $mapel = new Mapel([
           'nama_mapel' => $request->get('nama_mapel'),
            'id_jurusan' => $request->get('id_jurusan')
        ]);

        $mapel->save();
        return redirect('/mapel')->with('success', 'Success Add');
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
        $jurusan = Jurusan::all();
        $mapel = Mapel::find($id);
        return view('admin.mapel.edit_mapel', compact('mapel', 'jurusan'));
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
           'nama_mapel' => 'required',
            'id_jurusan' => 'required'
        ]);

        $mapel = Mapel::find($id);
        $mapel->nama_mapel = $request->get('nama_mapel');
        $mapel->id_jurusan = $request->get('id_jurusan');
        $mapel->save();

        return redirect('/mapel')->with('success', 'Mapel Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect()->back();
    }
}
