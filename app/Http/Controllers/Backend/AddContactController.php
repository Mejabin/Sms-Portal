<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AddContactController extends Controller
{
    public function AddContactForm()
    {
        return view("Backend.AddContact.addContact");
    }

    public function PostContact(Request $request)
    {
        // dd($request);
        $name = $request->name;
        $address = $request->address;
        $mobile = $request->mobile;

        $contact = new Contact();
        $contact->name = $name;
        $contact->address = $address;
        $contact->mobile_no = $mobile;
        $contact->save();

        return redirect()->back()->with('success', 'Successfully added');
    }
}
