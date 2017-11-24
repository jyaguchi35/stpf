<?php

$style = "";


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
                          <h2 class="page_title">All Hotel List</h2><br/>
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


	