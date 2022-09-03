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
    text-align: center;
  }
  
  .dycalendar-container {
    display: inline-block;
    border : 1px solid #eee;
}

.dycalendar-container.round-edge {
    border-radius: 5%;
    -o-border-radius: 5%;
    -moz-border-radius: 5%;
    -webkit-border-radius: 5%;
}



/*================================== DAY CALENDAR ========================*/
/*
 * day calendar style
 *-------------------------------------------------*/
.dycalendar-day-container {
    padding : 10px;
    text-align : center;
    font-family : Arial;
}

.dycalendar-day-container div{
    padding : 0;
    margin-bottom : 10px;
}

.dycalendar-day-container .dycalendar-span-day {
    font-size : 110%;
}

.dycalendar-day-container .dycalendar-span-date {
    font-size : 250%;
}

.dycalendar-day-container .dycalendar-span-month-year {
    font-size : 90%
}

/*================================== DAY CALENDAR ENDS HERE ===============*/



/*================================== MONTH CALENDAR DEFAULT ========================*/

/*
 * month calendar style
 *-------------------------------------------------*/
.dycalendar-month-container {
    padding : 10px;
    text-align : center;
    font-family : Arial;
}

.dycalendar-month-container div{
    padding : 0;
    margin-bottom : 10px;
}

.dycalendar-month-container .dycalendar-header {
    position : relative;
}

.dycalendar-month-container .dycalendar-header .dycalendar-prev-next-btn {
    position : absolute;
    top : 0;
    cursor : pointer;
}

.dycalendar-month-container .dycalendar-header .dycalendar-prev-next-btn.prev-btn {
    left : 0;
}

.dycalendar-month-container .dycalendar-header .dycalendar-prev-next-btn.next-btn {
    right : 0;
}

.dycalendar-month-container .dycalendar-span-month-year {
    margin : 5px;
    cursor : pointer;
}

.dycalendar-month-container .dycalendar-body table tr td {
    padding : 5px;
}

.dycalendar-month-container .dycalendar-today-date,
.dycalendar-month-container .dycalendar-target-date {
    background-color: #111;
    color : #fff;
    border-radius: 2px;
}

/*================================== MONTH CALENDAR ENS HERE ===============*/



/*================================== DYCALENDAR SKIN =======================*/

/*
 * calendar skin  (default skin)
 *-------------------------------------------------*/
