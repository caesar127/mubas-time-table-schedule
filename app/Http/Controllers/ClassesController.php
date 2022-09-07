<?php

namespace App\Http\Controllers;

use App\Models\classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classes', ['class' => classes::latest()->filter(request(['search']))->SimplePaginate(4)]);
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
            'class_code'=>'required',
            'name'=>'required',
            'department'=>'required',
            'students'=>'required',
            'status'=>'required',
        ]);

        classes::create($validated);
        
        return redirect('/classes')->with('message','Classes added successfully');
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
    public function edit($classes)
    {
        $classes = classes::find($classes);
        return view('update_classes', compact('classes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $classes)
    {
        $request->validate([
            'name'=>'required',
            'department'=>'required',
            'students'=>'required',
            'status'=>'required',
        ]);

        $class_code = classes::find($classes);
        $class_code->update($request->all());
        
        return redirect('/classes')->with('message','Class Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($classes)
    {
        $class_code = classes::find($classes);
        $class_code->delete();
        return redirect('/classes')->with('message','Class deleted successfully');
    }
}
