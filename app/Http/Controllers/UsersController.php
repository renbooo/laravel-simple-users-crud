<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=\App\User::all();
        return view('index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
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
        $user = new \App\User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->born_city = $request->get('born_city');
        $user->born_date = $request->get('born_date');
        $user->gender = $request->get('gender');
        $user->address = $request->get('address');
        $user->phone_number = $request->get('phone_number');
        $user->password = $request->get('password');
        $user->save();
        
        return redirect('users')->with('success', 'Data user telah ditambahkan');
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
        //
        $users = User::where('id', $id)->get();
        return view('edit', compact('users'));
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
        //
        $user = user::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->born_city = $request->born_city;
        $user->born_date = $request->born_date;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->phone_number = $request->phone_number;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('users.index')->with('alert-success', 'Data berhasil diubah!');
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
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('users.index');
    }
}
