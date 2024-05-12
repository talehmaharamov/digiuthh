<?php

namespace App\Http\Controllers;

use App\Enum\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher');
    }

    public function register(Request $request)
    {
        try {
            $vd = Validator::make($request->all(), [
                    'email' => 'email:filter|nullable|unique:users,email',
                    'phone' => 'min:10|numeric|nullable',
                    'username' => 'min:3|required|unique:users,username',
                    'password' => [
                        'required',
                        'confirmed',
                        'min:8',
                        'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
                    ],
                    'linkedin_link' => 'nullable',
                    'facebook_link' => 'nullable',
                    'instagram_link' => 'nullable',
                    'cv' => 'required|mimes:jpg,png,jpeg,svg,pdf,webp'
                ]
            );

            if ($vd->fails()){
                return redirect()->back()->withErrors($vd)->withInput();
            }

            if ($request->hasFile('image')) {
                $fileName = uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads'), $fileName);
            } else {
                $fileName = null;
            }

            $user = User::create([
                'email' => $request->email,
                'phone' => $request->phone,
                'username' => $request->username,
                'fullname_az' => $request->fullname['az'],
                'fullname_en' => $request->fullname['en'],
                'bio_az' => $request->content1['az'],
                'bio_en' => $request->content1['en'],
                'position' => 'teacher',
                'cv' => Storage::disk('public')->put('/', $request->file('cv')),
                'image' => $fileName,
                'password' => Hash::make($request->password),
                'status' => 'teacher',
                'is_active' => false
            ]);

            \Auth::login($user);

            return redirect()->to('/');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
