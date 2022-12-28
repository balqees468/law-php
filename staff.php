
<html>
<style>
.topnav {
  
  background-color: #ffffb3; /gold/
   width: 150px;
  height: 30px;
  padding: 15px;
 box-shadow: 10px 10px 5px #ffffcc;

 
}

.topnav  a {
  display: block;
  float: right;
  color: #250033; /*نهدي*/
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  font-size:18px;
}
.topnav  a:hover:not(.active) {background-color: white;}
.mySlides {display: none; margin-right:200px; margin-top:15px}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  text-align:center;
}


}
.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}.topnav {
  
  background-color: #ffffb3; /gold/
   width: 150px;
  height: 30px;
  padding: 15px;
 box-shadow: 10px 10px 5px #ffffcc;

 
}

.topnav  a {
  display: block;
  float: right;
  color: #250033; /*نهدي*/
  text-align: center;
  padding: 1px 10px;
  text-decoration: none;
  font-size:18px;
}
.topnav  a:hover:not(.active) {background-color: white;}
.mySlides {display: none; margin-right:200px; margin-top:15px}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  text-align:center;
}


}

.active {
  background-color: #717171;
}


.slideshow-container {
  max-width: 1000px;
  position: block;
  margin: auto;
  text-align:center;
}


}
.dropdown {
  position: relative;
  display: inline-block;
}



.dropdown:hover .dropdown-content {
  display: block;
}

.desc {
  padding: 15px;
  text-align: center;  
  
}
 
 .button { background-color: #290033;
  display: block;
  border: none;
  padding: 20px;
  width: 100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 28px;
  margin: 10px 10px;
  cursor: pointer;
  font-family: DecoType Naskh Variants;
  margin-left:100px;

}
.button1 {border-radius: 10%;}
.button2 {border-radius: 10%;}
.button3 {border-radius: 10%;}
.vertical-center {
  margin: 0;
  margin-left: 1000px;
  color: #F0E169;
  position: absolute;
  top: 70%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.vertical-center a{
  color: #F0E169;
  font-decoration: none;

}
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;} 



:root{
  --font1:'Nova Round', cursive;
  --font2: 'Margarine', cursive;
  --color1: rgb(37, 0, 51);
  --weekHeaderBGColor:rgb(37, 0, 51);
  --todayTextColor:rgba(234,43,187);
  --dayActiveColor:rgba(68, 91, 222,0.9);
  --dayHoverColor:rgba(222, 216, 68,0.3);
  --borderColor:rgba(0,0,0,0.1);
  --fullDayHeight:6rem;
  --transitionTime:300ms;
}

.calendar-wrapper{
  height:calc(var(--fullDayHeight)*7);
  width:70em;
  box-sizing:content-box;
  display:flex;
  position:relative;
  justify-content: center;
  overflow:hidden;
  9
}

.calendar{
  position:absolute;
  transform:initial;
  font-family:var(--font2);
  display: inline-grid;
  grid-template:
      "M M M M M M M"
      "W W W W W W W"
      "Days Days Days Days Days Days Days"
}
/*Headings*/
.display.month{
  font-size: 2rem;
  margin: 0 auto;
}

.display.week div{
  padding:0 0.2em;
}

.display.week{
  font-size:1.2em;
  border-radius:6px 6px 0 0;
  grid-area: W;
}

/* Individual Units*/

.calendar .header{
  font-family:var(--font1);
  text-align:center;
}

.week{
  display: grid;
  justify-content:center;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.3);
  grid-template-columns: repeat(7, 1fr);
}

.header.week{
  background-color:var(--weekHeaderBGColor);
  color:white;
}
.calendar .row{
  display:flex;
  flex-flow:row nowrap;
}

.days{
  width:100%;
  grid-area: Days;
  grid-auto-rows: var(--fullDayHeight);
}

.day{
  cursor:pointer;
  position:relative;
  border-collapse:collapse;
  border-top:1px solid var(--borderColor);
  padding:2px;
}

.day.today{
  color:var(--todayTextColor);
}

