<?php

namespace App\Http\Controllers;

use App\Models\Usr;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login (Request $request)
    {
        $all = Usr::all();
        $credentials = Usr::where('email', $request->email)->first();
        $credentialspass = Usr::where('password', $request->password)->first();

        if($credentials == '') {
            Alert::error('Error', 'email tidak ditemukan');
            var_dump('email tidak ditemukan');
        } elseif($credentials != '' && $credentialspass == '') {
            Alert::error('Error', 'invalid credential');
            var_dump('invalid credential');
        } else {
            Alert::success('Berhasil', 'berhasil login');
            return redirect()->route('dashboard.index');
        }

        // dd($request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Usr::create([
            'userid' => $request['email'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => $request['password'],
            'role' => 'R.10',
        ]);
        return redirect()->route('auth.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Usr $usr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Usr $usr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usr $usr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usr $usr)
    {
        //
    }
}
