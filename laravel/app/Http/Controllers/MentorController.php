<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use phpseclib3\File\ASN1\Maps\Validity;

class MentorController extends Controller
{
    public function index()
    {
        return view('mentor');
    }

    public function register(Request $request)
    {

        $vd = $request->validate([
            'email' => 'email:filter|nullable|unique:users,email',
            'phone' => 'min:10|numeric|nullable',
            'username' => 'min:3|required|unique:users,username',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            ],
//            'content' => 'nullable',
            'linkedin_link' => 'nullable',
            'facebook_link' => 'nullable',
            'instagram_link' => 'nullable',
            'cv' => 'required|mimes:jpg,png,jpeg,svg,pdf,webp'
        ]);

        try {

            if ($request->hasFile('image')) {
                $fileName = uniqid() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('uploads'), $fileName);
            } else {
                $fileName = null;
            }

            $user = User::create([
                ...$vd,
                'fullname_az' => $request->fullname['az'],
                'fullname_en' => $request->fullname['en'],
                'bio_az' => $request->content1['az'],
                'bio_en' => $request->content1['en'],

                'cv' => Storage::disk('public')->put('/', $request->file('cv')),
                'image' => $fileName,
                'position' => 'mentor',
                'password' => Hash::make($request->password),
                'status' => 'mentor',
                'is_active' => false
            ]);

            \Auth::login($user);

            return redirect()->to('/');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function all_mentors()
    {
        $mentors = User::where('status', 'mentor')->where('is_active', true)->orderBy('id', 'desc')->paginate(12);
        return view('mentors.all', compact('mentors'));
    }

    public function single_mentor($id, $slug)
    {
        $team = User::where('status', 'mentor')
            ->where('is_active', true)
            ->where('id', $id)
            ->firstOrFail();
        return view('mentors.single', compact('team'));
    }

    public function sendMail(Request $request)
    {
        $v = Validator::make($request->all(), [
            "message" => "required",
            "mentorMail" => "required|email",
            "senderMail" => "required|email",
        ]);
        if ($v->fails()) {
            return redirect()->to('/')->with('error', $v->errors());
        } else {
            Mail::send('email.sendMentorMessage', ['msg' => $request->message, 'sender' => $request->senderMail], function ($message) use ($request) {
                $message->to($request->mentorMail);
                $message->subject('Yeni mesajınız var!');
            });
            return redirect()->to('/')->with('success', __('third.mail_send_successfully'));
        }
    }
}
