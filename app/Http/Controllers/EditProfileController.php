<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EditProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the currently authenticated user

        return view('layouts.edit_profile', ['user' => $user]);
    }


    public function edit(Request $request)
{
    $user = Auth:: user();

    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'username' => $request->input('username'),
    ]);

    return redirect()->route('profile')->with('success', 'Profile updated successfully');
}

}
