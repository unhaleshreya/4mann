<?php

namespace App\Http\Controllers;

use App\Models\leadership;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    // Show list
    public function index()
    {
        $leaders = leadership::all();
        return view('admin.aboutUs.leadershipTeam', compact('leaders'));
    }

    // Store new leader
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'required|string|max:255',
            'content1'  => 'required|string',
            'content2'  => 'required|string',
        ]);

        leadership::create($request->all());

        return redirect()->back()->with('success', 'Leader added successfully.');
    }

    // Edit (AJAX)
    public function edit($id)
{
    $leader = leadership::findOrFail($id);
    return response()->json($leader);
}

public function update(Request $request, $id)
{
    $request->validate([
        'content1' => 'nullable|string',
        'content2' => 'nullable|string',
    ]);

    $leader = leadership::findOrFail($id);
    $leader->update([
        'content1' => $request->content1,
        'content2' => $request->content2,
    ]);

    return redirect()->back()->with('success', 'Contents updated successfully.');
}


    // Delete
    public function destroy($id)
    {
        $leader = leadership::findOrFail($id);
        $leader->delete();

        return redirect()->back()->with('success', 'Leader deleted successfully.');
    }
        public function viewLeadershipTeam()
{
    $leaders = leadership::all();
    return view('pages.leadership-team', compact('leaders'));
}
}
