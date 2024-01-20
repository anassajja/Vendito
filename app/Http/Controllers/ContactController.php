<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Import the Contact class

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate and store the offer...
        $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all()); // Create a new instance of the Contact class

        return redirect()->route('marketplace'); // Redirect to the marketplace page
    }
    
    public function index()
    {
        $contacts = Contact::all(); // Get all the contacts

        return view('contact', ['contacts' => $contacts]); // Return the view with the contacts
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contact');
    }

}
