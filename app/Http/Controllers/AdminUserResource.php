<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminUserResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index_user', [
            'title' => 'Admin',
            'user' => User::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:users|max:255|min:3',
            'email' => 'required|unique:users|max:255|email:dns',
            'password' => 'required|max:255|min:8'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/admin/user')->with('success', 'Create User successful!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = [
            'name' => 'required|unique:users|max:255|min:3',
            'email' => 'required|unique:users|max:255|email:dns',
            'password' => 'required|max:255|min:8',
            'img' => 'image|file|max:10240'
        ];

        if ($request->file('img')) {
            if($request->oldImg) {
                Storage::delete($request->oldImg); 
            }
            $validatedData['img'] = $request->file('img')->store('post-image');
        }
        
        User::where('id', $user->id)->update($validatedData);

        return redirect('/mypost')->with('success', 'Your Profile has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
