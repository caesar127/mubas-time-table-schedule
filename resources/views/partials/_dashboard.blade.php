<style>.grid-container {
    display: grid;
    grid-template-columns: auto auto;
    margin: 10px;
  }
  .grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 20px;
    margin: 20px;
    font-size: 30px;
    width: 250px;
    height: 115px;
    text-align: center;
  }
 </style>
 
 
  <div style="background: #fff; height: 440px; width: 350px; border-radius: 20px; margin:20px;">
    <h1>Today calendar (skin-black shadow-default)</h1>
    
    <div class="calendar-container">
        <div id = "dycalendar-month-prev-next-button" class="dycalendar-month-prev-next-button dycalendar-container skin-purple"></div>
    </div>
  </div>
  <div class="grid-container">
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-faculty-100.png" alt="" width="80px">
        </div>
        <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p><?php $Faculties = DB::table('faculty')->get();?>
            {{count($Faculties)}}</p>
          <p>Faculties</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-department-100.png" alt="" width="80px">
        </div>
        <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p><?php $departments = DB::table('department')->get();?>
            {{count($departments)}}</p>
          <p>Department</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-training-100 (1).png" alt="" width="80px">
        </div>
        <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p><?php $lecturer = DB::table('lecturer')->get();?>
            {{count($lecturer)}}</p>
          <p>Lecturers</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/module.png" alt="" width="80px">
        </div>
        <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p><?php $module = DB::table('module')->get();?>
            {{count($module)}}</p>
          <p>Modules</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-class-100.png" alt="" width="80px">
        </div>
        <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p><?php $classes = DB::table('classes')->get();?>
            {{count($classes)}}</p>
          <p>Classes</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-room-100.png" alt="" width="80px">
        </div>
        <div class="" style="font-size: 20px; text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p><?php $room = DB::table('room')->get();?>
            {{count($room)}}</p>
          <p>Room</p>
        </div>
      </div>
  </div>