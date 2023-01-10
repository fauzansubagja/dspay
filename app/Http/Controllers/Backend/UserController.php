<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
            'user_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_description' => 'required',
            'password' => 'required|min:6|max:255',
        ]);

        if ($request->file('user_img')) {
            $validateData['user_img'] = $request->file('user_img')->store('user-images');
        }

        $validateData['id'] = auth()->user()->id;

        User::create($validateData);

        return redirect('/management/user')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
            'user_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_description' => 'required',
            'password' => 'required|min:6|max:255',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('user_img')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['user_img'] = $request->file('user_img')->store('user-images');
        }

        $validateData['id'] = auth()->user()->id;

        $user->update($validateData);

        return redirect('/management/user')->with('success', 'User berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->img_user) {
            Storage::delete($user->user_img);
        }
        User::destroy($user->id);
        return redirect('/management/user');
    }
}