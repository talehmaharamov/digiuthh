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
//        dd($request->all());
        $vd = $request->validate([
            'email' => 'email:filter|nullable|unique:users,email',
            'phone' => 'min:10|numeric|nullable',
            'password' => 'required|min:8',
        ], [
            'email.email' => __('Please provide a valid email address.'),
            'email.unique' => __('This email has already been taken.'),
            'phone.min' => __('Phone number must be at least 10 characters.'),
            'phone.numeric' => __('Phone number must be numeric.'),
            'password.required' => __('Password is required.'),
            'password.min' => __('Password must be at least 8 characters.'),
            'password.confirmed' => __('Password confirmation does not match.'),
        ]);

        try {
            $user = User::create([
                ...$vd,
//                'email' => $request->email,
//                'phone' => $request->phone,
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
