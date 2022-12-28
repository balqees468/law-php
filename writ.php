<?php


$link=mysqli_connect('localhost','root');

if (!$link){

	echo'not connect to the server ';

}if (!mysqli_select_db($link,'test')){

	echo 'data base not selected';

}

if (isset($_POST['insert'])){



$sql="insert into persone(id,type,myfile)values('".$_POST['id']."','".$_POST['type']."','".$_POST['file']."')";


if(mysqli_query($link,$sql))

{

	echo' inserted';

}

else

{

	echo 'NOT inserted';

}

}


?>






<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 7px 7px;
  margin:8px 0;
  display: inline-block;
  border: 3px solid #250033;
  box-sizing: border-box;
  text-align: right; 

}
button[type=submit]{
	width: 100%;
  padding: 9px 9px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #250033;
  box-sizing: border-box;
  text-align: center; 
	color:#250033;
	font-size:17px;
}
/* Set a style for all buttons */
button {
  background-color: #ffffb3;
  color: #1f3d7a;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;

}

.container {
  padding: 16px;
  color:#250033;
}

span.psw {
  float: right;
  padding-top: 16px;
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
<div style= "background-color :#250033;">
 <img src = "11.png" width="100"  align="right" style="margin-top: 20px; margin-right: 20px;" />
 <p style=" color:#F0E169;font-family:DecoType Naskh Variants; font-size:45; margin-left:1125px;margin-top:6px;margin-bottom:6px"> المحكمة الشرعية</p>
<br>

</div>
<div class="topnav">
  <a href="writer.php"><b>رجوع </a>

</div></div>
<br>
<div style="text-align: center;">
<form action="" method="POST">
<input type="search" name="id">رقم القضية
<input type="search" name="type"> موضوع القضية
<br><br>
<center> <input type="file" id="myfile" name="myfile"><br>
<input type="submit" name="insert" value="insert">

</form>
</div>










</body>
</html>