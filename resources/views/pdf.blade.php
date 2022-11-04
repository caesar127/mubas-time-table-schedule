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
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Date</th> 
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Time</th>
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Hours</th>
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Module Code</th>
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Module Name</th>
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Class</th>
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Nos</th>
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Room</th> 
              <th scope="col" class="text-sm font-medium text-gray-900 " style="border-style: solid;">Examiner</th>
            </tr>
        </thead class="">
        <tbody>
            @unless (count($timetable) == 0)
                @foreach ($timetable as $exam)
                <tr>
                  <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">{{$exam->date}}</td>
                  <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">{{$exam->time}}</td>
                  <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">3</td>
                    <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">{{$exam->module}}</td>
                    <?php $module =DB::table('module')->select('module_name')->where('module_code',$exam->module)->value('module_name');?>
                    <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid; border-spacing: 0px;" >{{$module}}</td>
                    <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">{{$exam->class}}</td>
                    <?php $class =DB::table('class')->select('students')->where('class_code',$exam->class)->value('students');?>
                    <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">{{$class}}</td>
                    <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid;">{{$exam->room}}</td>
                    
                    <?php 
                    $lec =DB::table('module')->select('lecturer')->where('module_code',$exam->module)->value('lecturer');
                    $lecturer =DB::table('lecturer')->select('name')->where('lecturer_id',$lec)->value('name');
                    ?>
                    <td class=" whitespace-nowrap text-sm font-medium text-gray-900" style="border-style: solid; border-spacing: 0px;">{{$lecturer}}</td>  
                </tr>
                @endforeach
                @else
                <p class="px-3 py-3 whitespace-nowrap text-sm font-medium text-gray-900">No exam available</p>
                @endunless
          </tbody>
    </table>
  </body>
</html>