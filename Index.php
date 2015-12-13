<?php session_start(); 
?>
<html>
<head>
<script src="facebook.js"></script>
<script src="linkedin.js"></script>
<script type="text/javascript" src="//platform.linkedin.com/in.js">
    api_key: 754xe2qk5wrfxl
    authorize: true
    onLoad: onLinkedInLoad
</script>

<script type="text/javascript">
function validateEmail() {
    
    var x = document.forms["form1"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
      
}
function resetb() {
		fb_logout();
		ln_logout();
}
</script>


<?php 
extract($_POST);
extract($_GET);

if( isset($Submit) )
{
	$con = new mysqli("localhost", "root", "", "applicant");
	if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
    
    $sql="INSERT INTO applicants (firstname, lastname, email, country, street1, street2, postcode, suburb) VALUES ('$fname','$lname','$email','$country','$st1','$st2','$postcode','$suburb')";
    $result = mysqli_query($con,$sql);
     
    if (!$result) {
    echo "$fname $lname $country $st1 $st2 $postcode $suburb";
      die('Error: ' . mysql_error());
    }-
	$_SESSION["ID"]= mysqli_insert_id($con);
    ?>
    <script language="javascript" type="text/javascript">
	alert("Candidate has been added to the database");
    location.href="View.php";

</script> 
<?php  
}
?>
<link href="img/Style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1></h1>
<table class="main"  border="0">
  <tbody>
    <tr>
      <td width="1693" rowspan="9"><img src="img/expr3ss-logo.jpg" width="246" height="192" alt=""/></td>
      <td width="150" align="center"></td>
      <td width="47" rowspan="9">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"></p></td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div class="defaultButton" onclick="location.href='Index.php';">Home</div></td>
    </tr>
    <tr>
      <td align="center" valign="middle"><div class="defaultButton" onclick="location.href='ViewAll.php';">View all applicants</div></td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><img src="img/Capture.JPG" width="100%"  alt=""/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<form name="form1" method="post" action="<?php print $_SERVER['PHP_SELF'];?>">
  <table class="main" border="0" align="center" >

<tr><td colspan="2" class="lable"> 

</td></tr>
   <tr><td colspan="2" class="lable">Social Media logins: </td></tr> 
   <tr><td class="lable">
   <div class="fb-login-button" data-max-rows="3" data-size="large" data-show-faces="false"  scope="public_profile,email" onlogin="checkLoginState();"></div></td></tr>
     <tr><td class="lable">
<script type="in/Login"></script>
     </td></tr> 
   <tr><td colspan="2" class="lable">First Name: </td></tr> 
   <tr><td colspan="2"><input class="input" name="fname" type="text" id="fn" size="20"></td></tr>
   <tr><td colspan="2" class="lable">Last Name:</td></tr> 
   <tr><td colspan="2"><input class="input" name="lname" type="text" id="ln" size="20"></td></tr>
   <tr><td colspan="2" class="lable">Email: </td></tr>
   <tr><td colspan="2"><input  class="input" name="email" type="text" id="em" size="20"></td></tr>
   <tr><td colspan="2" class="lable">Country: </td></tr>
   <tr><td colspan="2"><select  class="input" id='country' name='country' >
                <option value='Australia' selected >Australia</option>
                <option value='New Zealand' >New Zealand</option>
                <option value='United Kingdom' >United Kingdom</option>
                <option value='United States' >United States</option>
                <option value='Canada' >Canada</option>
                <option value='Afghanistan' >Afghanistan</option>
                <option value='Albania' >Albania</option>
                <option value='Algeria' >Algeria</option>
                <option value='American Samoa' >American Samoa</option>
                <option value='Andorra' >Andorra</option>
                <option value='Angola' >Angola</option>
                <option value='Anguilla' >Anguilla</option>
                <option value='Antarctica' >Antarctica</option>
                <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
                <option value='Argentina' >Argentina</option>
                <option value='Armenia' >Armenia</option>
                <option value='Aruba' >Aruba</option>
                <option value='Ascension' >Ascension</option>
                <option value='Austria' >Austria</option>
                <option value='Azerbaijan' >Azerbaijan</option>
                <option value='Bahamas' >Bahamas</option>
                <option value='Bahrain' >Bahrain</option>
                <option value='Bangladesh' >Bangladesh</option>
                <option value='Barbados' >Barbados</option>
                <option value='Belarus' >Belarus</option>
                <option value='Belgium' >Belgium</option>
                <option value='Belize' >Belize</option>
                <option value='Benin' >Benin</option>
                <option value='Bermuda' >Bermuda</option>
                <option value='Bhutan' >Bhutan</option>
                <option value='Bolivia' >Bolivia</option>
                <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
                <option value='Botswana' >Botswana</option>
                <option value='Brazil' >Brazil</option>
                <option value='British Indian Ocean Territory' >British Indian Ocean Territory</option>
                <option value='Brunei Darussalam' >Brunei Darussalam</option>
                <option value='Bulgaria' >Bulgaria</option>
                <option value='Burkina Faso' >Burkina Faso</option>
                <option value='Burundi' >Burundi</option>
                <option value='Cite D Ivoire' >Cite D&#39;Ivoire</option>
                <option value='Cambodia' >Cambodia</option>
                <option value='Cameroon' >Cameroon</option>
                <option value='Cape Verde' >Cape Verde</option>
                <option value='Cayman Islands' >Cayman Islands</option>
                <option value='Central African Republic' >Central African Republic</option>
                <option value='Chad' >Chad</option>
                <option value='Chile' >Chile</option>
                <option value='China' >China</option>
                <option value='Christmas Island' >Christmas Island</option>
                <option value='Cocos(Keeling)Island' >Cocos(Keeling)Island</option>
                <option value='Colombia' >Colombia</option>
                <option value='Comoros' >Comoros</option>
                <option value='Congo' >Congo</option>
                <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
                <option value='Cook Islands' >Cook Islands</option>
                <option value='Costa Rica' >Costa Rica</option>
                <option value='Croatia' >Croatia</option>
                <option value='Cuba' >Cuba</option>
                <option value='Cyprus' >Cyprus</option>
                <option value='Czech Republic' >Czech Republic</option>
                <option value='Denmark' >Denmark</option>
                <option value='Djibouti' >Djibouti</option>
                <option value='Dominica' >Dominica</option>
                <option value='Dominican Republic' >Dominican Republic</option>
                <option value='Ecuador' >Ecuador</option>
                <option value='Egypt' >Egypt</option>
                <option value='El Salvador' >El Salvador</option>
                <option value='Equatorial Guinea' >Equatorial Guinea</option>
                <option value='Eritrea' >Eritrea</option>
                <option value='Estonia' >Estonia</option>
                <option value='Ethiopia' >Ethiopia</option>
                <option value='Falkland Islands (Malvinas)' >Falkland Islands (Malvinas)</option>
                <option value='Faroe Islands' >Faroe Islands</option>
                <option value='Fiji' >Fiji</option>
                <option value='Finland' >Finland</option>
                <option value='France' >France</option>
                <option value='French Guiana' >French Guiana</option>
                <option value='French Polynesia' >French Polynesia</option>
                <option value='Gabon' >Gabon</option>
                <option value='Gambia' >Gambia</option>
                <option value='Georgia' >Georgia</option>
                <option value='Germany' >Germany</option>
                <option value='Ghana' >Ghana</option>
                <option value='Gibraltar' >Gibraltar</option>
                <option value='Greece' >Greece</option>
                <option value='Greenland' >Greenland</option>
                <option value='Grenada' >Grenada</option>
                <option value='Guadeloupe' >Guadeloupe</option>
                <option value='Guam' >Guam</option>
                <option value='Guatemala' >Guatemala</option>
                <option value='Guernsey' >Guernsey</option>
                <option value='Guinea' >Guinea</option>
                <option value='Guinea-Bissau' >Guinea-Bissau</option>
                <option value='Guyana' >Guyana</option>
                <option value='Haiti' >Haiti</option>
                <option value='Holy See (Vatican City State)' >Holy See (Vatican City State)</option>
                <option value='Honduras' >Honduras</option>
                <option value='Hong Kong' >Hong Kong</option>
                <option value='Hungary' >Hungary</option>
                <option value='Iceland' >Iceland</option>
                <option value='India' >India</option>
                <option value='Indonesia' >Indonesia</option>
                <option value='Inmarsat Atlantic Ocean-East' >Inmarsat Atlantic Ocean-East</option>
                <option value='Inmarsat Atlantic Ocean-West' >Inmarsat Atlantic Ocean-West</option>
                <option value='Inmarsat Indian Ocean' >Inmarsat Indian Ocean</option>
                <option value='Inmarsat Pacific Ocean' >Inmarsat Pacific Ocean</option>
                <option value='Inmarsat Single Number Access' >Inmarsat Single Number Access</option>
                <option value='Iran' >Iran</option>
                <option value='Iraq' >Iraq</option>
                <option value='Ireland' >Ireland</option>
                <option value='Isle of Man' >Isle of Man</option>
                <option value='Israel' >Israel</option>
                <option value='Italy' >Italy</option>
                <option value='Jamaica' >Jamaica</option>
                <option value='Japan' >Japan</option>
                <option value='Jersey' >Jersey</option>
                <option value='Jordan' >Jordan</option>
                <option value='Kazakhstan' >Kazakhstan</option>
                <option value='Kenya' >Kenya</option>
                <option value='Kiribati' >Kiribati</option>
                <option value='Korea, Democratic Peoples Republic of' >Korea, Democratic People&#39;s Republic of</option>
                <option value='Korea, Republic of' >Korea, Republic of</option>
                <option value='Kuwait' >Kuwait</option>
                <option value='Kyrgyz Republic' >Kyrgyz Republic</option>
                <option value='Lao Peoples Democratic Republic' >Lao People&#39;s Democratic Republic</option>
                <option value='Latvia' >Latvia</option>
                <option value='Lebanon' >Lebanon</option>
                <option value='Lesotho' >Lesotho</option>
                <option value='Liberia' >Liberia</option>
                <option value='Libyan Arab Jamahiriya' >Libyan Arab Jamahiriya</option>
                <option value='Liechtenstein' >Liechtenstein</option>
                <option value='Lithuania' >Lithuania</option>
                <option value='Luxembourg' >Luxembourg</option>
                <option value='Macao' >Macao</option>
                <option value='Macedonia' >Macedonia</option>
                <option value='Madagascar' >Madagascar</option>
                <option value='Malawi' >Malawi</option>
                <option value='Malaysia' >Malaysia</option>
                <option value='Maldives' >Maldives</option>
                <option value='Mali' >Mali</option>
                <option value='Malta' >Malta</option>
                <option value='Marshall Islands' >Marshall Islands</option>
                <option value='Martinique' >Martinique</option>
                <option value='Mauritania' >Mauritania</option>
                <option value='Mauritius' >Mauritius</option>
                <option value='Mayotte' >Mayotte</option>
                <option value='Mexico' >Mexico</option>
                <option value='Micronesia' >Micronesia</option>
                <option value='Moldova' >Moldova</option>
                <option value='Monaco' >Monaco</option>
                <option value='Mongolia' >Mongolia</option>
                <option value='Montserrat' >Montserrat</option>
                <option value='Morocco' >Morocco</option>
                <option value='Mozambique' >Mozambique</option>
                <option value='Myanmar' >Myanmar</option>
                <option value='Namibia' >Namibia</option>
                <option value='Nauru' >Nauru</option>
                <option value='Nepal' >Nepal</option>
                <option value='Netherlands' >Netherlands</option>
                <option value='Netherlands Antilles' >Netherlands Antilles</option>
                <option value='New Caledonia' >New Caledonia</option>
                <option value='Nicaragua' >Nicaragua</option>
                <option value='Niger' >Niger</option>
                <option value='Nigeria' >Nigeria</option>
                <option value='Niue' >Niue</option>
                <option value='Norfolk Island' >Norfolk Island</option>
                <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
                <option value='Norway' >Norway</option>
                <option value='Oman' >Oman</option>
                <option value='Pakistan' >Pakistan</option>
                <option value='Palau' >Palau</option>
                <option value='Palestinian Territory, Occupied' >Palestinian Territory, Occupied</option>
                <option value='Panama' >Panama</option>
                <option value='Papua New Guinea' >Papua New Guinea</option>
                <option value='Paraguay' >Paraguay</option>
                <option value='Peru' >Peru</option>
                <option value='Philippines' >Philippines</option>
                <option value='Poland' >Poland</option>
                <option value='Portugal' >Portugal</option>
                <option value='Puerto Rico' >Puerto Rico</option>
                <option value='Qatar' >Qatar</option>
                <option value='Reunion' >Reunion</option>
                <option value='Romania' >Romania</option>
                <option value='Russian Federation' >Russian Federation</option>
                <option value='Rwanda' >Rwanda</option>
                <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
                <option value='Saint Helena' >Saint Helena</option>
                <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
                <option value='Saint Lucia' >Saint Lucia</option>
                <option value='Saint Pierre and Miquelon' >Saint Pierre and Miquelon</option>
                <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
                <option value='Samoa' >Samoa</option>
                <option value='San Marino' >San Marino</option>
                <option value='Saudi Arabia' >Saudi Arabia</option>
                <option value='Senegal' >Senegal</option>
                <option value='Serbia and Montenegro' >Serbia and Montenegro</option>
                <option value='Seychelles' >Seychelles</option>
                <option value='Sierra Leone' >Sierra Leone</option>
                <option value='Singapore' >Singapore</option>
                <option value='Slovakia' >Slovakia</option>
                <option value='Slovenia' >Slovenia</option>
                <option value='Solomon Islands' >Solomon Islands</option>
                <option value='Somalia' >Somalia</option>
                <option value='South Africa' >South Africa</option>
                <option value='Spain' >Spain</option>
                <option value='Sri Lanka' >Sri Lanka</option>
                <option value='Sudan' >Sudan</option>
                <option value='Suriname' >Suriname</option>
                <option value='Swaziland' >Swaziland</option>
                <option value='Sweden' >Sweden</option>
                <option value='Switzerland' >Switzerland</option>
                <option value='Syria' >Syria</option>
                <option value='Taiwan' >Taiwan</option>
                <option value='Tajikistan' >Tajikistan</option>
                <option value='Tanzania' >Tanzania</option>
                <option value='Thailand' >Thailand</option>
                <option value='Timor-Leste' >Timor-Leste</option>
                <option value='Togo' >Togo</option>
                <option value='Tokelau' >Tokelau</option>
                <option value='Tonga' >Tonga</option>
                <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
                <option value='Tunisia' >Tunisia</option>
                <option value='Turkey' >Turkey</option>
                <option value='Turkmenistan' >Turkmenistan</option>
                <option value='Turks and Caicos Islands' >Turks and Caicos Islands</option>
                <option value='Tuvalu' >Tuvalu</option>
                <option value='Uganda' >Uganda</option>
                <option value='Ukraine' >Ukraine</option>
                <option value='United Arab Emirates' >United Arab Emirates</option>
                <option value='Uruguay' >Uruguay</option>
                <option value='Uzbekistan' >Uzbekistan</option>
                <option value='Vanuatu' >Vanuatu</option>
                <option value='Venezuela' >Venezuela</option>
                <option value='Viet Nam' >Viet Nam</option>
                <option value='Virgin Islands, British' >Virgin Islands, British</option>
                <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
                <option value='Wallis and Futuna Islands' >Wallis and Futuna Islands</option>
                <option value='Yemen' >Yemen</option>
                <option value='Zambia' >Zambia</option>
                <option value='Zimbabwe' >Zimbabwe</option>    
                </select></td></tr>
   <tr><td colspan="2" class="lable">Street 1: </td></tr>
   <tr><td colspan="2"><input  class="input" name="st1" type="text" id="st1" size="20"></td></tr>
   <tr><td colspan="2" class="lable">Street 2: </td></tr>
   <tr><td colspan="2"><input  class="input" name="st2" type="text" id="st2" size="20"></td></tr>
   <tr><td colspan="2" class="lable">Postcode: </td></tr>
   <tr><td colspan="2"><input  class="input" name="postcode" type="text" id="postcode" size="20"></td></tr>
   <tr><td colspan="2" class="lable"->Suburb: </td></tr>
   <tr><td colspan="2"><input  class="input" name="suburb" type="text" id="suburb" size="20"></td></tr>
   <tr><td colspan="2" align="center"><input type="submit" name="Submit" value="Submit" onclick="return validateEmail()" style="font-family: sans-serif; font-size: 20px;">
   <input type="Reset" name="Reset" value="Reset" onclick="resetb()" style="font-family: sans-serif; font-size: 20px;"> </td></tr>
  </table>
</form>
</body>
</html>