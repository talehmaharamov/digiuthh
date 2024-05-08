<?php

namespace App\Http\Controllers;

class SertificateController extends Controller
{

    public function all_sertificates()
    {
        $certificates = \App\Models\UserExam::where('user_id', auth()->id())->get();

        return view('certificates', ['certificates' => $certificates]);
    }

    public function single_sertificate($id)
    {
        $certificate = \App\Models\UserExam::findOrFail($id);

        if ($certificate->user_id == auth()->id()) {
            return view('certificate', ['certificate' => $certificate]);
        }

        abort(404, 'Not Found');
    }
}