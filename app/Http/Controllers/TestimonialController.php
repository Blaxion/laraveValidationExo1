<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonial',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required | max:20',
            'quote' => ['required', 'max:300'],
            'rating' => 'required |integer| between:1,5'
        ]);
        $store = new Testimonial;
        $store->name = $request->name;
        $store->quote = $request->quote;
        $store->rating = $request->rating;
        
        $store->save();
        return redirect('/testimonial')->with('success', 'new testimonial has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        $show=$testimonial;
        return view('pages.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $edit=$testimonial;
        return view('pages.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        request()->validate([
            'name' => 'required | max:20',
            'quote' => ['required', 'max:300'],
            'rating' => 'required |integer| between:1,5'
        ]);
        $update = $testimonial;
        $update->name = $request->name;
        $update->quote = $request->quote;
        $update->rating = $request->rating;
        
        $update->save();
        return redirect('/testimonial')->with('success', 'edited with success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('warning'," testi supprimé");
    }
}
