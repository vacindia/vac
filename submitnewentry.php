<!--
     ==     ==   ==========  ========  ==   ==   ==    ==
     ==     ==       ==      ==        == ==      ==  ==
      ==   ==        ==      ==        == ==        ==
        ===      ==========  ========  ==   ==      ==
-->

<?php
include ('connection.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $maritalstatus = $_POST['maritalstatus'];
    $education = $_POST['education'];
    $detailededucation = $_POST['detailededucation'];
    $occupation = $_POST['occupation'];
    $religion = $_POST['religion'];
    $caste = $_POST['caste'];
    $subcaste = $_POST['subcaste'];
    $gothra = $_POST['gothra'];
    $mothertongue = $_POST['mothertongue'];
    $horoscope = $_POST['horoscope'];
    $star = $_POST['star'];
    $raasi = $_POST['raasi'];
    $dhosham = $_POST['dhosham'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $citizenship = $_POST['citizenship'];
    $homestate = $_POST['homestate'];
    $homecity = $_POST['homecity'];
    $currentcountry = $_POST['currentcountry'];
    $currentcity = $_POST['currentcity'];
    $email = $_POST['email'];
    $reemail = $_POST['reemail'];
    $bodytype = $_POST['bodytype'];
    $complexion = $_POST['complexion'];
    $physicalstatus = $_POST['physicalstatus'];
    $eatinghabit = $_POST['eatinghabit'];
    $smokinghabit = $_POST['smokinghabit'];
    $drinkinghabit = $_POST['drinkinghabit'];
    $familyvalue = $_POST['familyvalue'];
    $familytype = $_POST['familytype'];
    $familystatus = $_POST['familystatus'];
    $annualincome = $_POST['annualincome'];
    $siblings = $_POST['siblings'];
    $moreabout = $_POST['moreabout'];
    $expectation = $_POST['expectation'];
    $pass = $_POST['pass'];
    $repass = $_POST['repass'];
    $referredby = $_POST['referredby'];

    $query = "INSERT INTO entries (name, gender, age, maritalstatus, education, detailededucation, occupation, religion, caste, subcaste, gothra, mothertongue, horoscope, star, raasi, dhosham, height, weight, citizenship, homestate, homecity, currentcountry, currentcity, email, reemail, bodytype, complexion, physicalstatus, eatinghabit, smokinghabit, drinkinghabit, familyvalue, familytype, familystatus, annualincome, siblings, moreabout, expectation, pass, repass, referredby) VALUES ('$name','$gender','$age','$maritalstatus','$education','$detailededucation','$occupation','$religion','$caste','$subcaste','$gothra','$mothertongue','$horoscope','$star','$raasi','$dhosham','$height','$weight','$citizenship','$homestate','$homecity','$currentcountry','$currentcity','$email','$reemail','$bodytype','$complexion','$physicalstatus','$eatinghabit','$smokinghabit','$drinkinghabit','$familyvalue','$familytype','$familystatus','$annualincome','$siblings','$moreabout','$expectation','$pass','$repass','$referredby')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        header('location: newentry');
    } else {
        echo "<p style='color: red'>There's some issue while creating New Entry, Please contact Admin/Developer <b>OR</b> raise a request at <a style='color: green' href='http://vhtechnologies.in' target='_blank'><b>VH Technologies</b></a>.</p>";
    }
}
?>