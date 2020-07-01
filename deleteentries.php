<!--
     ==     ==   ==========  ========  ==   ==   ==    ==
     ==     ==       ==      ==        == ==      ==  ==
      ==   ==        ==      ==        == ==        ==
        ===      ==========  ========  ==   ==      ==
-->

<?php
error_reporting(0);
include ('connection.php');
$query = "TRUNCATE TABLE entries";
$data = mysqli_query($conn, $query);
if (isset($data))
{
  date_default_timezone_set("Asia/Kolkata");
        function formatedate()
        {
            return date('M d, Y H:i:s');
        }
        $sessionstart = formatedate();
        $sessiontimequery = "UPDATE sessiondata SET sessiontime='$sessionstart' WHERE id=1";
        $updatesessiontime = mysqli_query($conn, $sessiontimequery);
  header ('location: index');
}
else
{
  echo "<p style='color: red'>Getting Error while trying to delete data, Please contact Admin/Developer <b>OR</b> raise a request at <a style='color: green' href='http://vhtechnologies.in' target='_blank'><b>VH Technologies</b></a>.</p>";
}
?>