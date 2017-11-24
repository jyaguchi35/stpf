<?php
$style = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Search Hotels</title>
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
	width: 160px;
height: 120px;
	padding: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
	text-align: center;
	border: 1px solid #999;
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
                          <h2 class="page_title">Search Hotel as per your desire</h2><br/>
                            <div id="newest_products">
            <a href="hotaldata.php"> See All Hotel List</a></br></br>

Please choose any criteria and press "Search"</br></br>

<b>Search Hotel by </b></br>

<!-- FACILITIES: wifi, Laundary, Sauna  -->
<form action= "sky.php" method ="post">          

Distance from Airport:</br>

<input type="radio" name="sig1" value=1>Minimum <br>
<input type="radio" name="sig1" value=-1>Maximum
<p hidden><input type="radio" name="sig1" value=0 checked></p>
<br></br> 
Distance from Rail Station:</br>
<input type="radio" name="sig2" value=1>Minimum<br>
<input type="radio" name="sig2" value=-1>Maximum
<p hidden><input type="radio" name="sig2" value=0 checked></p>
<br></br>
Price(single Bed): </br>
<input type="radio" name="sig3" value=1>Minimum<br>
<input type="radio" name="sig3" value=-1>Maximum
<p hidden><input type="radio" name="sig3" value=0 checked></p>
<br></br>

<input type="submit" value="SEARCH">

</form>
                            </div>
                        </section>
                    </td>
                </tr>
            </table>
        </div>      
    </div>
   </body>
</html>


	
