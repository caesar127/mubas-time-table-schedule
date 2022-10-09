<?php

namespace App\Http\Controllers;

use App\Models\lecturer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('lecturer', ['lecturers' => lecturer::latest()->filter(request(['search']))->paginate(5)]);
        return view('lecturer', ['lecturer' => lecturer::latest()->filter(request(['search']))->SimplePaginate(5)]);
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
        try {
            $validated = $request->validate([
                'lecturer_id'=> 'required',
                'name'=>'required',
                'email'=>['required','email'],
            ]);
            lecturer::create($validated);
            
            return redirect('/lecturer')->with('message','Lecturer added successfully');
        } catch (\Throwable $th) {
            return redirect('/lecturer')->with('message','Oops!! Something went wrong');
        }
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
    public function edit(lecturer $lecturer)
    {
        return view('update_lecturer', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lecturer $lecturer)
    {
        try {
            $request->validate([
                'name'=>'required',
                'email'=>['required','email'],
            ]);
    
            $lecturer->update($request->all());
            
            return redirect('/lecturer')->with('message','Lecturer Updated successfully');
        } catch (\Throwable $th) {
            return redirect('/lecturer')->with('message','Oops!! Something went wrong');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(lecturer $lecturer)
    {
        try {
            $lecturer->delete();
            return redirect('/lecturer')->with('message','Lecturer Deleted successfully');
        } catch (\Throwable $th) {
            return redirect('/lecturer')->with('message','Oops!! Something went wrong');
        }
        
    }
}
