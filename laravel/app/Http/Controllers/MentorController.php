<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MentorController extends Controller
{
    public function index()
    {
        return view('mentor');
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
                        'string',
                        'min:8',
                        'max:32',
                        'regex:/[A-Z]/',
                        'regex:/[a-z]/',
                        'regex:/[0-9]/',
                        'regex:/[@$!%*?&^()_+={}\[\]|:;"\',.<>#]/', // Must contain at least one special character
                        'not_regex:/[<>]/', // Must not contain < or >
                        'not_regex:/[&]/', // Must not contain &
                        'not_regex:/[\']/', // Must not contain '
                    ],
                    'linkedin_link' => 'nullable',
                    'facebook_link' => 'nullable',
                    'instagram_link' => 'nullable',
                    'cv' => 'required|mimes:jpg,png,jpeg,svg,pdf,webp'
                ]
            );

            if ($vd->fails()) {
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
                'linkedin_link' => $request->linkedin_link,
                'facebook_link' => $request->facebook_link,
                'instagram_link' => $request->instagram_link,
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
            return redirect()->to('/')->with('success', __('third.mail_mentor_send_successfully'));
        }
    }
}
