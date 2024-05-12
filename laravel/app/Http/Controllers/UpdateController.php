<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Prophecy\Exception\Exception;

class UpdateController extends Controller
{
    public function index()
    {
        return view('updateprofile');
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'phone' => 'nullable',
                'position' => 'nullable',
                'image' => 'image|nullable',
                'facebook_link' => 'nullable',
                'instagram_link' => 'nullable',
                'linkedin_link' => 'nullable',
                'email' => 'required|email:filter|unique:users,email,' . $id
            ]);

            $old_file = $request->old_file;

            if ($request->hasFile('image')) {
                $fileName = uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads'), $fileName);
            } else {
                $fileName = null;
            }

            $user = User::findOrFail($id);

            $user->update([
                'email' => $request->email ?? $user->email,
                'phone' => $request->get('phone'),
                'image' => $fileName,
                'instagram_link' => $request->get('instagram_link'),
                'facebook_link' => $request->get('facebook_link'),
                'linkedin_link' => $request->get('linkedin_link'),
                'content' => $request->get('content1'),
                'fullname_az' => ($request->userType == 'user') ? $request->fullname : $request->fullname['az'],
                'fullname_en' => ($request->userType == 'user') ? $request->fullname : $request->fullname['en'],
                'bio_az' => ($request->userType == 'user') ? $request->content1 : $request->content1['az'],
                'bio_en' => ($request->userType == 'user') ? $request->content1 : $request->content1['en'],
            ]);

            if ($user) {

                return redirect(route('update-profile'))->with('success',__('contact_page.success'));
            }

        } catch (Exception $exception) {

        }
    }
}
