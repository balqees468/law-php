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

@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400);
.blue {
  background: #3498db;
}

.purple {
  background: #9b59b6;
}

.navy {
  background: #34495e;
}

.green {
  background: #2ecc71;
}

.red {
  background: #e74c3c;
}

.orange {
  background: #f39c12;
}

.cs335, .cs426, .md303, .md352, .md313, .cs240 {
  font-weight: 300;
  cursor: pointer;
}

body {
  
  padding: 20px;
}

*, *:before, *:after {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

table {
  font-family: 'Open Sans', Helvetica;
  color: #efefef;
}
table tr:nth-child(2n) {
  background: #eff0f1;
}
table tr:nth-child(2n+3) {
  background: #fff;
}
table th, table td {
  padding: 1em;
  width: 10em;
}

.days, .time {
  background: #34495e;
  text-transform: uppercase;
  font-size: 0.6em;
  text-align: center;
}

.time {
  width: 3em !important;
}

/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
  -moz-transition: ease 0.5s all;
  -o-transition: ease 0.5s all;
  -webkit-transition: ease 0.5s all;
  transition: ease 0.5s all;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 7px;
  width: 160px;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  background-color: black;
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid black;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  bottom: 90%;
  filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
  opacity: 1;
}

@import "compass/css3";

@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400);


$blue:    #3498db;
$purple:  #9b59b6;
$navy:    #34495e;
$green:   #2ecc71;
$red:     #e74c3c;
$orange:  #f39c12;

.blue   { background: $blue }
.purple { background: $purple }
.navy   { background: $navy }
.green  { background: $green }
.red    { background: $red }
.orange { background: $orange }

.cs335, .cs426, .md303, .md352, .md313, .cs240 {
    font-weight: 300;
    cursor:pointer;
}

body {
  background: $red;
  padding: 20px;
}

*, *:before, *:after {
  margin:0; padding:0; border:0; outline: 0;
  @include box-sizing(border-box);
}

table {
   font-family: 'Open Sans', Helvetica;
   color: #efefef;
   
 
   tr {
     
     &:nth-child(2n){
        background: #eff0f1;
     }
     
     &:nth-child(2n+3){
        background: #fff;
     }
   }
   
   th, td {
      padding: 1em;
      width: 10em;
   }
}

.days, .time {
  background: $navy;
  text-transform: uppercase;
  font-size: 0.6em;
  text-align: center;
}

.time {
   width: 3em!important;
}


// Tooltip Stuff by Chris Bracco
/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 2;
  cursor: pointer;
 
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  @include opacity(0);
  pointer-events: none;
  @include transition(0.5s ease all);
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 7px;
  width: 160px;
  @include border-radius(6px);
   
  background-color: black;
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
  bottom: 110%;
  left: 50%;
  margin-left: -5px;
  width: 0;
  border-top: 5px solid black;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  bottom: 90%;
  @include opacity(1);
}





</style>
<head>
    <link href="" rel="stylesheet"> <!--  -->
</head>
<body>
<div style= "background-color :#250033;height:117px">
 <img src = "11.png" width="100"  align="right" style="margin-top: 20px; margin-right: 20px;" />
 <p style=" color:#F0E169;font-family:DecoType Naskh Variants; font-size:45; margin-left:1125px;margin-top:6px;margin-bottom:4px"> المحكمة الشرعية</p>
</div>
<div class="topnav">
  
<div class="dropdown">
  <img src="113.png" alt="Cinque Terre" width="65" height="60">
  <div class="dropdown-content">
  <br>
  <center><a href="logout.php" alt="Cinque Terre" style="width: auto; margin-butom:0px; magin-top:0px;color:#250033; font-size:14">تسجيل الخروج</a></center>
  </div>
</div>
</div>
<br>
<br>
<div class='tab' style="margin-left:200px;">
 <table border='0' cellpadding='0' cellspacing='0'>
    <tr class='days'>
      <th></th>
      <th>Monday</th>
      <th>Tuesday</th>
      <th>Wednesday</th>
      <th>Thursday</th>
      <th>Friday</th>
    </tr>
    <tr>
      <td class='time'>8.00</td>
    <td class='cs335 blue' data-tooltip='Software Engineering &amp; Software Process'>  <a href="writ.php">القضية (1)</td></a>
    <td  class='cs426 purple' data-tooltip='Computer Graphics'>CS426 [CS1]</td>
      <td></td>
      <td></td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>9.00</td>
      <td></td>
      <td class='cs335 blue lab' data-tooltip='Software Engineering &amp; Software Process'>CS335 [Lab]</td>
      <td class='md352 green' data-tooltip='Multimedia Production &amp; Management'>MD352 [Kairos]</td>
      <td></td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>10.00</td>
      <td></td>
      <td class='cs335 blue lab' data-tooltip='Software Engineering &amp; Software Process'>CS335 [Lab]</td>
      <td class='md352 green' data-tooltip='Multimedia Production &amp; Management'>MD352 [Kairos]</td>
      <td class='cs240 orange' data-tooltip='Operating Systems'>CS240 [CH]</td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>11.00</td>
      <td></td>
      <td class='md303 navy' data-tooltip='Media &amp; Globalisation'>MD303 [CS2]</td>
      <td class='md313 red' data-tooltip='Special Topic: Multiculturalism &amp; Nationalism'>MD313 [Iontas]</td>
      <td></td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>12.00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>13.00</td>
      <td></td>
      <td></td>
      <td class='cs426 purple' data-tooltip='Computer Graphics'>CS426 [CS2]</td>
      <td class='cs240 orange' data-tooltip='Operating Systems'>CS240 [TH1]</td>
      <td>-</td>
    </tr>
    <tr>
      <td class='time'>14.00</td>
      <td></td>
      <td></td>
      <td></td>
      <td class='cs240 orange lab' data-tooltip='Operating Systems'>CS240 [Lab]</td>
      <td>-</td>
    </tr>
   
  </table>
</div>