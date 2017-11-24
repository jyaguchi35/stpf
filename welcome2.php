<?php
include "dbConnection.php";
include "templates/tmp_header.php";
$msg.="
<div class=\"toc\">
<form method=\"post\" action=\"welcome2.php\" enctype=\"multipart/form-data\" name=\"hotel\" onsubmit=\"return ValidForm()\">
<table cellpadding=\"1\" cellspacing=\"1\" width=\"100%\" class=\"shop_table txt-left\" align=\"center\">
 <tr>
	<th colspan=\"2\" align=\"left\" style=\"font-size:12px;\">Fields marked (<font color=\"#f00\">*</font>) are required fields.</th>
</tr>
<tr>
	<th colspan=\"2\"><h3><font color=\"peru\">Hotel/data collection for STPF application</h3></th>
</tr>
<tr>
	<th colspan=\"2\"><h3><font color=\"brown\">About Hotel</h3></th>
</tr>
<tr>
	<th>&nbsp; </th>
	<td>
	<input type=\"submit\" name=\"submit\" value=\"Save Hotel Data\" >
	<input type=\"hidden\" name=\"option\" value=\"addParse\">
	</td>
</tr>
<tr>
	<th>Hotel Name :<font color=\"red\">*</font> </th>
	<td><input type=\"text\" name=\"hotelname\" size=\"45\"><span id=\"hotelname\"></span>
	</td>
</tr>

<tr>
	<th>Address :<font color=\"red\">*</font> </th>
	<td>
			<input type=\"text\" name=\"address\" size=\"45\"  onclick=\"this.value=''\">
			<span id=\"location\"></span>
	</td>
</tr>
<tr>
	<th>Location :<font color=\"red\">*</font> </th>
	<td><input type=\"text\" name=\"location\" size=\"45\"><span id=\"location\"></span></td>
</tr>
  ";	  

$msg.="
<tr>
	<th>Location :<font color=\"red\">*</font> </th>
	<td>Country: \"Japan\"
	

	</td>
</tr>
  ";
	

$msg.="

<tr>
	<th>Email : </th>
	<td><input type=\"text\" name=\"email\" size=\"45\"><span id=\"email\"></span>
	</td>
</tr>

<tr>
	<th>Website : </th>
	<td><input type=\"text\" name=\"website\" size=\"45\"><span id=\"Location\"></span></td>
</tr>

<tr>
	<th>Telephone Number :<font color=\"red\">*</font> </th>
	<td><input type=\"text\" name=\"telephone\" size=\"45\"><span id=\"telephone\"></span></td>
</tr>

<tr>
	<th>Fax Number : </th>
	<td><input type=\"text\" name=\"fax\" size=\"45\"></td>
</tr>

<tr>
	<th>Distance from Airport : </th>
	<td><input type=\"text\" name=\"DA\" size=\"5\">km &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type=\"text\" name=\"DAT\" size=\"5\">min by driving</td>
</tr>

<tr>
	<th>Distance from Rail Station : </th>
	<td><input type=\"text\" name=\"DRS\" size=\"5\">km &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type=\"text\" name=\"DRT\" size=\"5\">min by walking</td>
</tr>
<tr>
	<th>Distance from Bus Station : </th>
	<td><input type=\"text\" name=\"DBS\" size=\"5\">km &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type=\"text\" name=\"DBT\" size=\"5\">min by walking</td>
</tr>

<tr>
	<th colspan=\"2\"><h3><font color=\"brown\">About room and expenses</h3></th>
</tr>
<tr>
	<th colspan=\"2\"><h3><font color=\"brown\">Types of rooms and approximately prices</h3></th>
</tr>

<tr>
	<th colspan=\"2\"><h3><font color=\"teal\">Types of Bed</h3></th>
</tr>
<th>Number of Rooms : </th>
	<td><input type=\"text\" name=\"room\" size=\"45\"></td>
</tr>
<tr>
	<th colspan=\"2\"><b><font color=\"olive\">Single Beds</b></th>
</tr>
<tr>

	<th>Number of beds : </th>
	<td><input type=\"text\" name=\"bed1\" size=\"45\"></td>
</tr>
<tr>
<th>Minimum price jypn : </th>
	<td><input type=\"text\" name=\"SMP\" size=\"45\"></td>
</tr>
<tr>
<th>Maximum price jypn : </th>
	<td><input type=\"text\" name=\"SXP\" size=\"45\"></td>
</tr>
<tr>
<th>Average price jypn : </th>
	<td><input type=\"text\" name=\"SAP\" size=\"45\"></td>
