<?php

/*
     ==     ==   ========  ========  ==   ==   ==    ==
     ==     ==      ==     ==        == ==      ==  ==
      ==   ==       ==     ==        == ==        ==
        ===      ========  ========  ==   ==      ==
*/


error_reporting(0);

$dbhost = "localhost";
$dbusername = "sss";
$dbpassword = "sss@1209";
$dbname = "sss";

$conn = mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);

if ($conn)
{

}
else
{
    die("<p style='color: red'>Connection Failed, Please contact Admin/Developer <b>OR</b> raise a request at <a style='color: green' href='http://vhtechnologies.in' target='_blank'><b>VH Technologies</b></a>.</p>");
}

?>