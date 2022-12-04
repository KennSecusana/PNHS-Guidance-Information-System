<?php

namespace App\Http\Controllers\Adviser;



use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Parent_EmailController extends Controller
{


    public function __construct()
    {
    }

    public function sendEmail(Request $request){
            $request->validate([
                'parent_email' => 'required|email',
                'parent_name' => 'required|string',
                'content' => 'required|string'
            ]);


            Mail::send('adviserpage.adviser.parent.parent_email.email', ['content' => $request->content, 'parent_name' => $request->parent_name], function($mails) use($request){
                $mails->to($request->parent_email);
                $mails->subject($request->parent_name);
            });
            return redirect()->back()->with('status', 'Email sent successfully!');
    }
}
