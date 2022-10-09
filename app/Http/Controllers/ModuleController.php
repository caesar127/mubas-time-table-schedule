<?php

namespace App\Http\Controllers;

use App\Models\module;
use App\Models\lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('module', ['module' => module::latest()->filter(request(['search']))->SimplePaginate(4)]);
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
                'module_code'=>'required',
                'module_name'=>'required',
                'lecturer'=>'required',
                'exam'=>'required',
            ]);
    
            module::create($validated);
            
            return redirect('/module')->with('message','Module added successfully');
        } catch (\Throwable $th) {
            return redirect('/module')->with('message','Oops!! Something went wrong');
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
    public function edit(module $module)
    {
        return view('update_module', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, module $module)
    {
        try {
            $request->validate([
                'module_name'=>'required',
                'lecturer'=>'required',
                'exam'=>'required',
            ]);
    
            $module->update($request->all());
            return redirect('/module')->with('message','Module updated successfully');
        } catch (\Throwable $th) {
            return redirect('/module')->with('message','Oops!! Something went wrong');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(module $module)
    {
        try {
            $module->delete();
            return redirect('/module')->with('message','Module deleted successfully');
        } catch (\Throwable $th) {
            return redirect('/module')->with('message','Oops!! Something went wrong');
        }
    }
}
