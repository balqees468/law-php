<?php
include "core.php";


if (isset($_POST["login"])) {
    $loginError = null;

    if (empty($_POST["username"]) or empty($_POST["password"])) {
        echo '<script>alert("Username or Password cannot be empty");</script>';
        $loginError = 1;
    } else {
        if (is_null($loginError)) {
            $sql = $pdo->prepare("SELECT * FROM users WHERE username = :username AND password = :password");

            $sql->execute(array(
                'username'     =>     $_POST["username"],
                'password'     =>     $_POST["password"]
            ));

            if ($sql->rowCount() == 1) {
                $user = $sql->fetch(PDO::FETCH_ASSOC);

                if ($_POST["password"] != $user["password"]) {

                    $sql3 = $pdo->prepare("INSERT INTO tracker (username, type,status)
                    VALUES (:username, 'login','failed')");

                    $sql3->execute(array(
                        'username'     =>     $_POST["username"]
                    ));
                    echo '<script>alert("Incorrect Password");</script>';
                } else {
                    $sql2 = $pdo->prepare("INSERT INTO tracker (username, type)
VALUES (:username2, 'login')");

                    $sql2->execute(array(
                        'username2'     =>     $_POST["username"]
                    ));
                    $_SESSION["id"] = $user['id'];
                    $_SESSION["name"] = $user['firstname'] + " " + $user['lastname'];
                    $_SESSION["type"] = $user['type'];

                    if ($user["type"] == "writter") {
                        header("location: writer.php");
                        exit();
                    } elseif ($user["type"] == "pre") {
                        header("location: pre.php");
                        exit();
                    } elseif ($user["type"] == "staff") {
                        header("location: staff.php");
                        exit();
                    } elseif ($user["type"] == "admin") {
                        header("location: admin.php");
                        exit();
                    } else {
                        session_destroy();
                        echo '<script>alert("Permission Denied");</script>';
                        header("location: home.php");
                        exit();
                    }
                }
            } else {
                $sql3 = $pdo->prepare("INSERT INTO tracker (username, type,status)
                VALUES (:username, 'login','failed')");

                $sql3->execute(array(
                    'username'     =>     $_POST["username"]
                ));
                echo '<script>alert("Incorrect Username");</script>';
            }
        }
    }
}

?>




<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="style/home.css">
</head>

<body>
    <div style="background-color :#250033;height">
        <img src="11.png" width="100" align="right" style="margin-top: 20px; margin-right: 20px;" />
        <p
            style=" color:#F0E169;font-family:DecoType Naskh Variants; font-size:45; margin-left:1125px;margin-top:6px;margin-bottom:6px">
            المحكمة الشرعية</p>
        <br>
        <div class="topnav">
            <a href="Home.php"><b>الرئيسية</a>
            <a href="rool.php">التشريعات والقوانين</a>
            <a href="topic.php">مواضيع</a>
            <a href="who are.php">من نحن ؟</a>
            <button onclick="document.getElementById('header').style.display='block'"
                style="width:auto; margin-bottom:0px;margin-top:0px;color:#250033; font-size:18"><b>تسجيل
                    الدخول</b><br><span></span></button></a>

        </div>
    </div>
    <div id="header" class="modal">
        <form class="modal-content animate" method="post">
            <div class="imgcontainer">
                <span onclick="document.getElementById('header').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
                <img src="ت.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="User Name"><b> اسم المستخدم</b></label>
                <input type="text" placeholder="اسم المستخدم" name="username" required>

                <label for="psw"><b>كلمة المرور</b></label>
                <input type="Password" placeholder="كلمة المرور" name="password" required>

                <button type="submit" name="login"><b>الدخول</b></button>
            </div>


        </form>
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

    </b>
    </div>
    <br>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <a href="https://www.moj.pna.ps/ar_page.aspx?id=Jmnbsva3147447171aJmnbsv"> <img src="27.jpg"
                    style="width:130%; height:67%"></a>
        </div>

        <div class="mySlides fade">
            <a href="http://www.ljc.gov.ps/"> <img src="30.jpg" style="width:130%; height: 67%"></a>
        </div>

        <div class="mySlides fade">
            <a href="https://maqam.najah.edu/legislation/"><img src="ww.jpg" style="width:130%; height:67%"></a>
        </div>

    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
    </script>
</body>

</html>