.day.today:before{
  content:"";
  position:absolute;
  background-color:var(--color1);
  filter:hue-rotate(40deg);
  height:5px;
  width:5px;
  border-radius:50%;
  top:4px;
  right:5px;
  z-index:-1;
}


.day:not(:nth-child(7n+0)){
  border-right:1px solid var(--borderColor);
}

.day.active {
  color:white  !important;
  background-color:var(--dayActiveColor)!important;
}

.blank.day{
  background-color: rgba(30,30,30, 0.2);
  color:hsl(240,20%,50%);
  filter:grayscale(0.5);
  opacity:0.4;
}
.day:hover, .day:active, .blank.day:hover, .blank.day:active{
  background-color:var(--dayHoverColor);
}

/* mini class styling*/
.mini .days{
  grid-auto-rows: min-content;
}

.calendar-wrapper.mini{
  width:20rem;
  height:15rem;
}

.mini .week{
  grid-auto-columns: fit-content(0.5rem);
  grid-auto-rows: fit-content(0.5rem);
}

.mini .day{
  text-align:center;
  font-size:1.2rem;
  padding:0;
}
/*UI Components*/

.calendar .mainheader{
  grid-area: M;
  display:flex;
  flex-flow:row nowrap;
  justify-content: center;
  text-transform:uppercase;
}

.calendar .arrow{
  transform:scale(1.2);
  border-radius:50%;
  background-color:var(--color1);
  height:1em;
  width:1em;
  color:white;
  line-height:0.8em;
  text-align:center;
  user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  cursor:pointer;
  margin:0.5em;
}

.calendar .arrow.left:after{
  content:"\02039";
}
.calendar .arrow.right:after{
  content:"\0203A";
}

/* Animations */

.anim-slide-left-in{
  animation: kfSlideLeftIn var(--transitionTime) linear ;
}

.anim-slide-left-out{
  animation: kfSlideLeftOut var(--transitionTime) linear ;
}

.anim-slide-right-in{
  animation: kfSlideLeftOut var(--transitionTime) linear reverse;
}

.anim-slide-right-out{
  animation: kfSlideLeftIn var(--transitionTime) linear reverse;
}
@keyframes kfSlideLeftIn{
  0%{
    opacity:0;
    transform:translate(100%);
  }
  100%{
    opacity:1;
    transform:translate(0);
  }
}

@keyframes kfSlideLeftOut{
  0%{
    opacity:1;
    transform:translate(0);
  }
  100%{
    opacity:0;
    transform:translate(-100%);
  }
}

#input-date{
  height:10em;
}

