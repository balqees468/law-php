<html>
<style>
.topnav {

    background-color: #ffffb3;

    width: 150px;
    height: 30px;
    padding: 15px;
    box-shadow: 10px 10px 5px #ffffcc;


}

.topnav a {
    display: block;
    float: right;
    color: #250033;
    /*نهدي*/
    text-align: center;
    padding: 10px 10px;
    text-decoration: none;
    font-size: 18px;
}

.topnav a:hover:not(.active) {
    background-color: white;
}

.mySlides {
    display: none;
    margin-right: 200px;
    margin-top: 15px
}

img {
    vertical-align: middle;
}

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    text-align: center;
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
    from {
        opacity: .4
    }

    to {
        opacity: 1
    }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
    .text {
        font-size: 11px
    }
}

.topnav {

    background-color: #ffffb3;/gold/ width: 150px;
    height: 30px;
    padding: 15px;
    box-shadow: 10px 10px 5px #ffffcc;


}

.topnav a {
    display: block;
    float: right;
    color: #250033;
    /*نهدي*/
    text-align: center;
    padding: 1px 10px;
    text-decoration: none;
    font-size: 18px;
}

.topnav a:hover:not(.active) {
    background-color: white;
}

.mySlides {
    display: none;
    margin-right: 200px;
    margin-top: 15px
}

img {
    vertical-align: middle;
}

.slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
    text-align: center;
}


}

.active {
    background-color: #717171;
}


.slideshow-container {
    max-width: 1000px;
    position: block;
    margin: auto;
    text-align: center;
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

.button {
    background-color: #290033;
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
    margin-left: 100px;

}

.button1 {
    border-radius: 10%;
}

.button2 {
    border-radius: 10%;
}

.button3 {
    border-radius: 10%;
}

.vertical-center {
    margin: 0;
    margin-left: 1000px;
    color: #F0E169;
    position: absolute;
    top: 70%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}

.vertical-center a {
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

.dropbtn:hover,
.dropbtn:focus {
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
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}

.ra {
    align-content: right;
    position: absolute;
    left: 35%;
    top: 35%;
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
</style>

<head>
    <link href="" rel="stylesheet"> <!--  -->
</head>

<body>
    <div style="background-color :#250033;height:117px">
        <img src="11.png" width="100" align="right" style="margin-top: 20px; margin-right: 20px;" />
        <p
            style=" color:#F0E169;font-family:DecoType Naskh Variants; font-size:45; margin-left:1125px;margin-top:6px;margin-bottom:4px">
            المحكمة الشرعية</p>
    </div>
    <div class="topnav">

        <div class="dropdown">
            <img src="113.png" alt="Cinque Terre" width="65" height="60">
            <div class="dropdown-content">
                <br>
                <center><a href="logout.php" alt="Cinque Terre"
                        style="width: auto; margin-butom:0px; magin-top:0px;color:#250033; font-size:14">تسجيل
                        الخروج</a></center>
            </div>
        </div>
    </div>


    <div class="ra">
        <fieldset>
            <br>
            <a href="newuser.php"><button class=" R butt"><img src="223.png"
                        style="float:left;align:center margin-right:0.5em margin-top:10px width=" 70" height="35">اضافة
                    حساب جديد</button></a><br>
            <button class=" R butt"><img src="033.png" style="float:left;align:center margin-right:0.5em width=" 70"
                    height="35">تغيير كلمة مرور</button><br>
            <button class=" R butt"><img src="001.png"
                    style="float:left;align:center margin-right:0.5em margin-bottom:10em width=" 70" height="35">حذف
                حساب</button><br>

    </div>
    </fieldset>
</body>

</html>