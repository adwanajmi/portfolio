<?php

namespace App\Http\Controllers;

use App\Mail\PublicContact;
use App\Mail\Adwa;
use App\Mail\AdwaContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subjek = $request->subjek;
        $mesej = $request->mesej;
        // dd($mesej);

        Mail::to('adwaaa@live.com')->send(new PublicContact($name, $email, $subjek, $mesej));
        Mail::to($email)->send(new AdwaContact($name));

        return back();
    }
}
