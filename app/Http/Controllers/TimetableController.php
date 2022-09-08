<?php

namespace App\Http\Controllers;

use DateTime;
use DateInterval;
use App\Models\department_module;
use App\Models\module;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timetable');
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
        $this->modules = [ 0 => 'Others' ];
        foreach(department_module::all() as $module){
            $exam_date =  $this->allocate_date($request->input('date'), $module->module);
            $this->modules[$module->module] = date('D', $exam_date);
            
        }
        dd($this->modules);
    }

    public function allocate_date($input_date, $module){
        $date = $input_date;
        $input_date = date('d/m/y', strtotime($input_date));
        $input_date = strtotime($input_date);
        $start_date = strtotime("+70 day", $input_date);
        $end_date = strtotime("+80 day", $input_date);
        $exam_date= mt_rand($start_date,$end_date);
        $day = date('D', $exam_date);
        if ($day == 'Sun' || $day == 'Sat'){
            $this->allocate_date($date, $module);
        }else{
            $this->check_classes($module);
            return $exam_date;
        }
    }

    public function check_classes($module){

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
    public function edit($id)
    {
        //
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
    }
}
