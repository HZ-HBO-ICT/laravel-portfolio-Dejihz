<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq; //add


class FaqController extends Controller
{
    public function index(){
    }

    public function show(){
        $faqs = Faq::all();
        return view('faq.index', ['faqs'=> $faqs] ); //link to welcome.blade.php
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        //clean up
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::find($id);
        return view('faq.edit', ['faq'=> $faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faq');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Faq::find($id);
        $data->delete();
        return redirect('/faq');
    }
}
