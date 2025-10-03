<?php

namespace App\Http\Controllers;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index()
    {
        $faqs = Faqs::all();
        return view('admin.faqs.index', compact('faqs'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);
        Faqs::create($request->all());
        return redirect()->route('faqs.index')->with('success', 'Faq added successfully');
    }
    public function edit($id)
    {
        $faq = Faqs::findOrFail($id);
       return response()->json($faq);
    }
    public function update(Request $request)
    {
        $request->validate([  
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
        ]);
        $faq_id = $request->faq_id;
        $faq = Faqs::findOrFail($faq_id);
        $faq->update($request->all());
        return redirect()->route('faqs.index')->with('success', 'Faq updated successfully');
    }
    public function destroy($id)
    {
        $faq = Faqs::findOrFail($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'Faq deleted successfully');
    }
}
