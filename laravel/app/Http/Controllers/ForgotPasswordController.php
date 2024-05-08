<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller {


    public function view()
    {
        return view('forgot-password');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->whereEmail($request->email)->delete();

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return redirect()->to('/')->with('success', __('third.forgot_success_message'));
    }

    public function resetView($token)
    {
        $reset = DB::table('password_resets')->whereToken($token)->count() > 0;

        if(!$reset) {
            abort(404);
        }

        return view('reset-password', ['token' => $token]);
    }

    public function changePass($token, Request $request)
    {
        $reset = DB::table('password_resets')->whereToken($request->token)->first();

        if(!$reset) {
            abort(403);
        }

        $request->validate([
            'password' => 'required|min:8|max:32|confirmed'
        ]);

        $user = User::whereEmail($reset->email)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->to('/login')->with('success', __('third.reset_success_message'));
    }
}
