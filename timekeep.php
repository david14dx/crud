<?php
include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css" class="rel">
    <title>Document</title>


</head>

<body class="bg-info">
    <form method="post">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col"></div>
                <div class="col-11 text-bg-light ">
                    <p class="h1 h1david text-center">Immaculate Conception I-College of Arts and Technology</p>
                    <p class="h1 text-center">#47 A. Bonifacio St. Poblacion Santa Maria Bulacan</p>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-4 bg-info-subtle text-danger-emphasis">
                    <!-- <p class="h1 h1david"> DATE : <?php echo date("M-d-Y"); ?> -->
                    <p class="h1 h1david"> DATE : <span id='ct'></span>
                    </p>
                </div>
                <div class="col-sm-7 bg-info-subtle text-danger-emphasis">
                    <!-- <p class="h1 h1david"> TIME : <?php date_default_timezone_set('Asia/Manila');
                                                        echo date(" h : i : s a"); ?> -->
                    <p class="h1 h1david"> TIME : <span id='ct7'></span>

                    </p>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-sm-4 bg-light">
                    <img src="images/ICILogo.jpg" class="img-fluid" alt="Responsive image" width="100%">
                </div>
                <div class="col-sm-7 bg-body-tertiary">
                    <div class="row mt-3">
                        <div class="col bg-primary-subtle"></div>
                        <div class="col-sm-11">

                            <!-- <input type="text" class="text" id="text"> -->
                            <!-- <button id="submit" type="submit" name="submit">Submit</button> -->

                            <?php

                            function searchemp()
                            {
                                global $con;
                                $search = $_POST['search'];
                                $sql = "SELECT * FROM `tblstudent` WHERE id=$search";
                                $result = mysqli_query($con, $sql);
                                if ($result) {
                                    if (mysqli_num_rows($result) > 0) {
                                        $row = mysqli_fetch_assoc($result);
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $mobile = $row['mobile'];
                                        $image = $row['image'];
                                        echo '       
                                    <p class="h1 h1david"> Employee ID : ' . $row['id'] . '</p>
                                    <p class="h1 h1david"> Name : ' . $row['name'] . '</p>
                                    <p class="h1 h1david"> Position : ' . $row['email'] . '</p>
                                    <p class="h1 h1david"> Department : ' . $row['mobile'] . '</p>
                                    <p class="h1 h1david"> Time Stamp : ' . "" .  '</p>
                                    <img src=' . $image . ' />';
                                    }
                                }
                            }
                            if (isset($_POST['submit'])) {
                                searchemp();
                            }

                            ?>

                            <input type="text" name="search" placeholder="Search Data">
                            <button class="btn btn-primary" name="submit">Search</button>

                        </div>
                        <div class="col bg-primary-subtle"></div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-11 bg-info-subtle">
                    <p class="h1"> https://iciap.edu.ph/ | Telephone No. (044) 795-9609 </p>
                </div>
                <div class="col"></div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

            <script>
                /* var input = document.getElementById('text');

                function Alert() {
                    /* alert(input.value); 

                }

                input.addEventListener('keyup', (e) => {
                    if (e.keyCode === 13) {
                        Alert();
                    }
                }); */

                function display_ct7() {
                    var x = new Date()
                    var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
                    hours = x.getHours() % 12;
                    hours = hours ? hours : 12;
                    hours = hours.toString().length == 1 ? 0 + hours.toString() : hours;

                    var minutes = x.getMinutes().toString()
                    minutes = minutes.length == 1 ? 0 + minutes : minutes;

                    var seconds = x.getSeconds().toString()
                    seconds = seconds.length == 1 ? 0 + seconds : seconds;

                    var month = (x.getMonth() + 1).toString();
                    month = month.length == 1 ? 0 + month : month;

                    var dt = x.getDate().toString();
                    dt = dt.length == 1 ? 0 + dt : dt;

                    var x1; /*  = month + "/" + dt + "/" + x.getFullYear(); */
                    x1 = hours + ":" + minutes + ":" + seconds + " " + ampm;
                    document.getElementById('ct7').innerHTML = x1;
                    display_c7();
                }

                function display_ct() {
                    var x = new Date()
                    var x1 = x.toDateString(); /* x.toUTCString(); */ // changing the display to UTC string
                    document.getElementById('ct').innerHTML = x1;
                    /* tt = display_c(); */
                }

                function display_c7() {
                    var refresh = 1000; // Refresh rate in milli seconds
                    mytime = setTimeout('display_ct7()', refresh)
                    /* mytime = setTimeout('display_ct()', refresh) */
                }
                display_c7()
                display_ct()
            </script>
    </form>
</body>

</html>