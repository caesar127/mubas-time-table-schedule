<?php

namespace App\Http\Controllers;

use DateTime;
use DateInterval;
use App\Models\room;
use App\Models\module;
use App\Models\classes;
use App\Models\timetable;
use App\Models\department;
use Illuminate\Http\Request;
use App\Models\department_module;

use function GuzzleHttp\Promise\each;
use function PHPUnit\Framework\returnValue;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('timetable', ['timetable' => department::groupBy('year', 'semester')->filter(request(['search']))->SimplePaginate(4)]);
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
        $count = department_module::where('semester', '=', $request->input('semester'))->get();
        $time_table = timetable::where([['year', '=', $request->input('year')],['semester', '=', $request->input('semester')]])->get();
        if(count($time_table) == 0){
            do {
                $this->modules = [ 0 => 'Others' ];
                foreach(department_module::where('semester', '=', $request->input('semester'))->get() as $module){
                    $faculty = department::where('department_code', '=', $module->department)->get();
                    $class = classes::where('department', '=', $module->department)->get();
                    $examdate =  $this->allocate_date($request->input('date'), $module->module);
                    $exam_date =  date('y/m/d',$this->allocate_date($request->input('date'), $module->module));
                    $this->modules[$module->module] = date('D', $examdate);
                    $exam = timetable::where([['class', '=', $class[0]->class_code],['date', '=', $exam_date]])->get();
                    $time = $this->time();
                    $room = $this->select_room($class[0]->students);
                    $examroom = timetable::where([['room', '=', $class[0]->class_code],['time', '=', $time]])->get();
                    if(count($exam) == 0){
                        if(count($examroom) == 0){
                            timetable::insert([
                                'year' => $request->input('year'),
                                'semester' => $request->input('semester'),
                                'faculty' => $faculty[0]->faculty,
                                'class' => $class[0]->class_code,
                                'date' => $exam_date,
                                'time' => $time,
                                'hours' => 3,
                                'students' => $class[0]->students,
                                'room' => $room,
                                'module' => $module->module
                            ]);
                        }else{
                            // return 'room is occupied';
                        }
                    }else{
                        // return 'Class is occupied';
                    }
                }
                $count1 = timetable::where([['year', '=', $request->input('year')],['semester', '=', $request->input('semester')]])->get();
            } while (count($count) < count($count1));
        }else{
            return redirect('/timetable')->with('message','Time table already exists');
        }
        return redirect('/timetable')->with('message','Time table created Successfully');
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
            return $exam_date;
        }
    }

    public function time(){
        $morning = date('H:i:s', strtotime('7:30 AM'));
        $afternoon = date('H:i:s', strtotime('1:00 PM'));
        $array = array($morning, $afternoon);
        $time = $array[rand(0, count($array) - 1)];
        return $time; 
    }

    public function select_room($students){
        $room = room::where('sits', '>=', $students)->inRandomOrder()->first();
        return $room->name;
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
