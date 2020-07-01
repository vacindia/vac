<!--
     ==     ==   ==========  ========  ==   ==   ==    ==
     ==     ==       ==      ==        == ==      ==  ==
      ==   ==        ==      ==        == ==        ==
        ===      ==========  ========  ==   ==      ==
-->

<?php
error_reporting(0);
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $data = mysqli_query($conn, $query);
    $finddata = mysqli_num_rows($data);

    if($finddata==1)
    {
        date_default_timezone_set("Asia/Kolkata");
        function formatedate()
        {
            return date('M d, Y H:i:s');
        }

        $_SESSION['username'] = $username;
        $_SESSION['sessionstart'] = time();
        $sessionstart = formatedate();
        $_SESSION['sessionexpire'] = $_SESSION['sessionstart'] + (60*60*24*23);
        $sessiontimequery = "UPDATE sessiondata SET sessiontime='$sessionstart' WHERE id=1";
        $updatesessiontime = mysqli_query($conn, $sessiontimequery);
        header('location: index');
        include ('script.php');
    }
    else
    {
        echo "<p style='color: blue'>Please check your Username and Password!!</p><br><br>";
        $_SESSION['wrongpassword'] += 1;

        if ($_SESSION['wrongpassword'] > 2)
        {
            echo "<p style='color: red'>All data files are deleted because of 3 wrong attempts.</p><br>";
            include ('script.php');
            session_unset();
            session_destroy();
        }

    }
}
?>