<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:contacts,email',
        'phone' => 'required|digits:10',
        'company-name' => 'required|string|max:255',
        'who-we-serve' => 'required|string',
        'message' => 'nullable|string',
    ]);

    Contact::create([
        'fname' => $validated['fname'],
        'lname' => $validated['lname'],
        'email' => $validated['email'],
        'phone' => $validated['phone'],
        'company_name' => $validated['company-name'],
        'who_we_serve' => $validated['who-we-serve'],
        'message' => $validated['message'] ?? null,
    ]);

    return response()->json(['success' => 'Message sent successfully']);
}
public function index(){
         $contact = Contact::all();
       
        return view("admin.contact.index", compact("contact"));
    }
}
