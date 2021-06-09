<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use App\NilaiPelajaran;
use Illuminate\Http\Request;

class NilaiPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $pelajaran = MataPelajaran::with('nilais')->whereHas('nilais', function ($query) use ($id) {
        //     $query->where('users_id', $id);
        // })->get();
        // $pelajaran = MataPelajaran::all();
        $data = NilaiPelajaran::where('users_id', $id)->get();
        // dd($data);
        return view('admin.nilai.edit')->with([
            // 'allPelajaran' => $pelajaran,
            'allNilai' => $data,
            'id' => $id
        ]);
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
        foreach ($request->except(['_token', '_method']) as $index => $nilai) {
            $data = NilaiPelajaran::find($index);
            $data->nilai = $nilai;
            $data->save();
        }

        return redirect()->back()->withSuccess('Nilai updated successfully.');
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
