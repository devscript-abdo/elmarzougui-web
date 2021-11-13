<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactRequest;
use App\Mail\Contact\ContactUsMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('theme.contact.index');
    }

    public function store(ContactRequest $request)
    {
        $data = $request->only(['name','email','phone','content']);

       // dd($data);
        $email = setting('contact.email_reciver') ?? 'contact@' . request()->getHost();

        if ($email) {

            Mail::to($email)->send(new ContactUsMail($data));

            return redirect()->route('contact')->with('isSent', 'merci pour votre message');
        }
    }
}
