<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\careers;

class CareerController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:careers,email',
            'phone' => 'required|digits:10',

            'attachment' => 'required|mimes:pdf,doc,docx|max:2048',
            'message' => 'nullable|string|max:1000',
        ]);

        // Handle file upload
        if ($request->hasFile('attachment')) {
            $resumePath = $request->file('attachment')->store('attachment', 'public');
        } else {
            return back()->withErrors(['attachment' => 'Resume upload failed.'])->withInput();
        }

        // Save to database
         careers::create([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'resume_path' => $resumePath,
            'message' => $request->message,
        ]);  

        return response()->json([
            'success' => true,
            'message' => 'Your application has been submitted successfully!'
        ]);
    }
    public function index(){
         $careers = careers::all();
       
        return view("admin.careers.index", compact("careers"));
    }
}
