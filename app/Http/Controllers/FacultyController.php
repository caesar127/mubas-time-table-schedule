<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faculty',  ['faculty' => faculty::latest()->filter(request(['search']))->SimplePaginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'faculty_code'=>'required',
            'name'=>'required',
        ]);

        faculty::create($validated);
        
        return redirect('/faculty')->with('message','Faculty added successfully');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(faculty $faculty)
    {
        return view('Ufaculty', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, faculty $faculty)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $faculty->update($request->all());
        
        return redirect('/faculty')->with('message','Faculty Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(faculty $faculty)
    {
        $faculty->delete();
        return redirect('/faculty')->with('message','Faculty Deleted successfully');
    }
}
