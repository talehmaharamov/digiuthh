<?php

namespace App\Http\Controllers;

use App\Enum\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        return view('student');
    }

    public function register(Request $request)
    {
        $vd = $request->validate([
            'email' => 'email:filter|nullable|unique:users,email',
            'phone' => 'min:10|numeric|nullable',
//            'fullname' => 'min:3|required',
            'name' => 'min:3|required',
//            'surname' => 'min:3|required',
//            'username' => 'min:3|required|unique:users,username',
            'password' => 'required|confirmed|min:8',
        ],
            [
                'password.required' => __('password is required')
            ]);

        try {
            $user = User::create([
                ...$vd,
                'fullname_az' => $request->fullname,
                'fullname_en' => $request->fullname,
                'position' => 'user',
                'password' => Hash::make($request->password),
                'status' => Status::STUDENT->value
            ]);

            \Auth::login($user);

            return redirect()->to('/');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
