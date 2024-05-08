<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function index()
    {
        return view('updateprofile');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
//            'fullname' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'nullable',
            'position' => 'nullable',
            'image' => 'image|nullable',
            'facebook_link' => 'nullable',
            'instagram_link' => 'nullable',
            'linkedin_link' => 'nullable',
            'content' => 'nullable',
            'email' => 'required|email:filter|unique:users,email,' . $id
        ]);

        $old_file = $request->old_file;

        if ($request->hasFile('image')) {
            $fileName = uniqid() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $fileName);

//            $path = 'uploads/' . $old_file;
//
//            if (file_exists($path)) {
//                @unlink(public_path($path));
//            }
        } else {
            $fileName = $old_file;
        }

        $user = User::findOrFail($id);

        $user->update([
            'email' => $request->email ?? $user->email,
            'phone' => $request->get('phone'),
            'position' => $request->get('position'),
            'image' => $fileName,
            'instagram_link' => $request->get('instagram_link'),
            'facebook_link' => $request->get('facebook_link'),
            'linkedin_link' => $request->get('linkedin_link'),
            'content' => $request->get('content1'),
//            'fullname' => $request->get('fullname')
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
        ]);

        if ($user) {
            return redirect(route('update-profile'));
        }
    }
}
