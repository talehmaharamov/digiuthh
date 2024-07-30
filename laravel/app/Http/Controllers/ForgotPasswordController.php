<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{


    public function view()
    {
        return view('forgot-password');
    }

    public function sendMail(Request $request)
    {
        try {
            $vd = Validator::make($request->all(), [
                'email' => 'required|email|exists:users',
            ]);

            if ($vd->fails()) {
                return redirect()->back()->with('error', __('third.user_not_found'));
            }

            $token = Str::random(64);

            DB::table('password_resets')->whereEmail($request->email)->delete();

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]);

            Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            });

            return redirect()->to('/')->with('success', __('third.forgot_success_message'));
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function resetView($token)
    {
        $reset = DB::table('password_resets')->whereToken($token)->count() > 0;

        if (!$reset) {
            abort(404);
        }

        return view('reset-password', ['token' => $token]);
    }

    public function changePass($token, Request $request)
    {
        $reset = DB::table('password_resets')->whereToken($request->token)->first();

        if (!$reset) {
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