</tr>
<th>Room size : </th>
	<td><input type=\"text\" name=\"size1\" size=\"45\">/m</td>
</tr>
<tr>
	<th colspan=\"2\"><b><font color=\"olive\">Double Beds</b></th>
</tr>
<tr>
	<th>Number of beds : </th>
	<td><input type=\"text\" name=\"bed2\" size=\"45\"></td>
</tr>
<tr>
<th>Minimum price jypn : </th>
	<td><input type=\"text\" name=\"DMP\" size=\"45\"></td>
</tr>
<tr>
<th>Maximum price jypn : </th>
	<td><input type=\"text\" name=\"DXP\" size=\"45\"></td>
</tr>
<tr>
<th>Average price jypn : </th>
	<td><input type=\"text\" name=\"DAP\" size=\"45\"></td>
</tr>
<tr>
<th>Room size : </th>
	<td><input type=\"text\" name=\"size2\" size=\"45\">/m</td>
</tr>
<tr>
	<th colspan=\"2\"><b><font color=\"olive\">Triple Beds</b></th>
</tr>
<tr>
<th>Number of beds : </th>
	<td><input type=\"text\" name=\"bed3\" size=\"45\"></td>
</tr>
<tr>
<th>Minimum price jypn : </th>
	<td><input type=\"text\" name=\"TMP\" size=\"45\"></td>
</tr>
<tr>
<th>Maximum price jypn : </th>
	<td><input type=\"text\" name=\"TXP\" size=\"45\"></td>
</tr>
<tr>
<th>Average price jypn : </th>
	<td><input type=\"text\" name=\"TAP\" size=\"45\"></td>
</tr>
<tr>
<th>Room size : </th>
	<td><input type=\"text\" name=\"size4\" size=\"45\">/m</td>
</tr>
<tr>
	<th colspan=\"2\"><b><font color=\"olive\">Dormitory Rooms</b></th>
</tr>
<tr>
<th>Dormitory beds : </th>
	<td><input type=\"text\" name=\"DB\" size=\"45\"></td>
</tr>
<tr>
	<th colspan=\"2\"><b><font color=\"brown\">Aproximately expenses for a couple 1day and night</b></th>
</tr>
<tr>
<th>Minimum price jypn : </th>
	<td><input type=\"text\" name=\"MPC\" size=\"45\"></td>
</tr>
<tr>
<th>Maximum price jypn : </th>
	<td><input type=\"text\" name=\"XPC\" size=\"45\">/m</td>
</tr>

<tr>
	<th colspan=\"2\"><b><font color=\"brown\">Facility and Services</b></th>
</tr>
<tr>
	<th>Wi-Fi facility :<font color=\"red\">*</font></th>
	<td>yes: <input type=\"radio\" name=\"wifi\" value=\"y\"></br>no: <input type=\"radio\" name=\"wifi\" value=\"n\"><br></br></td>
</tr>
<tr>
	<th>Hot spring service:<font color=\"red\">*</font></th>
	<td>yes: <input type=\"radio\" name=\"hotspring\" value=\"y\"></br>no: <input type=\"radio\" name=\"hotspring\" value=\"n\"><br></br></td>
</tr>
<tr>
	<th>Bath :<font color=\"red\">*</font></th>
	<td>yes: <input type=\"radio\" name=\"bath\" value=\"y\"></br>no: <input type=\"radio\" name=\"bath\" value=\"n\"><br></br></td>
</tr>
<tr>
	<th>Laundry :<font color=\"red\">*</font></th>
	<td>yes: <input type=\"radio\" name=\"laundry\" value=\"y\"></br>no: <input type=\"radio\" name=\"laundry\" value=\"n\"><br></br></td>
</tr>
<tr>
	<th>Dry cleaning service :<font color=\"red\">*</font></th>
	<td>yes: <input type=\"radio\" name=\"DCS\" value=\"y\"></br>no: <input type=\"radio\" name=\"DCS\" value=\"n\"><br></br></td>
</tr>
<tr>
	<th>Sauna :<font color=\"red\">*</font></th>
	<td>yes: <input type=\"radio\" name=\"sauna\" value=\"y\"></br>no: <input type=\"radio\" name=\"sauna\" value=\"n\"><br></br></td>
</tr>

<tr>
	<th colspan=\"2\"><b><font color=\"base03\">Number of Visitors</b></th>
</tr>
<tr>
<th>Per week : </th>
	<td><input type=\"text\" name=\"PWV\" size=\"45\"></td>
</tr>
<tr>
<th>Per month : </th>
	<td><input type=\"text\" name=\"PMV\" size=\"45\"></td>
