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
<?php
$name2 = $_GET['name'];
$gender2 = $_GET['gender'];
$age2 = $_GET['age'];
$maritalstatus2 = $_GET['maritalstatus'];
$education2 = $_GET['education'];
$detailededucation2 = $_GET['detailededucation'];
$occupation2 = $_GET['occupation'];
$religion2 = $_GET['religion'];
$caste2 = $_GET['caste'];
$subcaste2 = $_GET['subcaste'];
$gothra2 = $_GET['gothra'];
$mothertongue2 = $_GET['mothertongue'];
$horoscope2 = $_GET['horoscope'];
$star2 = $_GET['star'];
$raasi2 = $_GET['raasi'];
$dhosham2 = $_GET['dhosham'];
$height2 = $_GET['height'];
$weight2 = $_GET['weight'];
$citizenship2 = $_GET['citizenship'];
$homestate2 = $_GET['homestate'];
$homecity2 = $_GET['homecity'];
$currentcountry2 = $_GET['currentcountry'];
$currentcity2 = $_GET['currentcity'];
$email2 = $_GET['email'];
$reemail2 = $_GET['reemail'];
$bodytype2 = $_GET['bodytype'];
$complexion2 = $_GET['complexion'];
$physicalstatus2 = $_GET['physicalstatus'];
$eatinghabit2 = $_GET['eatinghabit'];
$smokinghabit2 = $_GET['smokinghabit'];
$drinkinghabit2 = $_GET['drinkinghabit'];
$familyvalue2 = $_GET['familyvalue'];
$familytype2 = $_GET['familytype'];
$familystatus2 = $_GET['familystatus'];
$annualincome2 = $_GET['annualincome'];
$siblings2 = $_GET['siblings'];
$moreabout2 = $_GET['moreabout'];
$expectation2 = $_GET['expectation'];
$pass2 = $_GET['pass'];
$repass2 = $_GET['repass'];
$referredby2 = $_GET['referredby'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrimonial | Edit Entry</title>
    <link rel="stylesheet" href="css/newentry.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
</head>
<body>
<div class="testbox">

    <form action="" method="get" autocomplete="off" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false">
        <center>
            <h2 style="color: red">Edit Entry</h2>
        </center>
        <div class="colums">
            <div class="item">
                <label for="fname">Full Name<span>*</span></label>
                <input id="name" type="text" name="name" value="<?php echo "$name2"; ?>" />
            </div>

            <div class="item">
                <p>Citizenship<span>*</span></p>
                <select name="citizenship" >
                    <option selected value="<?php echo "$citizenship2"; ?>" selected><?php echo "$citizenship2"; ?></option>
                    <option value="India">India</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Canada">Canada</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>

            <div class="item">
                <p>Gender<span>*</span></p>
                <select name="gender" >
                    <option selected value="<?php echo "$gender2"; ?>" selected><?php echo "$gender2"; ?></option>
                    <option value="Male" >Male</option>
                    <option value="Female" >Female</option>
                </select>
            </div>

            <div class="item">
                <p>Home State / Temitory<span>*</span></p>
                <select name="homestate" >
                    <option selected value="<?php echo "$homestate2"; ?>" selected><?php echo "$homestate2"; ?></option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chandigarh">Chandigarh</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option value="Daman and Diu">Daman and Diu</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Lakshadweep">Lakshadweep</option>
                    <option value="Puducherry">Puducherry</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="West Bengal">West Bengal</option>
                </select>
            </div>

            <div class="item">
                <label for="age">Age<span>*</span></label>
                <input id="age" type="text" name="age" value="<?php echo "$age2"; ?>" />
            </div>

            <div class="item">
                <label for="homecity">Home City / District</label>
                <input id="homecity" type="text" name="homecity" value="<?php echo "$homecity2"; ?>" />
            </div>

            <div class="item">
                <p>Marital Status<span>*</span></p>
                <select name="maritalstatus" >
                    <option selected value="<?php echo "$maritalstatus2"; ?>" selected><?php echo "$maritalstatus2"; ?></option>
                    <option value="UnMarried" >UnMarried</option>
                    <option value="Widowed" >Widowed</option>
                    <option value="Divorced" >Divorced</option>
                    <option value="Separated" >Separated</option>

                </select>
            </div>

            <div class="item">
                <p>Country Living in<span>*</span></p>
                <select name="currentcountry" >
                    <option selected value="<?php echo "$currentcountry2"; ?>" selected><?php echo "$currentcountry2"; ?></option>
                    <option value="India">India</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Canada">Canada</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>

            <div class="item">
                <p>Education<span>*</span></p>
                <select name="education" >
                    <option selected value="<?php echo "$education2"; ?>" selected><?php echo "$education2"; ?></option>
                    <option value="Bachelor in Computer Science" >Bachelor in Computer Science</option>
                    <option value="Masters in Computer Science" >Masters in Computer Science</option>
                    <option value="Bachelor in Engineering" >Bachelor in Engineering</option>
                    <option value="Masters in Engineering" >Masters in Engineering</option>
                    <option value="Bachelor in Science" >Bachelor in Science</option>
                    <option value="Masters in Science" >Masters in Science</option>
                    <option value="Bachelor in Arts/Commerce" >Bachelor in Arts/Commerce</option>
                    <option value="Masters in Arts/Commerce" >Masters in Arts/Commerce</option>
                    <option value="Medicine" >Medicine</option>
                    <option value="Management" >Management</option>
                    <option value="Phd" >Phd</option>
                    <option value="Law" >Law</option>
                    <option value="Student" >Student</option>
                    <option value="Diploma" >Diploma</option>
                    <option value="High School" >High School</option>
                </select>
            </div>

            <div class="item">
                <label for="currentcity">State / City Living in</label>
                <input id="currentcity" type="text" name="currentcity" value="<?php echo "$currentcity2"; ?>" />
            </div>

            <div class="item">
                <label for="detailededucation">Education (in detail)<span>*</span></label>
                <input id="detailededucation" type="text" name="detailededucation" value="<?php echo "$detailededucation2"; ?>" />
            </div>

            <div class="item">
                <label for="email">Email ID<span>*</span></label>
                <input id="email" type="text" name="email" value="<?php echo "$email2"; ?>" />
            </div>

            <div class="item">
                <label for="occupation">Occupation<span>*</span></label>
                <input id="occupation" type="text" name="occupation" value="<?php echo "$occupation2"; ?>" />
            </div>

            <div class="item">
                <label for="reemail">Re-type Email ID<span>*</span></label>
                <input id="reemail" type="text" name="reemail" value="<?php echo "$reemail2"; ?>" />
            </div>

            <div class="item">
                <p>Religion<span>*</span></p>
                <select name="religion" >
                    <option selected value="<?php echo "$religion2"; ?>" selected><?php echo "$religion2"; ?></option>
                    <option value="Hindu" >Hindu</option>
                    <option value="Muslim" >Muslim</option>
                    <option value="Muslim - Shia" >Muslim - Shia</option>
                    <option value="Muslim - Sunni" >Muslim - Sunni</option>
                    <option value="Christian" >Christian</option>
                    <option value="Christian - Catholic" >Christian - Catholic</option>
                    <option value="Christian - Orthodox" >Christian - Orthodox</option>
                    <option value="Christian - Protestant" >Christian - Protestant</option>
                    <option value="Sikh" >Sikh</option>
                    <option value="Jain" >Jain</option>
                    <option value="Jain - Digambar" >Jain - Digambar</option>
                    <option value="Jain - Shwetambar" >Jain - Shwetambar</option>
                    <option value="Buddhist" >Buddhist</option>
                    <option value="Parsi" >Parsi</option>
                    <option value="Zoroastrian" >Zoroastrian</option>
                    <option value="Inter Religion" >Inter Religion</option>
                </select>
            </div>

            <div class="item">
                <p>Personal Info<span>*</span></p>
                <select name="bodytype" >
                    <option selected value="<?php echo "$bodytype2"; ?>" selected><?php echo "$bodytype2"; ?></option>
                    <option value="Average" >Average</option>
                    <option value="Athletic" >Athletic</option>
                    <option value="Slim" >Slim</option>
                    <option value="Heavy" >Heavy</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="complexion" >
                    <option selected value="<?php echo "$complexion2"; ?>" selected><?php echo "$complexion2"; ?></option>
                    <option value="Very Fair" >Very Fair</option>
                    <option value="Fair" >Fair</option>
                    <option value="Wheatish" >Wheatish</option>
                    <option value="Wheatish Brown" >Wheatish Brown</option>
                    <option value="Dark" >Dark</option>
                </select>
            </div>

            <div class="item">
                <p>Caste<span>*</span></p>
                <select name="caste" >
                    <option selected value="<?php echo "$caste2"; ?>" selected><?php echo "$caste2"; ?></option>
                    <option value="Caste does not matter" >Caste does not matter</option>
                    <option value="Unspecified / Others" >Unspecified / Others</option>
                    <option value="6000 Niyogi" >6000 Niyogi</option>
                    <option value="96K Kokanastha" >96K Kokanastha</option>
                    <option value="Ad Dharmi" >Ad Dharmi</option>
                    <option value="Adi Dravida" >Adi Dravida</option>
                    <option value="Agarwal" >Agarwal</option>
                    <option value="Agnikula Kshatriya" >Nair</option>
                    <option value="Agri" >Agri</option>
                    <option value="Ahom" >Ahom</option>
                    <option value="Ambalavasi" >Ambalavasi</option>
                    <option value="Anavil Brahmin" >Anavil Brahmin</option>
                    <option value="Ansari" >Ansari</option>
                    <option value="Arain" >Arain</option>
                    <option value="Arora" >Arora</option>
                    <option value="Arunthathiyar" >Arunthathiyar</option>
                    <option value="Arya Vysya" >Arya Vysya</option>
                    <option value="Aryasamaj" >Aryasamaj</option>
                    <option value="Awan" >Awan</option>
                    <option value="Bahi" >Bahi</option>
                    <option value="Baidya" >Baidya</option>
                    <option value="Baishnab" >Baishnab</option>
                    <option value="Baishya" >Baishya</option>
                    <option value="Balija" >Balija</option>
                    <option value="Banik" >Banik</option>
                    <option value="Baniya" >Baniya</option>
                    <option value="Barujibi" >Barujibi</option>
                    <option value="Bengali" >Bengali</option>
                    <option value="Besta" >Besta</option>
                    <option value="Bhandari" >Bhandari</option>
                    <option value="Bhatia" >Bhatia</option>
                    <option value="Bhavasar Kshatriya" >Bhavasar Kshatriya</option>
                    <option value="Bhovi" >Bhovi</option>
                    <option value="Billava" >Billava</option>
                    <option value="Bohra" >Bohra</option>
                    <option value="Born Again" >Born Again</option>
                    <option value="Boyer" >Boyer</option>
                    <option value="Brahmbatt" >Brahmbatt</option>
                    <option value="Brahmin" >Brahmin</option>
                    <option value="Brahmin - Anavi" >Brahmin - Anavi</option>
                    <option value="Brahmin - Audichya" >Brahmin - Audichya</option>
                    <option value="Brahmin - Barendra" >Brahmin - Barendra</option>
                    <option value="Brahmin - Bengali" >Brahmin - Bengali</option>
                    <option value="Brahmin - Bhatt" >Brahmin - Bhatt</option>
                    <option value="Brahmin - Bhumihar" >Brahmin - Bhumihar</option>
                    <option value="Brahmin - Daivadnya" >Brahmin - Daivadnya</option>
                    <option value="Brahmin - Danua" >Brahmin - Danua</option>
                    <option value="Brahmin - Deshastha" >Nair</option>
                    <option value="Brahmin - Dhiman" >Brahmin - Dhiman</option>
                    <option value="Brahmin - Dravida" >Brahmin - Dravida</option>
                    <option value="Brahmin - Garhwali" >Brahmin - Garhwali</option>
                    <option value="Brahmin - Gaur" >Brahmin - Gaur</option>
                    <option value="Brahmin - Goswami" >Brahmin - Goswami</option>
                    <option value="Brahmin - Gurukkal" >Brahmin - Gurukkal</option>
                    <option value="Brahmin - Halua" >Brahmin - Halua</option>
                    <option value="Brahmin - Havyaka" >Brahmin - Havyaka</option>
                    <option value="Brahmin - Hoysala" >Brahmin - Hoysala</option>
                    <option value="Brahmin - Iyengar" >Brahmin - Iyengar</option>
                    <option value="Brahmin - Iyer" >Brahmin - Iyer</option>
                    <option value="Brahmin - Jhadua" >Brahmin - Jhadua</option>
                    <option value="Brahmin - Kanyakubj" >Brahmin - Kanyakubj</option>
                    <option value="Brahmin - Karhade" >Brahmin - Karhade</option>
                    <option value="Brahmin - Kokanastha" >Brahmin - Kokanastha</option>
                    <option value="Brahmin - Kota" >Brahmin - Kota</option>
                    <option value="Brahmin - Kulin" >Brahmin - Kulin</option>
                    <option value="Brahmin - Kumoani" >Brahmin - Kumoani</option>
                    <option value="Brahmin - Madhwa" >Brahmin - Madhwa</option>
                    <option value="Brahmin - Maithil" >Brahmin - Maithil</option>
                    <option value="Brahmin - Modh" >Brahmin - Modh</option>
                    <option value="Brahmin - Mohyal" >Brahmin - Mohyal</option>
                    <option value="Brahmin - Nagar" >Brahmin - Nagar</option>
                    <option value="Brahmin - Namboodiri" >Brahmin - Namboodiri</option>
                    <option value="Brahmin - Niyogi" >Brahmin - Niyogi</option>
                    <option value="Brahmin - Panda" >Brahmin - Panda</option>
                    <option value="Brahmin - Pandit" >Brahmin - Pandit</option>
                    <option value="Brahmin - Punjabi" >Brahmin - Punjabi</option>
                    <option value="Brahmin - Rarhi" >Brahmin - Rarhi</option>
                    <option value="Brahmin - Rigvedi" >Brahmin - Rigvedi</option>
                    <option value="Brahmin - Rudraj" >Brahmin - Rudraj</option>
                    <option value="Brahmin - Sakaldwipi" >Brahmin - Sakaldwipi</option>
                    <option value="Brahmin - Sanadya" >Brahmin - Sanadya</option>
                    <option value="Brahmin - Sanketi" >Brahmin - Sanketi</option>
                    <option value="Brahmin - Saraswat" >Brahmin - Saraswat</option>
                    <option value="Brahmin - Saryuparin" >Brahmin - Saryuparin</option>
                    <option value="Brahmin - Shivhalli" >Brahmin - Shivhalli</option>
                    <option value="Brahmin - Shrimali" >Brahmin - Shrimali</option>
                    <option value="Brahmin - Smartha" >Brahmin - Smartha</option>
                    <option value="Brahmin - Sri Vishnava" >Brahmin - Sri Vishnava</option>
                    <option value="Brahmin - Stanika" >Brahmin - Stanika</option>
                    <option value="Brahmin - Tamil" >Brahmin - Tamil</option>
                    <option value="Brahmin - Telugu" >Brahmin - Telugu</option>
                    <option value="Brahmin - Havyaka" >Brahmin - Havyaka</option>
                    <option value="Brahmin - Tyagi" >Brahmin - Tyagi</option>
                    <option value="Brahmin - Vaidiki" >Brahmin - Vaidiki</option>
                    <option value="Brahmin - Vyas" >Brahmin - Vyas</option>
                    <option value="Bretheren" >Bretheren</option>
                    <option value="Bunt" >Bunt</option>
                    <option value="Chamar" >Chamar</option>
                    <option value="Chambhar" >Chambhar</option>
                    <option value="Chandravanshi Kahar" >Chandravanshi Kahar</option>
                    <option value="Chasa" >Chasa</option>
                    <option value="Chaudary" >Chaudary</option>
                    <option value="Chaurasia" >Chaurasia</option>
                    <option value="Chettiar" >Chettiar</option>
                    <option value="Chhetri" >Chhetri</option>
                    <option value="Church of South India" >Church of South India</option>
                    <option value="CKP" >CKP</option>
                    <option value="Coorgi" >Coorgi</option>
                    <option value="Dawoodi Bhora" >Dawoodi Bhora</option>
                    <option value="Dekkani" >Dekkani</option>
                    <option value="Devadiga" >Devadiga</option>
                    <option value="Devendra Kula Vellalar" >Devendra Kula Vellalar</option>
                    <option value="Devang Koshthi" >Devang Koshthi</option>
                    <option value="Devanga - Kannada" >Devanga - Kannada</option>
                    <option value="Devanga - Telugu" >Devanga - Telugu</option>
                    <option value="Dhaneshawat Vaish" >Dhaneshawat Vaish</option>
                    <option value="Dhangar" >Dhangar</option>
                    <option value="Dheevara" >Dheevara</option>
                    <option value="Dhiman" >Dhiman</option>
                    <option value="Dhoba" >Dhoba</option>
                    <option value="Dhobi" >Dhobi</option>
                    <option value="Digambar" >Digambar</option>
                    <option value="Dudekula" >Dudekula</option>
                    <option value="Ediga" >Ediga</option>
                    <option value="Evangelist" >Evangelist</option>
                    <option value="Ezhava" >Ezhava</option>
                    <option value="Ezhuthachan" >Ezhuthachan</option>
                    <option value="Gabit" >Gabit</option>
                    <option value="Gandla" >Gandla</option>
                    <option value="Ganiga" >Ganiga</option>
                    <option value="Garhwali" >Garhwali</option>
                    <option value="Gavara" >Gavara</option>
                    <option value="Ghumar" >Ghumar</option>
                    <option value="Goala" >Goala</option>
                    <option value="Goan" >Goan</option>
                    <option value="Gomantak Maratha" >Gomantak Maratha</option>
                    <option value="Goswami" >Goswami</option>
                    <option value="Goud" >Goud</option>
                    <option value="Gounder" >Gounder</option>
                    <option value="Gowda" >Gowda</option>
                    <option value="Gudia" >Gudia</option>
                    <option value="Gujarati" >Gujarati</option>
                    <option value="Gupta" >Gupta</option>
                    <option value="Gurjar" >Gurjar</option>
                    <option value="Hanafi" >Hanafi</option>
                    <option value="Intercaste" >Intercaste</option>
                    <option value="Jacobite" >Jacobite</option>
                    <option value="Jaiswal" >Jaiswal</option>
                    <option value="Jangam" >Jangam</option>
                    <option value="Jat" >Jat</option>
                    <option value="Kaibarta" >Kaibarta</option>
                    <option value="Kallar" >Kallar</option>
                    <option value="Kalinga" >Kalinga</option>
                    <option value="Kalita" >Kalita</option>
                    <option value="Kalwar" >Kalwar</option>
                    <option value="Kamboj" >Kamboj</option>
                    <option value="Kamma" >Kamma</option>
                    <option value="Kansari" >Kansari</option>
                    <option value="Kapu" >Kapu</option>
                    <option value="Karana" >Karana</option>
                    <option value="Karmakar" >Karmakar</option>
                    <option value="Karuneegar" >Karuneegar</option>
                    <option value="Kasar" >Kasar</option>
                    <option value="Kashyap" >Kashyap</option>
                    <option value="Kayastha" >Kayastha</option>
                    <option value="Khandayat" >Khandayat</option>
                    <option value="Khandelwal" >Khandelwal</option>
                    <option value="Khatri" >Khatri</option>
                    <option value="Khoja" >Khoja</option>
                    <option value="Knanaya" >Knanaya</option>
                    <option value="Knanaya Catholic" >Knanaya Catholic</option>
                    <option value="Knanaya Jacobite" >Knanaya Jacobite</option>
                    <option value="Koli" >Koli</option>
                    <option value="Kongu Vellala Gounder" >Kongu Vellala Gounder</option>
                    <option value="Konkani" >Konkani</option>
                    <option value="Kori" >Kori</option>
                    <option value="Koshti" >Koshti</option>
                    <option value="Kshatriya" >Kshatriya</option>
                    <option value="Kudumbi" >Kudumbi</option>
                    <option value="Kulala / Kulalar / Kuyavar" >Kulala / Kulalar / Kuyavar</option>
                    <option value="Kulita" >Kulita</option>
                    <option value="Kumaoni Rajput" >Kumaoni Rajput</option>
                    <option value="Kumawat" >Kumawat</option>
                    <option value="Kumbara" >Kumbara</option>
                    <option value="Kumbhakar" >Kumbhakar</option>
                    <option value="Kumbhar" >Kumbhar</option>
                    <option value="Kumhar" >Kumhar</option>
                    <option value="Kummari" >Kummari</option>
                    <option value="Kunbi" >Kunbi</option>
                    <option value="Kurmi" >Kurmi</option>
                    <option value="Kurmi Kshatriya" >Kurmi Kshatriya</option>
                    <option value="Kuruba" >Kuruba</option>
                    <option value="Kuruhina Shetty" >Kuruhina Shetty</option>
                    <option value="Kurumbar" >Kurumbar</option>
                    <option value="Kutchi" >Kutchi</option>
                    <option value="Labbai" >Labbai</option>
                    <option value="Lambadi" >Lambadi</option>
                    <option value="Latin Catholic" >Latin Catholic</option>
                    <option value="Leva Patil" >Leva Patil</option>
                    <option value="Lingayat" >Lingayat</option>
                    <option value="Lohana" >Lohana</option>
                    <option value="Lubana" >Lubana</option>
                    <option value="Madiga" >Madiga</option>
                    <option value="Mahajan" >Mahajan</option>
                    <option value="Mahar" >Mahar</option>
                    <option value="Maharashtrian" >Maharashtrian</option>
                    <option value="Mahendra" >Mahendra</option>
                    <option value="Maheshwari" >Maheshwari</option>
                    <option value="Mahishya" >Mahishya</option>
                    <option value="Majabi" >Majabi</option>
                    <option value="Mala" >Mala</option>
                    <option value="Malankara" >Malankara</option>
                    <option value="Malayalee Namboodiri" >Malayalee Namboodiri</option>
                    <option value="Malayalee Variar" >Malayalee Variar</option>
                    <option value="Mali" >Mali</option>
                    <option value="Malik" >Malik</option>
                    <option value="Malla" >Malla</option>
                    <option value="Mangalorean" >Mangalorean</option>
                    <option value="Manipuri" >Manipuri</option>
                    <option value="Mapila" >Mapila</option>
                    <option value="Maraicar" >Maraicar</option>
                    <option value="Maratha" >Maratha</option>
                    <option value="Marthoma" >Marthoma</option>
                    <option value="Maruthuvar" >Maruthuvar</option>
                    <option value="Maravar" >Maravar</option>
                    <option value="Marwari" >Marwari</option>
                    <option value="Matang" >Matang</option>
                    <option value="Maurya" >Maurya</option>
                    <option value="Meena" >Meena</option>
                    <option value="Meenavar" >Meenavar</option>
                    <option value="Mehra" >Mehra</option>
                    <option value="Memon" >Memon</option>
                    <option value="Menon" >Menon</option>
                    <option value="Meru Darji" >Meru Darji</option>
                    <option value="Mochi" >Mochi</option>
                    <option value="Modak" >Modak</option>
                    <option value="Mogaveera" >Mogaveera</option>
                    <option value="Mudaliar" >Mudaliar</option>
                    <option value="Mudiraj" >Mudiraj</option>
                    <option value="Mughal" >Mughal</option>
                    <option value="Mukkulathor" >Mukkulathor</option>
                    <option value="Muthuraja" >Muthuraja</option>
                    <option value="Nadar" >Nadar</option>
                    <option value="Nai" >Nai</option>
                    <option value="Naicker" >Naicker</option>
                    <option value="Naidu" >Naidu</option>
                    <option value="Naik" >Naik</option>
                    <option value="Nair" >Nair</option>
                    <option value="Nambiar" >Nambiar</option>
                    <option value="Namosudra" >Namosudra</option>
                    <option value="Napit" >Napit</option>
                    <option value="Nayaka" >Nayaka</option>
                    <option value="Nepali" >Nepali</option>
                    <option value="Nhavi" >Nhavi</option>
                    <option value="OBC" >OBC</option>
                    <option value="Oswal" >Oswal</option>
                    <option value="Padmasali" >Padmasali</option>
                    <option value="Pal" >Pal</option>
                    <option value="Panchal" >Panchal</option>
                    <option value="Panicker" >Panicker</option>
                    <option value="Parkava Kulam" >Parkava Kulam</option>
                    <option value="Pasi" >Pasi</option>
                    <option value="Patel" >Patel</option>
                    <option value="Pathan" >Pathan</option>
                    <option value="Patnaick" >Patnaick</option>
                    <option value="Patra" >Patra</option>
                    <option value="Pentacost" >Pentacost</option>
                    <option value="Perika" >Perika</option>
                    <option value="Pillai" >Pillai</option>
                    <option value="Porwal" >Porwal</option>
                    <option value="Prajapati" >Prajapati</option>
                    <option value="Punjabi" >Punjabi</option>
                    <option value="Qureshi" >Qureshi</option>
                    <option value="Rajaka" >Rajaka</option>
                    <option value="Rajasthani" >Rajasthani</option>
                    <option value="Rajbonshi" >Rajbonshi</option>
                    <option value="Rajput" >Rajput</option>
                    <option value="Ramdasia" >Ramdasia</option>
                    <option value="Ramgariah" >Ramgariah</option>
                    <option value="Ravidasia" >Ravidasia</option>
                    <option value="Rawat" >Rawat</option>
                    <option value="Reddy" >Reddy</option>
                    <option value="Roman Catholic" >Roman Catholic</option>
                    <option value="Rowther" >Rowther</option>
                    <option value="Sadgope" >Sadgope</option>
                    <option value="Saha" >Saha</option>
                    <option value="Sahu" >Sahu</option>
                    <option value="Saini" >Saini</option>
                    <option value="Saliya" >Saliya</option>
                    <option value="Scheduled Caste" >Scheduled Caste</option>
                    <option value="Senai Thalaivar" >Senai Thalaivar</option>
                    <option value="Sepahia" >Sepahia</option>
                    <option value="Shafi" >Shafi</option>
                    <option value="Sheikh" >Sheikh</option>
                    <option value="Shetty" >Shetty</option>
                    <option value="Shimpi" >Shimpi</option>
                    <option value="Siddiqui" >Siddiqui</option>
                    <option value="Sindhi" >Sindhi</option>
                    <option value="Sindhi - Amil" >Sindhi - Amil</option>
                    <option value="Sindhi - Baibhand" >Sindhi - Baibhand</option>
                    <option value="Sindhi - Bhanusali" >Sindhi - Bhanusali</option>
                    <option value="Sindhi - Bhatia" >Sindhi - Bhatia</option>
                    <option value="Sindhi - Chhapru" >Sindhi - Chhapru</option>
                    <option value="Sindhi - Dadu" >Sindhi - Dadu</option>
                    <option value="Sindhi - Hyderabadi" >Sindhi - Hyderabadi</option>
                    <option value="Sindhi - Larai" >Sindhi - Larai</option>
                    <option value="Sindhi - Larkana" >Sindhi - Larkana</option>
                    <option value="Sindhi - Lohana" >Sindhi - Lohana</option>
                    <option value="Sindhi - Rohiri" >Sindhi - Rohiri</option>
                    <option value="Sindhi - Sahiti" >Sindhi - Sahiti</option>
                    <option value="Sindhi - Sakkhar" >Sindhi - Sakkhar</option>
                    <option value="Sindhi - Sehwani" >Sindhi - Sehwani</option>
                    <option value="Sindhi - Shikarpuri" >Sindhi - Shikarpuri</option>
                    <option value="Sindhi - Thatai" >Sindhi - Thatai</option>
                    <option value="SKP" >SKP</option>
                    <option value="Somvanshi" >Somvanshi</option>
                    <option value="Sonar" >Sonar</option>
                    <option value="Soni" >Soni</option>
                    <option value="Sourashtra" >Sourashtra</option>
                    <option value="Sozhiya Vellalar" >Sozhiya Vellalar</option>
                    <option value="Sundhi" >Sundhi</option>
                    <option value="Suthar" >Suthar</option>
                    <option value="Swakula Sali" >Swakula Sali</option>
                    <option value="Swarnakar" >Swarnakar</option>
                    <option value="Syed" >Syed</option>
                    <option value="Syrian Catholic" >Syrian Catholic</option>
                    <option value="Syrian Jacobite" >Syrian Jacobite</option>
                    <option value="Syrian Malabar" >Syrian Malabar</option>
                    <option value="Syrian Orthodox" >Syrian Orthodox</option>
                    <option value="Tamboli" >Tamboli</option>
                    <option value="Tanti" >Tanti</option>
                    <option value="Tantubai" >Tantubai</option>
                    <option value="Telaga" >Telaga</option>
                    <option value="Teli" >Teli</option>
                    <option value="Thakkar" >Thakkar</option>
                    <option value="Thakur" >Thakur</option>
                    <option value="Thevar" >Thevar</option>
                    <option value="Thigala" >Thigala</option>
                    <option value="Tili" >Tili</option>
                    <option value="Tribe" >Tribe</option>
                    <option value="Udayar" >Udayar</option>
                    <option value="Uppara" >Uppara</option>
                    <option value="Vaddera" >Vaddera</option>
                    <option value="Vaish" >Vaish</option>
                    <option value="Vaishnav" >Vaishnav</option>
                    <option value="Vaishya" >Vaishya</option>
                    <option value="Valmiki" >Valmiki</option>
                    <option value="Vania" >Vania</option>
                    <option value="Vaniya" >Vaniya</option>
                    <option value="Vanjara" >Vanjara</option>
                    <option value="Vanjari" >Vanjari</option>
                    <option value="Vankar" >Vankar</option>
                    <option value="Vannar" >Vannar</option>
                    <option value="Vannia Kula Kshatriyar" >Vannia Kula Kshatriyar</option>
                    <option value="Vanniyar" >Vanniyar</option>
                    <option value="Varshney" >Varshney</option>
                    <option value="Veera Saivam" >Veera Saivam</option>
                    <option value="Veeraashaiva" >Veeraashaiva</option>
                    <option value="Velama" >Velama</option>
                    <option value="Velethadathu Nair" >Velethadathu Nair</option>
                    <option value="Vellalar" >Vellalar</option>
                    <option value="Vellama" >Vellama</option>
                    <option value="Veluthedathu Nair" >Veluthedathu Nair</option>
                    <option value="Vilakkithala Nair" >Vilakkithala Nair</option>
                    <option value="Vishwakarma" >Vishwakarma</option>
                    <option value="Viswabrahmin" >Viswabrahmin</option>
                    <option value="Vokaliga" >Vokaliga</option>
                    <option value="Vysya" >Vysya</option>
                    <option value="Yadav" >Yadav</option>
                    <option value="Yadava - Tamil" >Yadava - Tamil</option>
                    <option value="Yadava - Telugu" >Yadava - Telugu</option>


                </select>
            </div>

            <div class="item">
                <select name="physicalstatus" >
                    <option selected value="<?php echo "$physicalstatus2"; ?>" selected><?php echo "$physicalstatus2"; ?></option>
                    <option value="Normal" >Normal</option>
                    <option value="Physically Challenged" >Physically Challenged</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <select name="eatinghabit" >
                    <option selected value="<?php echo "$eatinghabit2"; ?>" selected><?php echo "$eatinghabit2"; ?></option>
                    <option value="Vegetarian" >Vegetarian</option>
                    <option value="Non-Vegetarian" >Non-Vegetarian</option>
                    <option value="Eggetarian" >Eggetarian</option>
                </select>
            </div>

            <div class="item">
                <label for="subcaste">Sub Caste</label>
                <input id="subcaste" type="text" name="subcaste" value="<?php echo "$subcaste2"; ?>" />
            </div>

            <div class="item">
                <select name="smokinghabit" >
                    <option selected value="<?php echo "$smokinghabit2"; ?>" selected><?php echo "$smokinghabit2"; ?></option>
                    <option value="Non-Smoker" >Non-Smoker</option>
                    <option value="Light / Social Smoker" >Light / Social Smoker</option>
                    <option value="Frequent Smoker" >Frequent Smoker</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <select name="drinkinghabit" >
                    <option selected value="<?php echo "$drinkinghabit2"; ?>" selected><?php echo "$drinkinghabit2"; ?></option>
                    <option value="Non-Smoker" >Non-Drinker</option>
                    <option value="Light / Social Smoker" >Light / Social Drinker</option>
                    <option value="Frequent Smoker" >Frequent Drinker</option>
                </select>
            </div>

            <div class="item">
                <label for="gothra">Gothra(m)</label>
                <input id="gothra" type="text" name="gothra" value="<?php echo "$gothra2"; ?>" />
            </div>

            <div class="item">
                <select name="familyvalue" >
                    <option selected value="<?php echo "$familyvalue2"; ?>" selected><?php echo "$familyvalue2"; ?></option>
                    <option value="Orthodox" >Orthodox</option>
                    <option value="Traditional" >Traditional</option>
                    <option value="Moderate" >Moderate</option>
                    <option value="Liberal" >Liberal</option>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <select name="familytype" >
                    <option selected value="<?php echo "$familytype2"; ?>" selected><?php echo "$familytype2"; ?></option>
                    <option value="Joint Family" >Joint Family</option>
                    <option value="Nuclear Family" >Nuclear Family</option>
                    <option value="Others" >Others</option>
                </select>
            </div>

            <div class="item">
                <label for="mothertongue">Mother Tongue<span>*</span></label>
                <input id="mothertongue" type="text" name="mothertongue" value="<?php echo "$mothertongue2"; ?>"  />
            </div>

            <div class="item">
                <select name="familystatus" >
                    <option selected value="<?php echo "$familystatus2"; ?>" selected><?php echo "$familystatus2"; ?></option>
                    <option value="Middle Class" >Middle Class</option>
                    <option value="Upper Middle Class" >Upper Middle Class</option>
                    <option value="Rich / Affluent" >Rich / Affluent</option>
                </select>
            </div>

            <div class="item">
                <p>Horoscope Match<span>*</span></p>
                <select name="horoscope" >
                    <option selected value="<?php echo "$horoscope2"; ?>" selected><?php echo "$horoscope2"; ?></option>
                    <option value="Essential" >Essential</option>
                    <option value="Not Essential" >Not Essential</option>
                    <option value="Not Applicable" >Not Applicable</option>
                </select>
            </div>

            <div class="item">
                <p>His / Her Annual Income<span>*</span></p>
                <select name="annualincome" >
                    <option selected value="<?php echo "$annualincome2"; ?>" selected><?php echo "$annualincome2"; ?></option>
                    <option value="Do not wish to specify" >Do not wish to specify</option>
                    <option value="Less than Rs.1 Lakh" >Less than Rs.1 Lakh</option>
                    <option value="Above Rs.1 Lakh to Rs.1.5 Lakh" >Above Rs.1 Lakh to Rs.1.5 Lakh</option>
                    <option value="Above Rs.1.5 Lakh to Rs.2 Lakh" >Above Rs.1.5 Lakh to Rs.2 Lakh</option>
                    <option value="Above Rs.2 Lakh to Rs.2.5 Lakh" >Above Rs.2 Lakh to Rs.2.5 Lakh</option>
                    <option value="Above Rs.2.5 Lakh to Rs.3 Lakh" >Above Rs.2.5 Lakh to Rs.3 Lakh</option>
                    <option value="Above Rs.3 Lakh to Rs.4 Lakh" >Above Rs.3 Lakh to Rs.4 Lakh</option>
                    <option value="Above Rs.4 Lakh to Rs.5 Lakh" >Above Rs.4 Lakh to Rs.5 Lakh</option>
                    <option value="Above Rs.5 Lakh to Rs.6 Lakh" >Above Rs.5 Lakh to Rs.6 Lakh</option>
                    <option value="Above Rs.6 Lakh to Rs.7 Lakh" >Above Rs.6 Lakh to Rs.7 Lakh</option>
                    <option value="Above Rs.7 Lakh to Rs.8 Lakh" >Above Rs.7 Lakh to Rs.8 Lakh</option>
                    <option value="Above Rs.8 Lakh to Rs.9 Lakh" >Above Rs.8 Lakh to Rs.9 Lakh</option>
                    <option value="Above Rs.9 Lakh to Rs.10 Lakh" >Above Rs.9 Lakh to Rs.10 Lakh</option>
                    <option value="Above Rs.10 Lakh to Rs.12 Lakh" >Above Rs.10 Lakh to Rs.12 Lakh</option>
                    <option value="Above Rs.12 Lakh to Rs.14 Lakh" >Above Rs.12 Lakh to Rs.14 Lakh</option>
                    <option value="Above Rs.14 Lakh to Rs.16 Lakh" >Above Rs.14 Lakh to Rs.16 Lakh</option>
                    <option value="Above Rs.16 Lakh to Rs.18 Lakh" >Above Rs.16 Lakh to Rs.18 Lakh</option>
                    <option value="Above Rs.18 Lakh to Rs.20 Lakh" >Above Rs.18 Lakh to Rs.20 Lakh</option>
                    <option value="Above Rs.20 Lakh to Rs.22 Lakh" >Above Rs.20 Lakh to Rs.22 Lakh</option>
                    <option value="Above Rs.22 Lakh to Rs.25 Lakh" >Above Rs.22 Lakh to Rs.25 Lakh</option>
                    <option value="Above Rs.25 Lakh to Rs.30 Lakh" >Above Rs.25 Lakh to Rs.30 Lakh</option>
                    <option value="Above Rs.30 Lakh to Rs.35 Lakh" >Above Rs.30 Lakh to Rs.35 Lakh</option>
                    <option value="Above Rs.35 Lakh to Rs.40 Lakh" >Above Rs.35 Lakh to Rs.40 Lakh</option>
                    <option value="Above Rs.40 Lakh to Rs.45 Lakh" >Above Rs.40 Lakh to Rs.45 Lakh</option>
                    <option value="Above Rs.45 Lakh to Rs.50 Lakh" >Above Rs.45 Lakh to Rs.50 Lakh</option>
                    <option value="Above Rs.50 Lakh to Rs.60 Lakh" >Above Rs.50 Lakh to Rs.60 Lakh</option>
                    <option value="Above Rs.60 Lakh to Rs.70 Lakh" >Above Rs.60 Lakh to Rs.70 Lakh</option>
                    <option value="Above Rs.70 Lakh to Rs.80 Lakh" >Above Rs.70 Lakh to Rs.80 Lakh</option>
                    <option value="Above Rs.80 Lakh to Rs.90 Lakh" >Above Rs.80 Lakh to Rs.90 Lakh</option>
                    <option value="Above Rs.90 Lakh to Rs.1 Crore" >Above Rs.90 Lakh to Rs.1 Crore</option>
                    <option value="Above Rs.1 Crore to Rs.1.2 Crore" >Above Rs.1 Crore to Rs.1.2 Crore</option>
                    <option value="Above Rs.1.2 Crore to Rs.1.4 Crore" >Above Rs.1.2 Crore to Rs.1.4 Crore</option>
                    <option value="Above Rs.1.4 Crore to Rs.1.6 Crore" >Above Rs.1.4 Crore to Rs.1.6 Crore</option>
                    <option value="Above Rs.1.6 Crore to Rs.1.8 Crore" >Above Rs.1.6 Crore to Rs.1.8 Crore</option>
                    <option value="Above Rs.1.8 Crore to Rs.2 Crore" >Above Rs.1.8 Crore to Rs.2 Crore</option>
                    <option value="Above Rs.2 Crore to Rs.2.5 Crore" >Above Rs.2 Crore to Rs.2.5 Crore</option>
                    <option value="Above Rs.2.5 Crore to Rs.3 Crore" >Above Rs.2.5 Crore to Rs.3 Crore</option>
                    <option value="Above Rs.3 Crore" >Above Rs.3 Crore</option>
                </select>
            </div>

            <div class="item">
                <p>Star<span>*</span></p>
                <select name="star" >
                    <option selected value="<?php echo "$star2"; ?>" selected><?php echo "$star2"; ?></option>
                    <option value="Anuradha / Anusham / Anizham" >Anuradha / Anusham / Anizham</option>
                    <option value="Ardra / Thiruvathira" >Ardra / Thiruvathira</option>
                    <option value="Ashlesha / Ayilyam" >Ashlesha / Ayilyam</option>
                    <option value="Ashwini / Ashwathi" >Ashwini / Ashwathi</option>
                    <option value="Bharani" >Bharani</option>
                    <option value="Chitra / Chitha" >Chitra / Chitha</option>
                    <option value="Dhanista / Avittam" >Dhanista / Avittam</option>
                    <option value="Hastha / Atham" >Hastha / Atham</option>
                    <option value="Jyesta / Kettai" >Jyesta / Kettai</option>
                    <option value="Krithika / Karthika" >Krithika / Karthika</option>
                    <option value="Makha / Magam" >Makha / Magam</option>
                    <option value="Moolam / Moola" >Moolam / Moola</option>
                    <option value="Mrigasira / Makayiram" >Mrigasira / Makayiram</option>
                    <option value="Poorvabadrapada / Puratathi" >Poorvabadrapada / Puratathi</option>
                    <option value="Poorvapalguni / Puram / Pubbhe" >Poorvapalguni / Puram / Pubbhe</option>
                    <option value="Poorvashada / Pooradam" >Poorvashada / Pooradam</option>
                    <option value="Punarvasu / Punarpusam" >Punarvasu / Punarpusam</option>
                    <option value="Pushya / Poosam / Pooyam" >Pushya / Poosam / Pooyam</option>
                    <option value="Revathi" >Revathi</option>
                    <option value="Rohini" >Rohini</option>
                    <option value="Shatataraka / Sadayam / Satabishek" >Shatataraka / Sadayam / Satabishek</option>
                    <option value="Shravan / Thiruvonam" >Shravan / Thiruvonam</option>
                    <option value="Swati / Chothi" >Swati / Chothi</option>
                    <option value="Uttarabadrapada / Uthratadhi" >Uttarabadrapada / Uthratadhi</option>
                    <option value="Uttarapalguni / Uthram" >Uttarapalguni / Uthram</option>
                    <option value="Uttarashada / Uthradam" >Uttarashada / Uthradam</option>
                    <option value="Vishaka / Vishakam" >Vishaka / Vishakam</option>
                    <option value="Do not know" >Do not know</option>
                </select>
            </div>

            <div class="item">
                <label for="moreabout">More About Self<span>*</span></label>
                <input id="moreabout" type="text" name="moreabout" value="<?php echo "$moreabout2"; ?>"  />
            </div>

            <div class="item">
                <p>Raasi / Moon Sign<span>*</span></p>
                <select name="raasi" >
                    <option selected value="<?php echo "$raasi2"; ?>" selected><?php echo "$raasi2"; ?></option>
                    <option value="Aries ( Mesha(m) )" >Aries ( Mesha(m) )</option>
                    <option value="Taurus ( Rishabh / Vrishaba )" >Taurus ( Rishabh / Vrishaba )</option>
                    <option value="Gemini ( Mithuna(m) )" >Gemini ( Mithuna(m) )</option>
                    <option value="Cancer ( Kataka(m)  )" >Cancer ( Kataka(m)  )</option>
                    <option value="Leo ( Simha(m) )" >Leo ( Simha(m) )</option>
                    <option value="Virgo ( Kanni / Kanya )" >Virgo ( Kanni / Kanya )</option>
                    <option value="Libra ( Thula )" >Libra ( Thula )</option>
                    <option value="Scorpio ( Vrichiga(m) / Vrishchika )" >Scorpio ( Vrichiga(m) / Vrishchika )</option>
                    <option value="Sagittarius ( Dhanus )" >Sagittarius ( Dhanus )</option>
                    <option value="Capricorn ( Makara(m) )" >Capricorn ( Makara(m) )</option>
                    <option value="Aquarius ( Kumba(m) )" >Aquarius ( Kumba(m) )</option>
                    <option value="Pisces ( Meena(m) )" >Pisces ( Meena(m) )</option>
                    <option value="Do not know" >Do not know</option>
                </select>
            </div>

            <div class="item">
                <label for="expectation">Your Expectation<span>*</span></label>
                <input id="expectation" type="text" name="expectation" value="<?php echo "$expectation2"; ?>"  />
            </div>

            <div class="item">
                <p>Dhosham / Mangalik</p>
                <select name="dhosham">
                    <option selected value="<?php echo "$dhosham2"; ?>" selected><?php echo "$dhosham2"; ?></option>
                    <option value="No" >No</option>
                    <option value="Yes" >Yes</option>
                </select>
            </div>

            <div class="item">
                <label for="siblings">About Parents Siblings<span>*</span></label>
                <input id="siblings" type="text" name="siblings" value="<?php echo "$siblings2"; ?>"  />
            </div>

            <div class="item">
                <label for="height">Height<span>*</span></label>
                <input id="height" placeholder="eg. 5ft 6inch OR 170Cms" type="text" name="height" value="<?php echo "$height2"; ?>"  />
            </div>

            <div class="item">
                <label for="pass">Password<span>*</span></label>
                <input id="pass" type="password" name="pass" value="<?php echo "$pass2"; ?>"  />
            </div>

            <div class="item">
                <label for="weight">Weight<span>*</span></label>
                <input id="weight" placeholder="in Kg" type="text" name="weight" value="<?php echo "$weight2"; ?>"  />
            </div>

            <div class="item">
                <label for="repass">Re-type Password<span>*</span></label>
                <input id="repass" type="password" name="repass" value="<?php echo "$repass2"; ?>"  />
            </div>

            <div class="item">
                <label for="referredby">How do you know about us?<span>*</span></label>
                <input id="referredby" placeholder="eg. Friend or Google Search" type="text" name="referredby" value="<?php echo "$referredby2"; ?>"  />
            </div>

        </div>
        <br>

        <center>
            <p style="color: red">
                Click on <b>UPDATE</b> button to update all records.
            </p>
        </center>
        <br>
        <div class="btn-block">
            <button name="update" type="submit">UPDATE</button>
        </div>
    </form>

    <?php
    include ('connection.php');

    if(isset($_GET['update']))
    {

        $name = $_GET['name'];
        $gender = $_GET['gender'];
        $age = $_GET['age'];
        $maritalstatus = $_GET['maritalstatus'];
        $education = $_GET['education'];
        $detailededucation = $_GET['detailededucation'];
        $occupation = $_GET['occupation'];
        $religion = $_GET['religion'];
        $caste = $_GET['caste'];
        $subcaste = $_GET['subcaste'];
        $gothra = $_GET['gothra'];
        $mothertongue = $_GET['mothertongue'];
        $horoscope = $_GET['horoscope'];
        $star = $_GET['star'];
        $raasi = $_GET['raasi'];
        $dhosham = $_GET['dhosham'];
        $height = $_GET['height'];
        $weight = $_GET['weight'];
        $citizenship = $_GET['citizenship'];
        $homestate = $_GET['homestate'];
        $homecity = $_GET['homecity'];
        $currentcountry = $_GET['currentcountry'];
        $currentcity = $_GET['currentcity'];
        $email = $_GET['email'];
        $reemail = $_GET['reemail'];
        $bodytype = $_GET['bodytype'];
        $complexion = $_GET['complexion'];
        $physicalstatus = $_GET['physicalstatus'];
        $eatinghabit = $_GET['eatinghabit'];
        $smokinghabit = $_GET['smokinghabit'];
        $drinkinghabit = $_GET['drinkinghabit'];
        $familyvalue = $_GET['familyvalue'];
        $familytype = $_GET['familytype'];
        $familystatus = $_GET['familystatus'];
        $annualincome = $_GET['annualincome'];
        $siblings = $_GET['siblings'];
        $moreabout = $_GET['moreabout'];
        $expectation = $_GET['expectation'];
        $pass = $_GET['pass'];
        $repass = $_GET['repass'];
        $referredby = $_GET['referredby'];

        $query = "SELECT * FROM entries where email='$email'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        $email_get = $row['email'];
        $name_get = $row['name'];
        $query = "UPDATE entries SET name='$name', gender='$gender', age='$age', maritalstatus='$maritalstatus', education='$education', detailededucation='$detailededucation', occupation='$occupation', religion='$religion', caste='$caste', subcaste='$subcaste', gothra='$gothra', mothertongue='$mothertongue', horoscope='$horoscope', star='$star', raasi='$raasi', dhosham='$dhosham', height='$height', weight='$weight', citizenship='$citizenship', homestate='$homestate', homecity='$homecity', currentcountry='$currentcountry', currentcity='$currentcity', email='$email', reemail='$reemail', bodytype='$bodytype', complexion='$complexion', physicalstatus='$physicalstatus', eatinghabit='$eatinghabit', smokinghabit='$smokinghabit', drinkinghabit='$drinkinghabit', familyvalue='$familyvalue', familytype='$familytype', familystatus='$familystatus', annualincome='$annualincome', siblings='$siblings', moreabout='$moreabout', expectation='$expectation', pass='$pass', repass='$repass', referredby='$referredby' WHERE name='$name_get' AND email='$email_get'";
        $data = mysqli_query($conn, $query);

        if ($data) {
            echo "<script>window.location.replace('index')</script>";
        } else {
            echo "<p style='color: red'>There's some issue while updating an entry, Please contact Admin/Developer <b>OR</b> raise a request at <a style='color: green' href='http://vhtechnologies.in' target='_blank'><b>VH Technologies</b></a>.</p>";
        }
    }
    ?>

</div>
</body>
</html>