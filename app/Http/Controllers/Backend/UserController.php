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
        $user = User::all();
        return view('admin.users.create', compact('user'));
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
            'username' => $request['username'],
            'email' => $request['email'],
            'role' => $request['role'],
            'user_description' => $request['user_description'],
            'image' => $request['required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'password' => Hash::make($request['password']),
            // 'username' => 'require',
            // 'email' => 'require',
            // 'role' => 'require',
            // 'user_description' => 'require',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'password' => 'require',
        ]);

        $input = $request->all();
        // $input['id'] = auth()->user()->id;

        if ($user_img = $request->file('user_img')) {
            $destinationPath = 'user_img/';
            $profileImage = date('YmdHis') . "." . $user_img->getClientOriginalExtension();
            $user_img->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        User::create($input);

        return redirect()->route('admin.users.index');
        // return User::create([
        //     'username' => $request['username'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
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
    public function update(Request $request, $id)
    {
        //
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