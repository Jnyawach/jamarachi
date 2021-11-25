<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class AdminFaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=FaqCategory::all();
        return view('admin.faqs.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=FaqCategory::pluck('name', 'id');
        return  view('admin.faqs.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'faq_category_id' => 'required','max:3',
            'quiz' => 'required', 'max:255',
            'answer' => 'required',
        ]);
        $faq=Faq::create([
            'faq_category_id'=>$validated['faq_category_id'],
            'quiz'=>$validated['quiz'],
            'answer'=>$validated['answer']

        ]);

        return  redirect('admin/homepage/faqs')->with('status', 'Question Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category=FaqCategory::findBySlugOrFail($id);
        return  view('admin.faqs.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category=FaqCategory::pluck('name', 'id');
        $faq=Faq::findOrFail($id);
        return view('admin.faqs.edit', compact('faq','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $faq=Faq::findOrFail($id);
        $validated = $request->validate([
            'faq_category_id' => 'required','max:3',
            'quiz' => 'required', 'max:255',
            'answer' => 'required',
        ]);
        $faq->update([
            'faq_category_id'=>$validated['faq_category_id'],
            'quiz'=>$validated['quiz'],
            'answer'=>$validated['answer']

        ]);
        return  redirect('admin/homepage/faqs')->with('status', 'Question Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $faq=Faq::findOrFail($id);
        $faq->delete();
        return  redirect()->back()->with('Status','Successfully Deleted');
    }
}
