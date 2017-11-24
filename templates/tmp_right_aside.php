<aside id="right_side">
      <?php
	      if($status == 1){
			  echo '
			      <div style="color: #FFF;background: #000;padding: 5px;">
				      <table width="100%" cellpadding="0" cellspacing="0" border="0">
					      <tr>
						      <td align="left"><a href="shopping_cart.php" style="color: #FFF; font-family: arial;text-decoration: none;">Cart</a></td>
							  <td align="right"><a href="logout.php" style="color: #FFF; font-family: arial;text-decoration: none;">Log out</a></td>
						  </tr>
					  </table>
				  </div>
			  ';
		  }else{
			  include_once("scripts/options.php");
		  }
	  ?>                      
</aside>