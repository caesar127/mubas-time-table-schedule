<?php

namespace App\Http\Controllers;

use App\Models\department_module;
use Illuminate\Http\Request;

class DepartmentmoduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departmentsmodule', ['departmentmodule' => department_module::latest()->filter(request(['search']))->SimplePaginate(4)]);
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
            'code'=>'required',
            'department'=>'required',
            'year'=>'required',
            'semester'=>'required',
            'module'=>'required',
        ]);
        
        department_module::create($validated);
        
        return redirect('/departmentsmodule')->with('message','Department Module added successfully');
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
    public function edit($department_module)
    {
        $department_module = department_module::find($department_module);
        return view('update_departmentsmodule', compact('department_module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $department_module)
    {
        $request->validate([
            'department'=>'required',
            'year'=>'required',
            'semester'=>'required',
            'module'=>'required',
        ]);

        $department_module = department_module::find($department_module);
        $department_module->update($request->all());
        
        return redirect('/departmentsmodule')->with('message','Department Module Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($departmentmodule)
    {
        $departmentmodule = department_module::find($departmentmodule);
        $departmentmodule->delete();
        return redirect('/departmentsmodule')->with('message','Department Module deleted successfully');
    }
}