.dycalendar-container.gradient {
    background: #fff;
    background: linear-gradient(#fff, #d3d3d3);
    background: -o-linear-gradient(#fff, #d3d3d3);
    background: -moz-linear-gradient(#fff, #d3d3d3);
    background: -webkit-linear-gradient(#fff, #d3d3d3);
}

/*
 * calendar skin  (skin-black)
 *-------------------------------------------------*/
.dycalendar-container.skin-black {
    color : #fff;
    background-color: #111;
    border : 0;
}

.dycalendar-container.skin-black.gradient {
    background: #111;
    background: linear-gradient(#555, #111);
    background: -o-linear-gradient(#555, #111);
    background: -moz-linear-gradient(#555, #111);
    background: -webkit-linear-gradient(#555, #111);
}

.dycalendar-container.skin-black .dycalendar-today-date,
.dycalendar-container.skin-black .dycalendar-target-date {
    background-color: #fff;
    color : #111;
    border-radius: 2px;
}

/*
 * calendar skin  (skin-blue)
 *-------------------------------------------------*/
.dycalendar-container.skin-blue {
    color : #fff;
    background-color: #3c99d3;
    border : 0;
}

.dycalendar-container.skin-blue.gradient {
    background: #3c99d3;
    background: linear-gradient(#5ebbf5, #3c99d3);
    background: -o-linear-gradient(#5ebbf5, #3c99d3);
    background: -moz-linear-gradient(#5ebbf5, #3c99d3);
    background: -webkit-linear-gradient(#5ebbf5, #3c99d3);
}

.dycalendar-container.skin-blue .dycalendar-today-date,
.dycalendar-container.skin-blue .dycalendar-target-date {
    background-color: #fff;
    color : #3c99d3;
    border-radius: 2px;
}

/*
 * calendar skin  (skin-green)
 *-------------------------------------------------*/
.dycalendar-container.skin-green {
    color : #fff;
    background-color: #2bb063;
    border : 0;
}

.dycalendar-container.skin-green.gradient {
    background: #2bb063;
    background: linear-gradient(#3dd175, #2bb063);
    background: -o-linear-gradient(#3dd175, #2bb063);
    background: -moz-linear-gradient(#3dd175, #2bb063);
    background: -webkit-linear-gradient(#3dd175, #2bb063);
}

.dycalendar-container.skin-green .dycalendar-today-date,
.dycalendar-container.skin-green .dycalendar-target-date {
    background-color: #fff;
    color : #2bb063;
    border-radius: 2px;
}

/*
 * calendar skin  (skin-purple)
 *-------------------------------------------------*/
.dycalendar-container.skin-purple {
    color : #fff;
    background-color: #975ea4;
    border : 0;
}

.dycalendar-container.skin-purple.gradient {
    background: #975ea4;
    background: linear-gradient(#ca82d7, #975ea4);
    background: -o-linear-gradient(#ca82d7, #975ea4);
    background: -moz-linear-gradient(#ca82d7, #975ea4);
    background: -webkit-linear-gradient(#ca82d7, #975ea4);
}

.dycalendar-container.skin-purple .dycalendar-today-date,
.dycalendar-container.skin-purple .dycalendar-target-date {
    background-color: #fff;
    color : #975ea4;
    border-radius: 2px;
}

/*
 * calendar skin  (skin-red)
 *-------------------------------------------------*/
.dycalendar-container.skin-red {
    color : #fff;
    background-color: #e94d40;
    border : 0;
}

.dycalendar-container.skin-red.gradient {
    background: #e94d40;
    background: linear-gradient(#fb6f62, #e94d40);
    background: -o-linear-gradient(#fb6f62, #e94d40);
    background: -moz-linear-gradient(#fb6f62, #e94d40);
    background: -webkit-linear-gradient(#fb6f62, #e94d40);
}

.dycalendar-container.skin-red .dycalendar-today-date,
.dycalendar-container.skin-red .dycalendar-target-date {
    background-color: #fff;
    color : #e94d40;
    border-radius: 2px;
}

/*
 * calendar skin  (skin-spacegray)
 *-------------------------------------------------*/
.dycalendar-container.skin-spacegray {
    color : #fff;
    background-color: #343d46;
    border : 0;
}

.dycalendar-container.skin-spacegray.gradient {
    background: #343d46;
    background: linear-gradient(#454e57, #343d46);
    background: -o-linear-gradient(#454e57, #343d46);
    background: -moz-linear-gradient(#454e57, #343d46);
    background: -webkit-linear-gradient(#454e57, #343d46);
}

.dycalendar-container.skin-spacegray .dycalendar-today-date,
.dycalendar-container.skin-spacegray .dycalendar-target-date {
    background-color: #fff;
    color : #343d46;
    border-radius: 2px;
}

/*================================== DYCALENDAR SKIN ENDS HERE =============*/


/*================================== DYCALENDAR SHADOW =====================*/
/*
 * calendar shadow  (shadow-default)
 *-------------------------------------------------*/
 .dycalendar-container.shadow-default {
     -o-box-shadow: 0 4px 4px 0 rgba(50, 50, 50, 0.4);
     -moz-box-shadow: 0 4px 4px 0 rgba(50, 50, 50, 0.4);
     -webkit-box-shadow: 0 4px 4px 0 rgba(50, 50, 50, 0.4);
     box-shadow: 0 4px 4px 0 rgba(50, 50, 50, 0.4);
 }

 /*
  * calendar shadow  (shadow-black)
  *-------------------------------------------------*/
.dycalendar-container.shadow-black {
    -o-box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.4);
    -moz-box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.4);
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.4);
}

/*
 * calendar shadow  (shadow-blue)
 *-------------------------------------------------*/
.dycalendar-container.shadow-blue {
   -o-box-shadow: 0 4px 4px 0 rgba(60, 153, 211, 0.4);
   -moz-box-shadow: 0 4px 4px 0 rgba(60, 153, 211, 0.4);
   -webkit-box-shadow: 0 4px 4px 0 rgba(60, 153, 211, 0.4);
   box-shadow: 0 4px 4px 0 rgba(60, 153, 211, 0.4);
}

/*
 * calendar shadow  (shadow-green)
 *-------------------------------------------------*/
.dycalendar-container.shadow-green {
   -o-box-shadow: 0 4px 4px 0 rgba(43, 176, 99, 0.4);
   -moz-box-shadow: 0 4px 4px 0 rgba(43, 176, 99, 0.4);
   -webkit-box-shadow: 0 4px 4px 0 rgba(43, 176, 99, 0.4);
   box-shadow: 0 4px 4px 0 rgba(43, 176, 99, 0.4);
}

/*
 * calendar shadow  (shadow-purple)
 *-------------------------------------------------*/
.dycalendar-container.shadow-purple {
   -o-box-shadow: 0 4px 4px 0 rgba(151, 94, 164, 0.4);
   -moz-box-shadow: 0 4px 4px 0 rgba(151, 94, 164, 0.4);
   -webkit-box-shadow: 0 4px 4px 0 rgba(151, 94, 164, 0.4);
   box-shadow: 0 4px 4px 0 rgba(151, 94, 164, 0.4);
}

/*
 * calendar shadow  (shadow-red)
 *-------------------------------------------------*/
.dycalendar-container.shadow-red {
   -o-box-shadow: 0 4px 4px 0 rgba(233, 77, 64, 0.4);
   -moz-box-shadow: 0 4px 4px 0 rgba(233, 77, 64, 0.4);
   -webkit-box-shadow: 0 4px 4px 0 rgba(233, 77, 64, 0.4);
   box-shadow: 0 4px 4px 0 rgba(233, 77, 64, 0.4);
}

/*
 * calendar shadow  (shadow-spacegray)
 *-------------------------------------------------*/
.dycalendar-container.shadow-spacegray {
   -o-box-shadow: 0 4px 4px 0 rgba(52, 61, 70, 1);
   -moz-box-shadow: 0 4px 4px 0 rgba(52, 61, 70, 1);
   -webkit-box-shadow: 0 4px 4px 0 rgba(52, 61, 70, 1);
   box-shadow: 0 4px 4px 0 rgba(52, 61, 70, 1);
}

/*================================== DYCALENDAR SHADOW ENDS HERE ===========*/

  </style>
  <div style="background: #fff; height: 500px; width: 400px; border-radius: 20px; margin:20px;">
    <h1>Today calendar (skin-black shadow-default)</h1>
    
    <div class="calendar-container">
        <div id = "dycalendar-month-prev-next-button" class="dycalendar-container skin-purple shadow-default"></div>
    </div>
    <script>!function(t){"use strict";function e(t,e){var a,n,r,d,l,i;for(a=o.createElement("table"),n=o.createElement("tr"),l=0;l<=6;l+=1)(r=o.createElement("td")).innerHTML="SMTWTFS"[l],n.appendChild(r);for(a.appendChild(n),n=o.createElement("tr"),l=0;l<=6&&l!==t.firstDayIndex;l+=1)r=o.createElement("td"),n.appendChild(r);for(i=1;l<=6;)(r=o.createElement("td")).innerHTML=i,t.today.date===i&&t.today.monthIndex===t.monthIndex&&!0===e.highlighttoday&&r.setAttribute("class","dycalendar-today-date"),e.date===i&&e.month===t.monthIndex&&!0===e.highlighttargetdate&&r.setAttribute("class","dycalendar-target-date"),n.appendChild(r),i+=1,l+=1;for(a.appendChild(n),d=3;d<=7;d+=1){for(n=o.createElement("tr"),l=0;l<=6;l+=1){if(i>t.totaldays)return a.appendChild(n),a;(r=o.createElement("td")).innerHTML=i,t.today.date===i&&t.today.monthIndex===t.monthIndex&&!0===e.highlighttoday&&r.setAttribute("class","dycalendar-today-date"),e.date===i&&e.month===t.monthIndex&&!0===e.highlighttargetdate&&r.setAttribute("class","dycalendar-target-date"),i+=1,n.appendChild(r)}a.appendChild(n)}return a}function a(t,a){var n,r,d,l;return n=e(t,a),(d=o.createElement("div")).setAttribute("class","dycalendar-month-container"),(r=o.createElement("div")).setAttribute("class","dycalendar-header"),r.setAttribute("data-option",JSON.stringify(a)),"show"===a.prevnextbutton&&((l=o.createElement("span")).setAttribute("class","dycalendar-prev-next-btn prev-btn"),l.setAttribute("data-date",a.date),l.setAttribute("data-month",a.month),l.setAttribute("data-year",a.year),l.setAttribute("data-btn","prev"),l.innerHTML="&lt;",r.appendChild(l)),(l=o.createElement("span")).setAttribute("class","dycalendar-span-month-year"),"mmm"===a.monthformat?l.innerHTML=t.monthName+" "+t.year:"full"===a.monthformat&&(l.innerHTML=t.monthNameFull+" "+t.year),r.appendChild(l),"show"===a.prevnextbutton&&((l=o.createElement("span")).setAttribute("class","dycalendar-prev-next-btn next-btn"),l.setAttribute("data-date",a.date),l.setAttribute("data-month",a.month),l.setAttribute("data-year",a.year),l.setAttribute("data-btn","next"),l.innerHTML="&gt;",r.appendChild(l)),d.appendChild(r),(r=o.createElement("div")).setAttribute("class","dycalendar-body"),r.appendChild(n),d.appendChild(r),d}function n(t,e){var a,n,r;return(n=o.createElement("div")).setAttribute("class","dycalendar-day-container"),(a=o.createElement("div")).setAttribute("class","dycalendar-header"),(r=o.createElement("span")).setAttribute("class","dycalendar-span-day"),"ddd"===e.dayformat?r.innerHTML=y.ddd[t.targetedDayIndex]:"full"===e.dayformat&&(r.innerHTML=y.full[t.targetedDayIndex]),a.appendChild(r),n.appendChild(a),(a=o.createElement("div")).setAttribute("class","dycalendar-body"),(r=o.createElement("span")).setAttribute("class","dycalendar-span-date"),r.innerHTML=t.date,a.appendChild(r),n.appendChild(a),(a=o.createElement("div")).setAttribute("class","dycalendar-footer"),(r=o.createElement("span")).setAttribute("class","dycalendar-span-month-year"),"mmm"===e.monthformat?r.innerHTML=t.monthName+" "+t.year:"full"===e.monthformat&&(r.innerHTML=t.monthNameFull+" "+t.year),a.appendChild(r),n.appendChild(a),n}function r(t,e){var a;for(a in e)!1===t.hasOwnProperty(a)&&(t[a]=e[a]);return t}function d(e,a,n){var r,d,l=new Date,i={};return e<s||e>m?(t.console.error("Invalid Year"),!1):a>11||a<0?(t.console.error("Invalid Month"),!1):n>31||n<1?(t.console.error("Invalid Date"),!1):(i.year=e,i.month=a,i.date=n,i.today={},r=l.toString().split(" "),d=y.ddd.indexOf(r[0]),i.today.dayIndex=d,i.today.dayName=r[0],i.today.dayFullName=y.full[d],d=u.mmm.indexOf(r[1]),i.today.monthIndex=d,i.today.monthName=r[1],i.today.monthNameFull=u.full[d],i.today.date=l.getDate(),i.today.year=r[3],l.setDate(1),l.setMonth(a),l.setFullYear(e),r=l.toString().split(" "),d=y.ddd.indexOf(r[0]),i.firstDayIndex=d,i.firstDayName=r[0],i.firstDayFullName=y.full[d],d=u.mmm.indexOf(r[1]),i.monthIndex=d,i.monthName=r[1],i.monthNameFull=u.full[d],l.setFullYear(e),l.setMonth(a+1),l.setDate(0),i.totaldays=l.getDate(),l.setFullYear(e),l.setMonth(a),l.setDate(n),r=l.toString().split(" "),d=y.ddd.indexOf(r[0]),i.targetedDayIndex=d,i.targetedDayName=r[0],i.targetedDayFullName=y.full[d],i)}function l(e){var r,l,i,s,m,u="id";switch("#"===e.target[0]?u="id":"."===e.target[0]&&(u="class"),l=e.target.substring(1),e.type){case"day":r=n(d(e.year,e.month,e.date),e);break;case"month":r=a(d(e.year,e.month,e.date),e);break;default:return t.console.error("Invalid type"),!1}if("id"===u)o.getElementById(l).innerHTML=r.outerHTML;else if("class"===u)for(i=0,s=(m=o.getElementsByClassName(l)).length;i<s;i+=1)m[i].innerHTML=r.outerHTML}var i={},o=t.document,s=1900,m=9999,u={full:["January","February","March","April","May","June","July","August","September","October","November","December"],mmm:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},y={full:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],d:["S","M","T","W","T","F","S"],dd:["Su","Mo","Tu","We","Th","Fr","Sa"],ddd:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]};i.draw=function(e){if(void 0===e)return t.console.error("Option missing"),!1;var a=new Date;l(e=r(e,{type:"day",month:a.getMonth(),year:a.getFullYear(),date:a.getDate(),monthformat:"full",dayformat:"full",highlighttoday:!1,highlighttargetdate:!1,prevnextbutton:"hide"}))},o.body.onclick=function(e){var a,n,r,d,i,o,s=(e=t.event||e).target||e.srcElement;s&&s.classList&&s.classList.contains("dycalendar-prev-next-btn")&&(a=parseInt(s.getAttribute("data-date")),n=parseInt(s.getAttribute("data-month")),r=parseInt(s.getAttribute("data-year")),d=s.getAttribute("data-btn"),i=JSON.parse(s.parentElement.getAttribute("data-option")),"prev"===d?(n-=1)<0&&(r-=1,n=11):"next"===d&&(n+=1)>11&&(r+=1,n=0),i.date=a,i.month=n,i.year=r,l(i)),s&&s.classList&&s.classList.contains("dycalendar-span-month-year")&&(i=JSON.parse(s.parentElement.getAttribute("data-option")),o=new Date,i.date=o.getDate(),i.month=o.getMonth(),i.year=o.getFullYear(),l(i))},t.dycalendar=i}("undefined"!=typeof window?window:this);</script>
    <script>
      dycalendar.draw({
        target: '#dycalendar-month-prev-next-button',
        type: 'month',
        prevnextbutton : "show"
      });
    </script>
  </div>
  <div class="grid-container">
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-faculty-100.png" class="w-min h-max" alt="">
        </div>
        <div class="" style=" text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p>8</p>
          <p>Faculties</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-department-100.png" class="w-min h-max" alt="">
        </div>
        <div class="" style=" text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p>8</p>
          <p>Departm...</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-training-100 (1).png" class="w-min h-max" alt="">
        </div>
        <div class="" style=" text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p>8</p>
          <p>Lecturers</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/module.png" class="w-min h-max" alt="">
        </div>
        <div class="" style=" text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p>8</p>
          <p>Modules</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-class-100.png" class="w-min h-max" alt="">
        </div>
        <div class="" style=" text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p>8</p>
          <p>Classes</p>
        </div>
      </div>
      <div class="grid-item" style="display: flex; justify-content: space-between;">
        <div class="" style="padding-left: 0.2rem; padding-top: 1.5rem;">
          <img src="images/icons8-room-100.png" class="w-min h-max" alt="">
        </div>
        <div class="" style=" text-align: right; padding-right: 0.8rem; padding-top: 2.5rem;">
          <p>8</p>
          <p>Room</p>
        </div>
      </div>
  </div>