<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Prospect;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.index', compact('contacts'));
    }

    public function registrations()
    {
        $prospects = Prospect::latest()->get();
        return view('admin.registrations', compact('prospects'));
    }

    public function deleteEnquiry(Request  $request)
    {
        $id = $request->id;
        Contact::destroy($id);
        return back()->with('message',"Record deleted successfully.");
    }

    public function deleteRegistration(Request  $request)
    {
        $id = $request->id;
        Prospect::destroy($id);
        return back()->with('message',"Registration deleted successfully.");
    }

    public function clearEnquiry(Request  $request)
    {
        $id = $request->id;
        Contact::where('id',$id)->update(['contacted'=>true]);
        return back()->with('message',"Enquiry updated successfully.");
    }

    public function clearRegistration(Request  $request)
    {
        $id = $request->id;
        Prospect::where('id',$id)->update(['contacted'=>true]);
        return back()->with('message',"Registration updated successfully.");
    }
}
