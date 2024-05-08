<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }
}
