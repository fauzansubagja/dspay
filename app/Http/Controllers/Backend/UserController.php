<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
            'user_description' => 'required',
            'user_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'password' => 'required|min:6|max:255',

        ]);

        $input = $request->all();

        if ($user_img = $request->file('user_img')) {
            $destinationPath = 'user_img/';
            $productImage = date('YmdHis') . "." . $user_img->getClientOriginalExtension();
            $user_img->move($destinationPath, $productImage);
            $input['user_img'] = "$productImage";
        }

        User::create($input);

        return redirect('/management/user');
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
    public function update(Request $request, $user)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',
            'user_description' => 'required',
            'user_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'password' => 'required|min:6|max:255',

        ]);

        $input = $request->all();

        if ($user_img = $request->file('user_img')) {
            $destinationPath = 'user_img/';
            $productImage = date('YmdHis') . "." . $user_img->getClientOriginalExtension();
            $user_img->move($destinationPath, $productImage);
            $input['user_img'] = "$productImage";
        } else {
            unset($input['user_img']);
        }

        $user->update($input);

        return redirect('/management/user');
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