<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registrations.index');
    }

    public function terms()
    {
        return view('registrations.terms');
    }

    public function store(Request  $request)
    {
        $this->validate($request,[
            'full_names'=>'required',
            'email'=>'required|email|unique:prospects,email',
            'phone'=>'required|unique:prospects,phone',
            'program'=>'required',
            'timing'=>'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        Prospect::create($request->all());
        $to_name = $request->full_names;
        $to_email = $request->email;
        $data = ['names'=>$request->full_names];
        /*Mail::send('emails.registration', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                ->subject("Welcome To eMobilis");
            $message->from("info@emobilis.org","Welcome");
        });*/

        return back()->with('message',"Thank you $request->full_names . Your Registration was successful.");
    }

}
