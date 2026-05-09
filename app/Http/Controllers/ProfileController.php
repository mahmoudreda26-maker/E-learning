<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('Profile.viewprofile', compact('user'));
    }

    public function update(ProfileRequest $request)
    {
        $user = auth()->user();

        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $file = $request->file('image');
            $imageName = time() . '_' . $file->getClientOriginalName();

            $path = $file->storeAs('profiles', $imageName, 'public');

            $data['image'] = $path;
        }
        $user->update($data);
        return redirect()->route('profile')
            ->with('success', 'Profile updated successfully');
    }
public function changepassword(ProfileRequest $request)
{
    $user = auth()->user();
    $data = $request->validated();
    if (!Hash::check($data['current_password'], $user->password)) {
        return back()->withErrors([
            'current_password' => 'Current password is incorrect'
        ]);
    }

    $user->update([
        'password' => Hash::make($data['new_password']),
    ]);
    return redirect()->route('profile')
        ->with('success', 'Password updated successfully');
}
    }
