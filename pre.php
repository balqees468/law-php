<html>

<head>
    <link rel="stylesheet" href="style/pre.css">
</head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

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
                <a onclick="document.getElementById('header').style.display='block'"
                    style="width:auto; margin-bottom:0px;margin-top:0px;color:#250033; font-size:14">المعلومات
                    الشخصية</a>
                <br>
                <a href="logout.php" alt="Cinque Terre"
                    style="width: auto; margin-butom:0px; magin-top:0px;color:#250033; font-size:14">تسجيل الخروج</a>
                <br><br><br><br>
                <div class="desc"><b>القاضي عبد القادر ادريس</b></div>
            </div>
        </div>
    </div>


    <div style="display:flex;
  flex-flow:column wrap;
  align-content: left;margin-top:120;margin-left:185;">

        <!-- Mount calendar on root-->
        <div id="root"></div>


    </div>

    <div id="root2"></div>


    <script>
    "use strict"
    class Calendar {
        constructor(selectCallback, mini, selectMulti) {
            this.root = document.createElement("div");
            this.root.className = `calendar-wrapper${mini?" mini":""}`;
            this.mini = mini;
            selectMulti ? this.mode = "multiple" : this.mode = "single";
            this.currentDates = new Set() //
            this.calendarsRenderedLeft = [];
            this.calendarsRenderedRight = [];
            let today = new Date();
            this.onselect = selectCallback;
            this.renderCalendar(today.getMonth() + 1, today.getFullYear(), null, today.getDate());
            this.transitionTime = getComputedStyle(document.documentElement).getPropertyValue('--transitionTime')
                .replace(/ms/g, "");
        }

        mount(eleement) {
            eleement.appendChild(this.root);
        }
        /*
         * month integer is 1 based (1-12)
         * From https://stackoverflow.com/questions/222309/calculate-last-day-of-month-in-javascript
         */
        static getDaysInMonth(m, y) {
            return m === 2 ? y & 3 || !(y % 25) && y & 15 ? 28 : 29 : 30 + (m + (m >> 3) & 1);
        }
        /*
         Returns the day as 0 based integer (0-6, sunday-saturday)
        */
        static getFirstDay(m, y) {
            return new Date(y, m - 1, 1).getDay();
        }

        static getLastDay(m, y) {
            return new Date(y, m, 0).getDay();
        }

        static prevMonth(month) {
            if (month > 1) {
                return (month - 1)
            }
            return 12
        };
        static nextMonth(month) {
            if (month < 12) {
                return month + 1
            }
            return 1
        };
        static prevYear(month, year) {
            if (month > 1) {
                return year
            }
            return year - 1
        };
        static nextYear(month, year) {
            if (month < 12) {
                return year
            }
            return year + 1
        };

        static parseDate(MMDDYYYY) {
            let arr = MMDDYYYY.split(/\//g);
            let n = (e) => {
                return Number.parseInt(e)
            };
            return {
                month: n(arr[0]),
                day: n(arr[1]),
                year: n(arr[2])
            }
        }

        static generateDaysLabels(mini) {
            let a;
            let b = "";
            if (mini) {
                a = Calendar.DAY["MINI"]
            } else {
                a = Calendar.DAY["FULL"]
            }
            for (let i = 0; i < 7; i++) {
                b += `<div>${a[i]}</div>`
            }
            return b;
        }

        static get DAY() {
            return {
                FULL: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                MINI: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
            }

        }
        static get MONTH() {
            return {
                FULL: [
                    "January",
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
                    "Jan",
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
                    "Dec",
                ]
            }
        }

        get monthLabel() {
            return Calendar.MONTH[this.mini ? "MINI" : "FULL"];
        }

        static dayTemplate(num, month, year, blank, classes) {
            return `<div class="${blank? "blank " : ""}day ${classes? classes:""}" data-month="${month}" data-year="${year}" data-day="${num}">${num}</div>`;
        }

        previous(month, year) {
            return this.renderCalendar(Calendar.prevMonth(month), Calendar.prevYear(month, year), "right");
        }

        next(month, year) {
            return this.renderCalendar(Calendar.nextMonth(month), Calendar.nextYear(month, year), "left");
        }

        generateCalendarHTML(month, year, direction, indicateToday) {
            let html = "";
            let daysInMonth = Calendar.getDaysInMonth(month, year);
            if (!direction) {
                direction = "out";
            }

            let firstDay = Calendar.getFirstDay(month, year);
            if (firstDay > 0) { //first day is not a Sunday
                let p = Calendar.getDaysInMonth(Calendar.prevMonth(month), year);
                for (let f = 0; f < firstDay; f++) {
                    html = Calendar.dayTemplate(p, Calendar.prevMonth(month), Calendar.prevYear(month, year),
                        true) + html;
                    p--;
                }
            };
            for (let i = 1; i <= daysInMonth; i++) {
                if (indicateToday == i) {
                    html += Calendar.dayTemplate(i, month, year, false, "today");
                } else {
                    html += Calendar.dayTemplate(i, month, year);
                }
            }
            let lastDay = Calendar.getLastDay(month, year);
            if (lastDay < 6) { //last day is not a Saturday
                let u = 1;
                for (let l = 6; l > lastDay; l--) {
                    html += Calendar.dayTemplate(u, Calendar.nextMonth(month), Calendar.nextYear(month, year),
                        true);
                    u++;
                }
            };

            return `<div class="calendar anim-slide-${direction}-in">
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

        selectDate(target) {
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

        selectDateTransition(month, year, transition, e) {
            if (transition == "next") {
                this.next(month, year).then((res) => {

                    this.selectDate(res.querySelector(
                        `[data-month="${Calendar.nextMonth(month)}"][data-day="${e.target.innerHTML}"]`
                    ));
                })
            } else if (transition == "prev") {
                this.previous(month, year).then((res) => {
                    this.selectDate(res.querySelector(
                        `[data-month="${Calendar.prevMonth(month)}"][data-day="${e.target.innerHTML}"]`
                    ));
                })
            }

        }

        clearSelectedDates() {
            this.currentDates.forEach(t => {
                t.classList.remove("active");
            })
            this.currentDates.clear();
        }
        insertParam(key, value) {
            key = encodeURIComponent(key);
            value = encodeURIComponent(value);

            // kvp looks like ['key1=value1', 'key2=value2', ...]
            var kvp = document.location.search.substr(1).split('&');
            let i = 0;

            for (; i < kvp.length; i++) {
                if (kvp[i].startsWith(key + '=')) {
                    let pair = kvp[i].split('=');
                    pair[1] = value;
                    kvp[i] = pair.join('=');
                    break;
                }
            }

            if (i >= kvp.length) {
                kvp[kvp.length] = [key, value].join('=');
            }

            // can return this or...
            let params = kvp.join('&');

            // reload page with new params
            document.location.search = params;
        }
        get selectedDates() {

            let result = "";
            this.currentDates.forEach(d => {
                const urlParams = new URLSearchParams(window.location.search);

                // urlParams.set('order', 'date');

                window.location.search = urlParams;

                document.cookie = `calender=${d.dataset.year}-${d.dataset.month}-${d.innerHTML};`
                result += `${d.dataset.month}/${d.innerHTML}/${d.dataset.year}` + `\n`;
            })

            return result;
        }

        renderCalendar(month, year, direction, indicateToday) {
            return new Promise((resolve, reject) => {
                let newCalendar;

                if (this.calendarsRenderedLeft.length > 0 && direction == "right") {
                    newCalendar = this.calendarsRenderedLeft.pop();
                    newCalendar.classList.add(`anim-slide-${direction}-in`);
                } else if (this.calendarsRenderedRight.length > 0 && direction == "left") {
                    newCalendar = this.calendarsRenderedRight.pop();
                    newCalendar.classList.add(`anim-slide-${direction}-in`);
                } else {
                    newCalendar = document.createRange().createContextualFragment(this.generateCalendarHTML(
                        month, year, direction, indicateToday));
                    newCalendar.querySelector(".arrow.left").addEventListener("click", () => {
                        this.previous(month, year);
                    });
                    newCalendar.querySelector(".arrow.right").addEventListener("click", () => {
                        this.next(month, year);
                    });

                    let daysNodes = newCalendar.querySelectorAll(".day:not(.blank)");
                    daysNodes.forEach((n) => {
                        n.addEventListener("click", (e) => this.selectDate(e.target))
                    })
                    daysNodes = newCalendar.querySelectorAll(
                        `[data-month="${Calendar.prevMonth(month)}"][data-year="${Calendar.prevYear(month, year)}"]`
                    );
                    daysNodes.forEach((n) => {
                        n.addEventListener("click", (e) => this.selectDateTransition(month, year,
                            "prev", e))
                    })
                    daysNodes = newCalendar.querySelectorAll(
                        `[data-month="${Calendar.nextMonth(month)}"][data-year="${Calendar.nextYear(month, year)}"]`
                    );
                    daysNodes.forEach((n) => {
                        n.addEventListener("click", (e) => this.selectDateTransition(month, year,
                            "next", e))
                    })
                }

                if (this.root.children.length > 0) {
                    this.root.appendChild(newCalendar);
                    this.root.children[0].classList.add(`anim-slide-${direction}-out`);
                    setTimeout(() => {
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
            function() {
                inputDate.value = this.selectedDates

            }, true);
        myCal.mount(document.getElementById("root"));

        inputMode.addEventListener("change", (e) => {
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
        <div class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('header').style.display='none'" class="close"
                    title="Close Modal">&times;</span>
            </div>

            <center>
                <div class="container" style="padding-top: 30px;">
                    <table>
                        <tr>
                            <th><img src="113.png" width="100" style="margin-left: 40%;"></th>

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
                    <br>
                    <a href="##"><button style="background-color: #ffe6ff; width: 20%"> تعديل </button></a>

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
        <!-- <fieldset>
            <br>
            <button class=" R butt"><img src="223.png"
                    style="float:left;align:center margin-right:0.5em margin-top:10px width=" 70" height="35">تتبع حركات
                الموظفين</button><br>
            <button class=" R butt"><img src="033.png" style="float:left;align:center margin-right:0.5em width=" 70"
                    height="35">جدول القضايا</button><br>
            <button class=" R butt"><img src="001.png"
                    style="float:left;align:center margin-right:0.5em margin-bottom:10em width=" 70" height="35">عرض
                القضايا اليومية</button><br>
            <button class=" R butt"><img src="001.png"
                    style="float:left;align:center margin-right:0.5em margin-bottom:10em width=" 70" height="35">القضايا
                المؤجلة</button><br>


        </fieldset> -->
    </div>
    <br />
    <div class="center">

        <div>
            <button class=" R butt"><img src="223.png"
                    style="float:left;align:center margin-right:0.5em margin-top:10px width=" 70" height="35">تتبع حركات
                الموظفين</button>

            <table border="0" cellspacing="2" cellpadding="2">

                <tr>
                    <td class="py-3 px-6">
                        <font face="Arial">رقم التسلسلي</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">اسم المستخدم</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">نوع</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">الحالة</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">تاريخ</font>
                    </td>
                </tr>
                <?php
                $username = "root";
                $password = "";
                $database = "law";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT * FROM tracker";


                if ($result = $mysqli->query($query)) {
                    while ($row = $result->fetch_assoc()) {
                        $field1name = $row["id"];
                        $field2name = $row["username"];
                        $field3name = $row["type"];
                        $field4name = $row["status"];
                        $field5name = $row["track_date"];

                        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field1name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field2name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field3name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field4name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field5name . '</td> 
              </tr></talbe>';
                    }
                    $result->free();
                }


                ?>
            </table>
        </div>
        <div>
            <br />
            <button class=" R butt"><img src="033.png" style="float:left;align:center margin-right:0.5em width=" 70"
                    height="35">جدول القضايا</button>
            <table border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td class="py-3 px-6">
                        <font face="Arial">رقم التسلسلي</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">مكان الشكوى </font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">نوع</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">السبب</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">مبلغ النفقة</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">الحكم</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">تاريخ</font>
                    </td>
                </tr>
                <?php
                $username = "root";
                $password = "";
                $database = "law";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT * FROM history";










                if ($result = $mysqli->query($query)) {

                    while ($row = $result->fetch_assoc()) {

                        $field1name = $row["id"];
                        $field2name = $row["location_report"];
                        $field3name = $row["type"];
                        $field4name = $row["reason"];
                        $field5name = $row["Alimony_amount"];
                        $field6name = $row["verdict"];
                        $field7name = $row["date"];
                        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field1name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field2name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field3name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field4name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field5name . '</td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field6name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field7name . '</td>  
              </tr>';
                    }
                    $result->free();
                }
                ?>
            </table>
        </div>
        <div>
            <br />
            <button class=" R butt"><img src="001.png"
                    style="float:left;align:center margin-right:0.5em margin-bottom:10em width=" 70" height="35">عرض
                القضايا اليومية</button>


            <table border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td class="py-3 px-6">
                        <font face="Arial">رقم التسلسلي</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">مكان الشكوى </font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">نوع</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">السبب</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">مبلغ النفقة</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">الحكم</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">تاريخ</font>
                    </td>
                </tr>
                <?php
                $username = "root";
                $password = "";
                $database = "law";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT * FROM history where date='{$_COOKIE["calender"]}'";



                try {

                    if ($result = $mysqli->query($query)) {

                        while ($row = $result->fetch_assoc()) {

                            $field1name = $row["id"];
                            $field2name = $row["location_report"];
                            $field3name = $row["type"];
                            $field4name = $row["reason"];
                            $field5name = $row["Alimony_amount"];
                            $field6name = $row["verdict"];
                            $field7name = $row["date"];
                            echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field1name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field2name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field3name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field4name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field5name . '</td>
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field6name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field7name . '</td>  
              </tr>';
                        }
                        $result->free();
                    }
                } catch (ErrorException $e) {
                    echo $e;
                }
                ?>
            </table>
        </div>

        <div>
            <button class=" R butt"><img src="001.png"
                    style="float:left;align:center margin-right:0.5em margin-bottom:10em width=" 70" height="35">القضايا
                المؤجلة</button>
            <br />
            <table border="0" cellspacing="2" cellpadding="2">
                <tr>
                    <td class="py-3 px-6">
                        <font face="Arial">رقم التسلسلي</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">سبب التأجيل</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">نوع القضية الؤجلة</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">سبب التأجيل</font>
                    </td>
                    <td class="py-3 px-6">
                        <font face="Arial">التاريخ الجديد</font>
                    </td>

                </tr>
                <p style="background:#fbfbfb;"> عرض
                    القضايا المؤجلة </p>
                <?php
                $username = "root";
                $password = "";
                $database = "law";
                $mysqli = new mysqli("localhost", $username, $password, $database);
                $query = "SELECT * FROM deferred_issues ";





                if ($result = $mysqli->query($query)) {

                    while ($row = $result->fetch_assoc()) {

                        $field1name = $row["id"];
                        $field2name = $row["reason_postponement"];
                        $field3name = $row["type"];
                        $field4name = $row["new_date"];

                        echo '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field1name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field2name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field3name . '</td> 
                  <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $field4name . '</td> 
                 
              </tr>';
                    }
                    $result->free();
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>