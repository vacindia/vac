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

$username = $_SESSION['username'];
$now = time();

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
    <title>Matrimonial | All Entries</title>
    <link rel="stylesheet" href="css/editentry.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>
<h2 style="text-align: center; color: red">All Entries are shown here</h2>
<h4 style="text-align: center">Click on <b>Edit</b> button to edit that record</h4>

<?php
$query = "SELECT * FROM entries";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>
<table class="sno">

    <tr class="headings">
        <th style="text-align: center">S.No.</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Home City</th>
        <th>Home State</th>
        <th style="text-align: center">Operation</th>
    </tr>

    <?php
    if($total != 0)
    {
        while ($result = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td style='text-align: center'>&nbsp;</td>
                    <td>" . $result['name'] . "</td>
                    <td>" . $result['gender'] . "</td>
                    <td>" . $result['age'] . "</td>
                    <td>" . $result['homecity'] . "</td>
                    <td>" . $result['homestate'] . "</td>
                    <td style='text-align: center'><a href='editentry?name=$result[name]&gender=$result[gender]&age=$result[age]&maritalstatus=$result[maritalstatus]&education=$result[education]&detailededucation=$result[detailededucation]&occupation=$result[occupation]&religion=$result[religion]&caste=$result[caste]&subcaste=$result[subcaste]&gothra=$result[gothra]&mothertongue=$result[mothertongue]&horoscope=$result[horoscope]&star=$result[star]&raasi=$result[raasi]&dhosham=$result[dhosham]&height=$result[height]&weight=$result[weight]&referredby=$result[referredby]&citizenship=$result[citizenship]&homestate=$result[homestate]&homecity=$result[homecity]&currentcountry=$result[currentcountry]&currentcity=$result[currentcity]&email=$result[email]&reemail=$result[reemail]&bodytype=$result[bodytype]&complexion=$result[complexion]&physicalstatus=$result[physicalstatus]&eatinghabit=$result[eatinghabit]&smokinghabit=$result[smokinghabit]&drinkinghabit=$result[drinkinghabit]&familyvalue=$result[familyvalue]&familytype=$result[familytype]&familystatus=$result[familystatus]&annualincome=$result[annualincome]&moreabout=$result[moreabout]&expectation=$result[expectation]&siblings=$result[siblings]&pass=$result[pass]&repass=$result[repass]'><b>Edit</b></a></td>
              </tr>";
        }
    }
        else
        {
            echo "<p style='color: red'>Please submit at least 1 Entry to view Record</p>";
        }
    ?>

</table>
</body>
</html>