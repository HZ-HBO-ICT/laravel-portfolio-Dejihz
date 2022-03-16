<?php

namespace App\Http\Controllers;

use App\Models\Grades;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function index()
    {
        $grades = Grades::all();
        return view ('grade.index', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGradesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created = request()->validate([
            'course_name'=> ['required', 'max:255'],
            'test_name'=> 'required',
            'best_grade' => 'min:0'
        ]);

        // $grade->addResult($created['best_grade']);
        Grades::create($created);

        return redirect(route('grade.index'));    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function edit(Grades $grade)
    {
        return view('grade.edit', ['grade'=> $grade]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradesRequest  $request
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grades $grade)
    {
        $validated = request()->validate([
            'course_name'=> ['required', 'max:255'],
            'test_name'=> 'required',
            'best_grade' => 'min:0'
        ]);

        $grade->addResult($validated['best_grade']);
        $grade-> update($validated);

        return redirect(route('grade.index'));    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grades  $grades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Grades::findOrFail($id);
        $data->delete();
        return redirect(route('grade.index'));    }
}
