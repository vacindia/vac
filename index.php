<!--
     ==     ==   ==========  ========  ==   ==   ==    ==
     ==     ==       ==      ==        == ==      ==  ==
      ==   ==        ==      ==        == ==        ==
        ===      ==========  ========  ==   ==      ==
-->

<?php
ini_set('session.cookie_lifetime', '7776000');
error_reporting(0);
session_start();
include 'connection.php';

$query = 'SELECT * FROM sessiondata where id = 1';
$row = mysqli_fetch_assoc(mysqli_query($conn,$query));
$_SESSION['sessionstarttime'] = $row['sessiontime'];
$sessionstarttime = $_SESSION['sessionstarttime'];

date_default_timezone_set("Asia/Kolkata");
function formatedate()
{
    $sessionstarttime = $_SESSION['sessionstarttime'];
    $createdate = date_create("$sessionstarttime");
    date_add($createdate,date_interval_create_from_date_string("23 days"));
    return date_format($createdate,'M d, Y H:i:s');
}

$username = $_SESSION['username'];
$now = time();
$remainingtime = formatedate();

if ($username==true)
{
    if ($now > $_SESSION['sessionexpire'])
    {
        session_unset();
        session_destroy();
    }
}
else
{
    header('location: login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrimonial | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>
<div class="wrapper">
    <header>
        <br><br>
        <h1 style="color: orange">Matrimonial</h1>
    </header>
    <main class="content">
        <h1>Time Remaining:</h1>

        <div class="countdown">
            <div class="countdown__days">
                <div class="number"></div>
                <span class>Days</span>
            </div>

            <div class="countdown__hours">
                <div class="number"></div>
                <span class>Hours</span>
            </div>

            <div class="countdown__minutes">
                <div class="number"></div>
                <span class>Minutes</span>
            </div>

            <div class="countdown__seconds">
                <div class="number"></div>
                <span class>Seconds</span>
            </div>
        </div>

        <p>Submit your work before Deadline.<br>You'll don't access working page after deadline.</p><br>
        <button class="button green" id="new_entry" onclick="window.location.href='newentry'">New Entry</button>	&nbsp;
        <button class="button red" onclick="window.location.href='allentries'">Edit Entry</button>	&nbsp;
        <button class="button orange" onclick="window.location.href='exportentries'">Export</button>   &nbsp;
        <button class="button black" id="delete" onclick="window.location.href='deleteentries'">Delete Data</button>
    </main>

</div>
<script>
    (() => {
        // Specify the deadline date
        const deadlineDate = new Date('<?php echo $remainingtime;?>').getTime();

        // Cache all countdown boxes into consts
        const countdownDays = document.querySelector('.countdown__days .number');
        const countdownHours = document.querySelector('.countdown__hours .number');
        const countdownMinutes = document.querySelector('.countdown__minutes .number');
        const countdownSeconds = document.querySelector('.countdown__seconds .number');

        // Update the count down every 1 second (1000 milliseconds)
        setInterval(() => {
            // Get current date and time
            const currentDate = new Date().getTime();

            // Calculate the distance between current date and time and the deadline date and time
            const distance = deadlineDate - currentDate;

            // Calculations the data for remaining days, hours, minutes and seconds
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor(distance % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            const minutes = Math.floor(distance % (1000 * 60 * 60) / (1000 * 60));
            const seconds = Math.floor(distance % (1000 * 60) / 1000);

            // Insert the result data into individual countdown boxes
            countdownDays.innerHTML = days;
            countdownHours.innerHTML = hours;
            countdownMinutes.innerHTML = minutes;
            countdownSeconds.innerHTML = seconds;
            if(countdownDays.innerHTML < 0){
                var x = document.querySelector('#new_entry');
                x.style.display = "none";
                x = document.querySelector('#delete');
                x.style.display = "inline-block";
            }
        }, 1000);
    })();
</script>
</body>
</html>