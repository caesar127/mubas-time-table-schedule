<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="">
        <thead class=" bg-gray-50">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4" style="border: 1px">Module Code</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Module Name</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Class</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Room</th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Time</th> 
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">Examiner</th>
            </tr>
        </thead class="">
        <tbody>
            @unless (count($timetable) == 0)
                @foreach ($timetable as $exam)
                <tr>
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
                </tr>
                @endforeach
                @else
                <p class="px-3 py-3 whitespace-nowrap text-sm font-medium text-gray-900">No exam available</p>
                @endunless
          </tbody>
    </table>
  </body>
</html>