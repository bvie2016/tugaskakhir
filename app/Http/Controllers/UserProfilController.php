<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\User;
use App\Models\UserProfil;
use App\Models\UserTipe;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserProfil::with('user')->with('jabatan')->get();
        return view('admin.user.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        $role = Role::all();
        return view('admin.user.add', compact(['jabatan', 'role']));
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
            'email' => $request->email,
            'password'=>bcrypt($request->password)
            
        ]);

        if ($user){

            $user->assignRole($request->role);

            $profil = UserProfil::create([
                'user_id' => $user->id,
                'no_pegawai' => $request->no_pegawai,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'kontak' => $request->kontak,
                'jabatan_id' => $request->jabatan,
            ]);

            if ($profil) {
                return redirect()->route('pengguna.index');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfil $userProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfil $userProfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfil $userProfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfil  $userProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfil $userProfil)
    {
        //
    }
}
