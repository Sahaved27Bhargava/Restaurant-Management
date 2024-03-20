<?php

require 'connection_reg.php';

if(isset($_POST["submit"])){
    $days = $_POST["days"];
    $hours = $_POST["hours"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $pplno = $_POST["pplno"];


    $query = "INSERT INTO booking VALUES('','$days','$hours','$fullname','$phone','$pplno)";
    mysqli_query($conn, $query);
    echo "<script>alert('Hotel Booked');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="reserv.css">
</head>
<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <section class = "banner">
        <h2>BOOK YOUR TABLE NOW</h2>
        <div class = "card-container">
            <div class = "card-img">
                <img src="foods.jpg">
            </div>
            <div class = "card-content">
                <h3>Reservation</h3>
                <form action="" method="post">
                    <div class = "form-row">
                        <select name = "days" id="day">
                            <option value = "day-select">Select Day</option>
                            <option value = "sunday">Sunday</option>
                            <option value = "monday">Monday</option>
                            <option value = "tuesday">Tuesday</option>
                            <option value = "wednesday">Wednesday</option>
                            <option value = "thursday">Thursday</option>
                            <option value = "friday">Friday</option>
                            <option value = "saturday">Saturday</option>
                        </select>

                        <select name = "hours" id="hour">
                            <option value = "hour-select">Select Hour</option>
                            <option value = "10:00">10: 00</option>
                            <option value = "12:00">12: 00</option>
                            <option value = "14:00">14: 00</option>
                            <option value = "16:00">16: 00</option>
                            <option value = "18:00">18: 00</option>
                            <option value = "20:00">20: 00</option>
                            <option value = "22:00">22: 00</option>
                        </select>
                    </div>

                    <div class = "form-row">
                        <input type = "text" name="fullname" id="name" placeholder="Full Name">
                        <input type = "text" name="phone" id="phone" placeholder="Phone Number">
                    </div>

                    <div class = "form-row">
                        <input type = "number" name="pplno" id="guests" placeholder="How Many Persons?" min = "1">
                        <input type = "submit" name="submit" value = "BOOK TABLE">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>