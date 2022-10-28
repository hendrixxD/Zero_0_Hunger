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

    public function farmdata(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

       $contact_request = new contact_request;
       $contact_request->name = $request->name;
       $contact_request->email = $request->email;
       $contact_request->number = $request->number;
       $contact_request->address = $request->address;
       $contact_request->service_request = $request->service_request;
       $contact_request->experience = $request->experience;
       $contact_request->problem = $request->problem;
       $contact_request->solution = $request->solution;
       $contact_request->flood_experience = $request->flood_experience;
       $contact_request->farm_location = $request->farm_location;
       $contact_request->flood_impact = $request->flood_impact;
       $contact_request->recovery = $request->recovery;
       $contact_request->cost_peryear = $request->cost_peryear;
       $contact_request->profit_made = $request->profit_made;
       $contact_request->perm_to_share = $request->perm_to_share;

       $contact_request->save();

       return redirect("/contact#data-form");
       return back()->with('success','Data sent successfully! Thank you');
    }

    public function about()
    {
        return view('about');
    }
    //
}
