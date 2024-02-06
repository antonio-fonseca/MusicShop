<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('home');
    }
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function submit(Request $request){
        $message = $request->input('message');
        $name = Auth::user()->name;
        $date = compact('message', 'name');

        Mail::to(Auth::user()->email)->send(new ContactMail($date));
        return redirect()->route('home');
    }
}
