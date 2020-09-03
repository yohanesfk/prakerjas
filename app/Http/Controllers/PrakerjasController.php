<?php

namespace App\Http\Controllers;

use App\Prakerja;
use Illuminate\Http\Request;

class PrakerjasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prakerjas = Prakerja::all();
        return view('prakerjas.index', compact('prakerjas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prakerjas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 /*       Student::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'nrp' => $request->nrp,
            'jurusan' => $request->jurusan
        ]);
 */

    $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'nohp' => 'required',
    ]);

        Prakerja::create($request->all());
        return redirect('/prakerjas')->with('status', 'Data Prakerja Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Prakerja $prakerja)
    {
        return view('prakerjas.show', compact('prakerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Prakerja $prakerja)
    {
        return view('prakerjas.edit', compact('prakerja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prakerja $prakerja)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'password' => 'password'
        ]);

        Prakerja::where('id', $prakerja->id)
        ->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'password' => $request->password,
            'agen' => $request->agen,
            'tagihan' => $request->tagihan,
            'status' => $request->status
        ]);
        return redirect('/prakerjas')->with('status', 'Data Prakerja Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prakerja $prakerja)
    {
        Prakerja::destroy($prakerja->id);
        return redirect('/prakerjas')->with('status', 'Data Prakerja Berhasil dihapus');
    }
}
