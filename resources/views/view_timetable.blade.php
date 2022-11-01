@extends('components/Ulayout')
@section('content')
<style>.grid-container {
    display: grid;
    grid-template-columns: auto auto;
  }
  .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 15px;
    font-size: 30px;
    width: 32em;
    text-align: center;
  }
</style>

<div style="background-color: rgba(255, 255, 255, 0.8); border-radius: 10px;">
  <div class="grid-container">
    @unless (count($timetable) == 0)
      @foreach ($timetable as $timetables)
      <div class="grid-item" style="">
        <div class="bg-blue-500 px-2 py-2" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
          <h1 style="font-weight: 500; font-size: 20px; color: #ffffff;">{{$timetables->date}}</h1>
        </div>
        <table style="width: 100%">
          <thead class=" bg-gray-50">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Module Code</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Module Name</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Class</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Room</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Time</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Examiner</th>
            </tr>
          </thead class="">
          <tbody>
              <?php $exams = DB::table('timetable')->select('module','room','class','time')->where('date',$timetables->date)->get();?>
              @unless (count($exams) == 0)
                  @foreach ($exams as $exam)
                  <tr>
                    <div style=" display: flex; justify-content: space-between;">
                      <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$exam->module}}</td>
                      <?php $module =DB::table('module')->select('module_name')->where('module_code',$exam->module)->value('module_name');?>
                      <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$module}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$exam->class}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$exam->room}}</td>
                      <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$exam->time}}</td>
                      
                      <?php 
                        $lec =DB::table('module')->select('lecturer')->where('module_code',$exam->module)->value('lecturer');
                        $lecturer =DB::table('lecturer')->select('name')->where('lecturer_id',$lec)->value('name');
                      ?>
                      <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-900">{{$lecturer}}</td>
                    </div>
                  </tr>
                  @endforeach
              @else
                <p class="px-3 py-3 whitespace-nowrap text-sm font-medium text-gray-900">No exam available</p>
              @endunless
          </tbody>
        </table>
        
      </div>
      @endforeach
      @else
    @endunless
  </div>
  
  <div class="p-4 pt-0">
    {{$timetable->links()}}
  </div>
</div>

@endsection