</tr>
<tr>
<th>Per year : </th>
	<td><input type=\"text\" name=\"PYV\" size=\"45\"></td>
</tr>
<tr>
<th>Owner`s contact number : </th>
	<td><input type=\"text\" name=\"ownercontnumber\" size=\"45\"></td>
</tr>

";

?>

<?php
$msg.="

<!--<tr>
	<th>Username :<font color=\"red\">*</font></th>
	<td><input type=\"text\" name=\"username\" id=\"usernameinput\" size=\"45\"><span id=\"username\"></span><span id=\"msgbox\" style=\"display:none\"></span></td>
</tr>

<tr>
	<th>Password :<font color=\"red\">*</font></th>
	<td><input type=\"password\" name=\"password\" size=\"45\"><span id=\"password\"></span></td>
</tr>-->

<tr>
	<th>&nbsp; </th>
	<td>
	<input type=\"submit\" name=\"submit\" value=\"Save Hotel\" >
	
	<!--<input type=\"hidden\" name=\"option\" value=\"submitParse\">-->
	</td>
</tr>
</table>
</form>

</div>
";

if(isset($_POST['submit'])){
	$hotelname=$_POST['hotelname'];
	$address=$_POST['address'];
	$location=$_POST['location'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$telephone=$_POST['telephone'];
	$fax=$_POST['fax'];
	$DA=$_POST['DA'];
	$DAT=$_POST['DAT'];
	$DRS=$_POST['DRS'];
	$DRT=$_POST['DRT'];
	$DBS=$_POST['DBS'];
	$DBT=$_POST['DBT'];
	$room=$_POST['room'];
	$bed1=$_POST['bed1'];
	$SMP=$_POST['SMP'];
	$SXP=$_POST['SXP'];
	$SAP=$_POST['SAP'];
	$size1=$_POST['size1'];
	$bed2=$_POST['bed2'];
	$DMP=$_POST['DMP'];
	$DXP=$_POST['DXP'];
	$DAP=$_POST['DAP'];
	$size2=$_POST['size2'];
	$bed3=$_POST['bed3'];
	$TMP=$_POST['TMP'];
	$TXP=$_POST['TXP'];
	$TAP=$_POST['TAP'];
	$size3=$_POST['size3'];
	$DB=$_POST['DB'];
	$MPC=$_POST['MPC'];
	$XPC=$_POST['XPC'];
	$wifi=$_POST['wifi'];
	$hotspring=$_POST['hotspring'];
	$bath=$_POST['bath'];
	$laundry=$_POST['laundry'];
	$DCS=$_POST['DCS'];
	$sauna=$_POST['sauna'];
	$PWV=$_POST['PWV'];
	$PMV=$_POST['PMV'];
	$PYV=$_POST['PYV'];
	$ownercontnumber=$_POST['ownercontnumber'];
	
	
	$sqlInsertDataHotel="INSERT INTO hotelinfo(hotelname,address,location,email,
	website,
	telephone,
	fax,
	DA,
	DAT,
	DRS,
	DRT,
	DBS,
	DBT,
	room,
	bed1,
	SMP,
	SXP,
	SAP,
	size1,
	bed2,
	DMP,
	DXP,
	DAP,
	size2,
	bed3,
	TMP,
	TXP,
	TAP,
	size3,
	DB,
	MPC,
	XPC,
	wifi,
	hotspring,
	bath,
	laundry,
	DCS,
	sauna,
	PWV,
	PMV,
	PYV,
	ownercontnumber
	)
	
	 VALUES('$hotelname',
	 '$address',
	 '$location',
	 '$email',
	'$website',
	'$telephone',
	'$fax',
	 $DA,
	 $DAT,
	 $DRS,
	 $DRT,
	 $DBS,
	 $DBT,
	 $room,
	 $bed1,
	'$SMP',
	'$SXP',
	'$SAP',
	$size1,
	$bed2,
	'$DMP',
	'$DXP',
	'$DAP',
	$size2,
	$bed3,
	'$TMP',
	'$TXP',
	'$TAP',
	'$size3',
	$DB,
	'$MPC',
	'$XPC',
	'$wifi',
	'$hotspring',
	'$bath',
	'$laundry',
	'$DCS',
	'$sauna',
	'$PWV',
	'$PMV',
	'$PYV',
	'$ownercontnumber'
	
	 
	)";

	## dbQuery
	
	$resultInsert=dbQuery($sqlInsertDataHotel);	
	
	if($resultInsert==1){
		echo "<h1>Successfully Inserted.Thank you for Data</h2>";
	}
	else{
		echo "<h1>Try Again<h1>";
	}
	
	
}
else{
	
}

echo $msg;
