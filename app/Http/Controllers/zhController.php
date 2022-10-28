<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\application;
use App\Models\contact_request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationExcept;

class zhController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function apply(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

       $application = new application;
       $application->name = $request->name;
       $application->email = $request->email;
       $application->int_position = $request->int_position;
       $application->address = $request->address;
       $application->message = $request->message;
       $application->save();

       return redirect("/#apply");
       return back()->with('success','Request sent successfully!');
    }
    //
}
