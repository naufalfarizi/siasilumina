<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use App\NilaiPelajaran;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santris = User::where('is_admin', '=', 0)->get();
        return view('admin.santri.index')->with(['santris' => $santris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password
        ]);
        UserProfile::create([
            'users_id' => $user->id,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'tahun_ajaran' => $request->tahun_ajaran
        ]);
        foreach (MataPelajaran::all() as $pelajaran) {
            NilaiPelajaran::create([
                'users_id' => $user->id,
                'mata_pelajarans_id' => $pelajaran->id,
                'nilai' => 0
            ]);
        }

        return redirect()->route('santri.index');
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
        $santri = User::find($id);
        $santriProfile = UserProfile::where('users_id', $id)->first();
        return view('admin.santri.edit')->with([
            'santri' => $santri,
            'santriProfile' => $santriProfile
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
        $santri = User::find($id);
        $santri->name = $request->nama;
        $santri->username = $request->username;
        $santri->email = $request->email;
        $santriProfile = UserProfile::where('users_id', $id)->first();
        $santriProfile->kelas = $request->kelas;
        $santriProfile->semester = $request->semester;
        $santriProfile->tahun_ajaran = $request->tahun_ajaran;
        $santri->save();
        $santriProfile->save();

        return redirect()->back()->withSuccess('Profile updated successfully.');
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
