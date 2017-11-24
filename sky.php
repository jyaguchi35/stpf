<?php

$style = "";

///

	$sig1 = $_POST['sig1']; //puts 1 for lesser, -1 for greater, 0 for no compare : as skyline for parameter 1
	$sig2 = $_POST['sig2'];//puts 1 for lesser, -1 for greater, 0 for no compare : as skyline for parameter 2
	$sig3 = $_POST['sig3'];//puts 1 for lesser, -1 for greater, 0 for no compare : as skyline for parameter 3

	//sql connection
	$link=mysql_connect("localhost","root","")or die(mysql_error()); //servername, user, password
		echo"</br>";
	mysql_select_db('smartvirtualtourism') or die('connection failed'); //'project' is the selected database
	$query='SELECT * FROM  hotelinfo order by DA desc'; //'hoteldata' is the table name where data is compared
	$result=mysql_query($query)or die('Query failed:'.mysql_error());
	
//below query displays sql data in multidimentional array form $sky[i][j]
for ($k=0;$k<mysql_num_rows($result);$k++){
	$sky[$k]=mysql_fetch_array($result);
}

mysql_free_result($result);
mysql_close($link);   //connection close

//Skyline code starts for 1, 2 or 3 dimension/s...


	for ($j=0; $j<sizeof($sky)-1; $j++){
	for ($i=$j+1; $i<sizeof($sky); $i){
	if ($sig1*$sky[$j][8]<=$sig1*$sky[$i][8] && $sig2*$sky[$j][10]<=$sig2*$sky[$i][10]&& $sig3*$sky[$j][18]<=$sig3*$sky[$i][18]){   //  simply add more && comands for dimention>3
	//[0]=id [1]=name of hotel [2]=address [3]=location [8]=dist from airport [10]= dist from rail station [14] room no [18] single bed price 
		if ($sky[$j][8]==$sky[$i][8] && $sky[$j][10]==$sky[$i][10]&& $sky[$j][18]==$sky[$i][18]){
		$i=$i+1;  //no changes and go ahead comparing
		}else{
			array_splice($sky, $i,1);  //deletes lower and recompares on that position
		}
	}elseif($sig1*$sky[$j][8]>=$sig1*$sky[$i][8] && $sig2*$sky[$j][10]>=$sig2*$sky[$i][10] && $sig3*$sky[$j][18]>=$sig3*$sky[$i][18]){
			 array_splice($sky, $j,1); //deletes upper and restarts comparing from position of j
			 $i=$j; 
		}else{
			$i=$i+1; //no change and go ahead comparing
		}
};
	echo "";
};
//skyline code ends

//code for displaying skyline data $sky[i][j] results	

?> 



<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Search</title>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" type="text/css" media="screen" href="style/main.css">
<link rel="stylesheet" type="text/css" media="screen" href="style/forms.css">
<style type="text/css">
#newest_products{
	width: 950px;
	border-top: 2px solid #333;
	padding-top: 20px;
}
#d_p{
	float: left;
	width: 197px;
	height: 340px;
	padding: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
	text-align: center;
	border: 1px solid #603;
}
</style>
</head>
<body>
    <div id="main_wrapper">
        <?php include_once("templates/tmp_header.php"); ?>
            <div id="content_wrapper">
            <table cellpadding="20" cellspacing="20" border="0" width="800">
                <tr>
                         <td valign="top">
                        <section id="main_content">
                          <h2 class="page_title">Searched Hotel List</h2><br/>
                            <div id="newest_products">
                                  
								
<?php

for ($row = 0; $row < sizeof($sky); $row++)
    {  
echo '<div id= "d_p">';
        
			echo " <img src=\"img/img1.png\" alt=\"Smiley face\" height=\"100\" width=\"92\"> <br /><br />";
            echo '<b><a href="">'.$sky[$row][1].'</a></b><br>';
			echo $sky[$row][2].'<br>'; 	
			
			echo 'Distance from Airport: <b>'.$sky[$row][8].' Km</b><br>'; 
			echo 'Distance from station: <b>'.$sky[$row][10].' Km</b><br>'; 
			echo 'Price, Single Bed: <b>'.$sky[$row][18].' Yen</b><br>'; 			
echo '</div>'; 
        }
		
?>					
                            </div>
                        </section>
                    </td>
                </tr>
            </table>
        </div>      
    </div>
   </body>
</html>


	