/*Google fonts*/
/* latin-ext */
@font-face {
  font-family: 'Margarine';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Margarine'), local('Margarine-Regular'), url(https://fonts.gstatic.com/s/margarine/v8/qkBXXvoE6trLT9Y7YLyu7Z5KoAU.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Margarine';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Margarine'), local('Margarine-Regular'), url(https://fonts.gstatic.com/s/margarine/v8/qkBXXvoE6trLT9Y7YLyu455K.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin */
@font-face {
  font-family: 'Nova Round';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local('Nova Round'), local('NovaRound'), url(https://fonts.gstatic.com/s/novaround/v11/flU9Rqquw5UhEnlwTJYTUYDUeA.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}



.ra
{align-content:right;
position:absolute;
left:50%;
top:35%;
margin-left:100px;
}
.R {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}


.butt {
  background-color: #250033;
  width: 400px;
  height: 70px;
  color: white;
  border: 2px solid #250033;
}

.butt:hover {
  background-color: white;
  color: #602060;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  text-align: right;
  color:#250033;
  
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border:1px solid #250033;
  width: 35%; /* Could be more or less, depending on screen size */
  height: 50%;
   box-shadow: 7px 7px 5px #250033;
font-size:20px;

}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #250033;
  font-size: 35px;
  font-weight: bold;
 
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
<body>
<div style= "background-color :#250033;height:117px">
 <img src = "11.png" width="100"  align="right" style="margin-top: 20px; margin-right: 20px;" />
 <p style=" color:#F0E169;font-family:DecoType Naskh Variants; font-size:45; margin-left:1125px;margin-top:6px;margin-bottom:6px"> المحكمة الشرعية</p></div>
<div class="topnav">
  
 
 <div class="dropdown">
  <img src="113.png" alt="Cinque Terre" width="65" height="60">
  <div class="dropdown-content">
    <a onclick="document.getElementById('header').style.display='block'" style="width:auto; margin-bottom:0px;margin-top:0px;color:#250033; font-size:14">المعلومات الشخصية</a>

  <br>
  <a href="home.php" alt="Cinque Terre" width="300" height="200">تسجيل الخروج   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg></a>
 <br><br><br>
  <div class="desc">ممدوح الجولاني</div>
  </div>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<div style="display:flex;
  flex-flow:column wrap;
  align-content: left;margin-top:120;margin-left:185;">
 
 <!-- Mount calendar on root-->
  <div id="root"></div>
 

</div>

<div id="root2"></div>


<script>
"use strict"
class Calendar{
  constructor(selectCallback, mini, selectMulti){
    this.root = document.createElement("div");
    this.root.className = `calendar-wrapper${mini?" mini":""}`;
    this.mini = mini;
    selectMulti? this.mode = "multiple":this.mode = "single";
    this.currentDates = new Set() //
    this.calendarsRenderedLeft = [];
    this.calendarsRenderedRight = [];
    let today = new Date();
    this.onselect = selectCallback;
    this.renderCalendar(today.getMonth() + 1, today.getFullYear(), null, today.getDate());
    this.transitionTime = getComputedStyle(document.documentElement).getPropertyValue('--transitionTime').replace(/ms/g, "");
  }
 
  mount(eleement){
    eleement.appendChild(this.root);
  }
/*
* month integer is 1 based (1-12)
* From https://stackoverflow.com/questions/222309/calculate-last-day-of-month-in-javascript
*/
static getDaysInMonth(m, y) {
    return m===2 ? y & 3 || !(y%25) && y & 15 ? 28 : 29 : 30 + (m+(m>>3)&1);
}
/*
 Returns the day as 0 based integer (0-6, sunday-saturday)
*/
static getFirstDay(m, y){
  return new Date(y, m-1, 1).getDay();
}

static getLastDay(m, y){
  return new Date(y, m, 0).getDay();
}

static prevMonth(month){ if (month > 1) { return (month-1) } return 12};
static nextMonth(month){ if (month < 12){return month+1} return 1};
static prevYear(month, year){if (month > 1) {return year} return year-1};
static nextYear(month, year){if (month < 12){return year} return year+1};

static parseDate(MMDDYYYY){
  let arr = MMDDYYYY.split(/\//g);
  let n = (e) => {return Number.parseInt(e)};
  return {month: n(arr[0]), day: n(arr[1]), year: n(arr[2])}
}

static generateDaysLabels(mini){
  let a;
  let b = "";
  if (mini){a = Calendar.DAY["MINI"]} else {a = Calendar.DAY["FULL"]}
  for (let i = 0; i < 7; i++) {
    b += `<div>${a[i]}</div>`
  }
  return b;
}

  static get DAY(){
    return {
    FULL:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],
    MINI:["Su","Mo","Tu","We","Th","Fr","Sa"]
    }

    }
  static get MONTH(){
    return {   FULL: [
  "January" ,
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
],
    MINI: [
  "Jan" ,
  "Feb",
  "Mar",
  "Apr",
  "May",
  "Jun",
  "Jul",
  "Aug",
  "Sep",
  "Oct",
  "Nov",
  "Dec",]}
  }

  get monthLabel(){
    return Calendar.MONTH[this.mini? "MINI":"FULL"];
  }
 
  static dayTemplate(num, month, year, blank, classes){
     return `<div class="${blank? "blank " : ""}day ${classes? classes:""}" data-month="${month}" data-year="${year}" data-day="${num}">${num}</div>`;
  }

  previous(month, year){
    return this.renderCalendar(Calendar.prevMonth(month), Calendar.prevYear(month, year), "right");
  }

  next(month, year){
    return this.renderCalendar(Calendar.nextMonth(month), Calendar.nextYear(month, year), "left");
  }

  generateCalendarHTML(month, year, direction, indicateToday) {
    let html = "";
    let daysInMonth = Calendar.getDaysInMonth(month, year);
    if(!direction) {
      direction = "out";
    }

    let firstDay = Calendar.getFirstDay(month, year);
    if (firstDay > 0){ //first day is not a Sunday
      let p = Calendar.getDaysInMonth(Calendar.prevMonth(month), year);
      for (let f = 0; f < firstDay; f++) {
        html = Calendar.dayTemplate(p, Calendar.prevMonth(month), Calendar.prevYear(month, year), true) + html;
        p--;
      }
    };
    for (let i = 1; i <= daysInMonth; i++) {
      if (indicateToday == i)
      {html += Calendar.dayTemplate(i, month, year, false, "today");}
      else
      {html += Calendar.dayTemplate(i, month, year);}
    }
    let lastDay = Calendar.getLastDay(month, year);
    if (lastDay < 6){ //last day is not a Saturday
      let u = 1;
      for (let l = 6; l > lastDay; l--) {
        html += Calendar.dayTemplate(u, Calendar.nextMonth(month), Calendar.nextYear(month, year), true);
        u++;
      }
    };

    return    `<div class="calendar anim-slide-${direction}-in">
        <div class="mainheader">
          <div class="arrow left"></div>
          <div class="display month header">
          ${this.monthLabel[month - 1]} ${year}
          </div>
          <div class="arrow right"></div>
        </div>
     
        <div class="display week header">
        ${Calendar.generateDaysLabels(this.mini)}
        </div>
     
        <div class="days week">
        ${html}
        </div>
      </div>
      `
  }

  selectDate(target){
    if (this.mode == "single") {
    this.clearSelectedDates();
    target.classList.add("active");
    this.currentDates.add(target);
    } else if (this.mode == "multiple") {
      if (this.currentDates.has(target)) {
        target.classList.remove("active");
        this.currentDates.delete(target);
      } else {
        target.classList.add("active");
        this.currentDates.add(target);
      }
    }
    this.onselect(target);
}

  selectDateTransition(month, year, transition, e){
    if (transition == "next") {
      this.next(month, year).then((res)=>{
        this.selectDate(res.querySelector(`[data-month="${Calendar.nextMonth(month)}"][data-day="${e.target.innerHTML}"]`));
      })
    } else if (transition == "prev") {
      this.previous(month, year).then((res)=>{
        this.selectDate(res.querySelector(`[data-month="${Calendar.prevMonth(month)}"][data-day="${e.target.innerHTML}"]`));
      })
    }

  }

clearSelectedDates(){
  this.currentDates.forEach(t => {
    t.classList.remove("active");
  })
  this.currentDates.clear();
}

get selectedDates(){
  let result = "";
    this.currentDates.forEach(d=> {
      result += `${d.dataset.month}/${d.innerHTML}/${d.dataset.year}` + `\n`;
    })

  return result;
}

  renderCalendar(month, year, direction, indicateToday){
    return new Promise((resolve, reject) => {
      let newCalendar;

if (this.calendarsRenderedLeft.length > 0 && direction == "right") {
    newCalendar = this.calendarsRenderedLeft.pop();
    newCalendar.classList.add(`anim-slide-${direction}-in`);
} else if (this.calendarsRenderedRight.length > 0 && direction == "left") {
  newCalendar = this.calendarsRenderedRight.pop();
  newCalendar.classList.add(`anim-slide-${direction}-in`);
} else {
  newCalendar = document.createRange().createContextualFragment(this.generateCalendarHTML(month, year, direction, indicateToday));
  newCalendar.querySelector(".arrow.left").addEventListener("click", ()=> {
    this.previous(month, year);
    });
  newCalendar.querySelector(".arrow.right").addEventListener("click", ()=> {
    this.next(month, year);
    });  
       
    let daysNodes = newCalendar.querySelectorAll(".day:not(.blank)");
    daysNodes.forEach((n) => {n.addEventListener("click", (e)=>this.selectDate(e.target))
    })
    daysNodes = newCalendar.querySelectorAll(`[data-month="${Calendar.prevMonth(month)}"][data-year="${Calendar.prevYear(month, year)}"]`);
    daysNodes.forEach((n) => {n.addEventListener("click", (e)=>this.selectDateTransition(month, year, "prev", e))
    })
    daysNodes = newCalendar.querySelectorAll(`[data-month="${Calendar.nextMonth(month)}"][data-year="${Calendar.nextYear(month, year)}"]`);
    daysNodes.forEach((n) => {n.addEventListener("click", (e)=>this.selectDateTransition(month, year, "next", e))
    })
}

    if (this.root.children.length > 0) {
      this.root.appendChild(newCalendar);
      this.root.children[0].classList.add(`anim-slide-${direction}-out`);
      setTimeout(()=>{
        if (direction == "right") {
          this.calendarsRenderedRight.push(this.root.children[0]);
        } else if (direction == "left") {
          this.calendarsRenderedLeft.push(this.root.children[0]);
        }
        this.root.children[0].className = "calendar";
        this.root.children[0].remove();
        this.root.children[0].className = "calendar";
        resolve(this.root.children[0]);
      }, this.transitionTime)
    } else {
      this.root.appendChild(newCalendar);
      this.root.children[0].className = "calendar";
      resolve(this.root.children[0]);
    }

    })
  }
}

/* end Class definition

******** Start main
*/

let inputDate = document.getElementById("input-date");
let inputMode = document.getElementById("input-mode");


let init = () => {
  let myCal = new Calendar(
    function(){
      inputDate.value = this.selectedDates
    }, true);
  myCal.mount(document.getElementById("root"));

  inputMode.addEventListener("change", (e)=>{
    if (e.target.checked) {
      myCal.clearSelectedDates();
      inputDate.value = "";
      myCal.mode = "multiple"
    } else {
      myCal.clearSelectedDates();
      inputDate.value = "";
      myCal.mode = "single"
 }

  })

}

init();
</script>
<div id="header" class="modal" style="display: none;">
  <div class="modal-content animate" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('header').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

  <center>  <div class="container" style="padding-top: 30px;">
      <table>
<tr>
<th><img src = "113.png" width="100" style="margin-left: 40%;"></th>

</tr>
  <tr>
    <td>عبد القادر ادريس</td>
    <th>:الاسم </th>
  </tr>
  <tr>
    <td>56</td>
    <th>:العمر</th>
  </tr>
  <tr>
    <td>قانون شرعي</td>
    <th>:التخصص</th>
  </tr>
  <tr>
    <td>جامعة بيت لحم</td>
    <th>:الجامعة</th>
  </tr>
  <tr>
    <td>21810200@paluniv.edu.ps</td>  
    <th>:الايميل </th>      
  </tr>  
  <tr>
    <td>0597057966</td>
    <th>:رقم الهاتف</th>
</table>
    </div>
	</center>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('header');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<div class="ra">
<fieldset>
<br>
<button class=" R butt"><img src="223.png" style="float:left;align:center margin-right:0.5em margin-top:10px width="70" height="35">تتبع حركات الموظفين </button><br>
<a href="new22.php "><button class=" R butt"><img src="033.png" style="float:left;align:center margin-right:0.5em width="70" height="35">ادخال المعاملات والقضايا</button><br></a>
<button class=" R butt"><img src="001.png" style="float:left;align:center margin-right:0.5em margin-bottom:10em width="70" height="35">ارسال</button><br><br>
</div>
</fieldset>
  </body>
  <script>
setTimeout(function(){
	window.location.href = '/home.php';
}, 1800000);
</script>
  </html>

