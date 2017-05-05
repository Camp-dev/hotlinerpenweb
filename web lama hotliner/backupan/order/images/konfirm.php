<?php
	$pesan = "Data Kurang Lengkap";
	if(empty($company) or empty($contact) or empty($address) or empty($email) or empty($phone) or empty($order)  or empty($dome) or empty($clip) or empty($cap) or empty($tapper) or empty($endplug) or empty($adapter))
		header("location: warna1.php?company=$company&pesan=$pesan&contact=$contact&address=$address&email=$email&phone=$phone&email=$email&dome=$dome&clip=$clip&cap=$cap&tapper=$tapper&endplug=$endplug&adapter=$adapter&order=$order");
		
	@mysql_connect("localhost","hotliner_shop","endahku") or die ("Error 100");
	@mysql_select_db("hotliner_shop") or die ("Error 101");
	
	$sql = mysql_query("SELECT * FROM `order`") or die ("ERROR 102");	
	$row = mysql_num_rows($sql);
	$noorder = $row + 1;

	
	if(!empty($design))
		copy("$design","tmp/$design_name");
	
	if($action == "selesai")
	{
		

		
		$sql = mysql_query("INSERT INTO `order` (company_order) 
									VALUES ('$company')") or die ("ERROR 100");
									

									
		$pesan  = "No Order : $noorder\n";
		$pesan .= "--------------------------------\n";
		$pesan .= "Company	: $company\n";
	    $pesan .= "Contact	: $contact\n";
		$pesan .= "Address	: $address\n";
	    $pesan .= "Phone 	: $phone\n";
	    $pesan .= "Email 	: $email\n";
		$pesan .= "--------------------------------\n";
		$pesan .= "Design \n";
		$pesan .= "--------------------------------\n";	
	    $pesan .= "Dome		: $dome\n";
		$pesan .= "Clip		: $clip\n";
		$pesan .= "Cap		: $cap\n";
		$pesan .= "Tapper	: $tapper\n";
		$pesan .= "Endplug	: $endplug\n";
		$pesan .= "Adaptor	: $adapter\n";
		$pesan .= "Gambar	: http://hotlinerpen.com/order/images/tmp/$design\n";
		$pesan .= "--------------------------------\n";
		$pesan .= "Jumlah Pemesanan \n";
		$pesan .= "--------------------------------\n";		
		$pesan .= "Order	: $order\n";
		$pesan .= "Nominal : Rp ". number_format($nominal,0,".","."). "\n";

		// To send HTML mail, the Content-type header must be set
		//$headers  = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers = "From: $contact <$email>\r\n";
		
		$to  = 'online@hotlinerpen.com' . ', '; // note the comma
		$to .= "$email";
		
		if(empty($contact) or empty($address) or empty($phone) or empty($email))
			$pesan = "Data uncomplete";
		else if($email = mail("$to","No Order : $noorder","$pesan","$headers"))
		{
			header("location: thanks.php?no=$noorder");
		}
	}
	//online@hotlinerpen.com
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>warna boss pro</title>

<style type="text/css">

<!--

body {

	background-color: #E1E1E1;

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;


}

.style1 {

	font-size: 24px;

	color: #000000;

}

.style2 {

	font-size: 36px;

	font-weight: bold;

}

.style3 {color: #FF0000}

.style4 {	font-size: 14px;

	font-weight: bold;

}

.style5 {	font-size: 12px;

	font-weight: bold;

}
.style6 {font-size: 13px;

	font-weight: bold;
}

-->

</style>
<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<body>

<!--url's used in the movie-->

<a href="kliphijau.swf"></a>

<table width="200" border="1" align="center">

  <tr>

    <td><table width="750" bgcolor="#FFEA00">

      <tr>

        <td valign="top"><div align="center"><img src="header%20simulasi.jpg" width="760" height="150" /></div></td>

      </tr>

      <tr>

        <td valign="top"><div align="center">

            <p><strong>              </strong></p>

        </div></td>

      </tr>

      <tr>

        <td valign="top" bgcolor="#FFFBCA"><table width="565" align="center">

            <tr bgcolor="#FFFBCA">

              <td valign="top"><strong>              </strong><strong>

              </strong>              <div align="center">
                <form id="form1" name="form1" method="post" action="">
                  <table width="747" align="left">
                    <tr>
                      <td valign="top">&nbsp;</td>
                      <td valign="top"><div align="left">No Order</div></td>
                      <td><div align="left">: <?php echo "$noorder" ?></div></td>
                      <td width="240" rowspan="8" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td width="31" valign="top">&nbsp;</td>
                      <td width="153" valign="top"><div align="left">Company name </div></td>
                      <td width="303"><div align="left">: <?php echo "$company" ?>
                          <input name="company" type="hidden" id="company" value="<?php echo "$company" ?>" maxlength="30" />
                      </div></td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left">Contact Person </div></td>
                      <td><div align="left">: <?php echo "$contact" ?>
                          <input name="contact" type="hidden" id="contact" value="<?php echo "$contact" ?>" maxlength="30" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left">Address</div></td>
                      <td><div align="left">: <?php echo "$address" ?>
                          <input name="address" type="hidden" id="address" value="<?php echo "$address" ?>" maxlength="30" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left">Phone</div></td>
                      <td><div align="left">: <?php echo "$phone" ?>
                          <input name="phone" type="hidden" id="phone" value="<?php echo "$phone" ?>" maxlength="30" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left">Email</div></td>
                      <td><div align="left">: <?php echo "$email" ?>
                          <input name="email" type="hidden" id="email" value="<?php echo "$email" ?>" maxlength="30" />
                      </div></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td><div align="left"></div></td>
                      <td><div align="left">
                        <input name="design" type="hidden" id="design" value="<?php echo "$design_name" ?>" maxlength="30" />
                      </div></td>
                      </tr>
                    <tr>
                      <td height="29">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td width="240" align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2"><p align="left">Komposisi warna yang dipilih </p>
                          <p align="left">Dome : <?php echo "$dome" ?>
                              <input name="dome" type="hidden" id="dome" value="<?php echo "$dome" ?>" maxlength="30" />
                          </p>
                        <p align="left">Clip : <?php echo "$clip" ?>
                              <input name="clip" type="hidden" id="clip" value="<?php echo "$clip" ?>" maxlength="30" />
                          </p>
                        <p align="left">Cap : <?php echo "$cap" ?>
                              <input name="cap" type="hidden" id="cap" value="<?php echo "$cap" ?>" maxlength="30" />
                          </p>
                        <p align="left">Tapper : <?php echo "$tapper" ?>
                              <input name="tapper" type="hidden" id="tapper" value="<?php echo "$tapper" ?>" maxlength="30" />
                          </p>
                        <p align="left">End plug : <?php echo "$endplug" ?>
                              <input name="endplug" type="hidden" id="endplug" value="<?php echo "$endplug" ?>" maxlength="30" />
                          </p>
                        <p align="left">Adaptor : <?php echo "$adapter" ?>
                              <input name="adapter" type="hidden" id="adapter" value="<?php echo "$adapter" ?>" maxlength="30" />
                          </p>
                        <p align="left">Jumlah pesan : <?php echo "$order" ?>&nbsp;&nbsp;&nbsp;set ( 1 set / 3 pcs )
                          <input name="order" type="hidden" id="order" value="<?php echo "$order" ?>" maxlength="30" />
                          </p>
                        <p align="left">Nominal : <?php  $nominal = $order * 10000;
											echo "Rp ". number_format($nominal,0,".",".") ?>
                              <input name="nominal" type="hidden" id="nominal" value="<?php echo "$nominal" ?>" maxlength="30" />
                          </p>
                        <div align="left"><br />                      
                        </div></td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="3"><input type="submit" name="action" value="selesai" id="action" />
                          <input name="Submit2" type="submit" onclick="MM_goToURL('parent','http://hotlinerpen.com/order/images/warna1.php');return document.MM_returnValue" value="kembali" />                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td><p>&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                  </table>
                    </form>
                <strong><br />

              </strong></div>              <strong><br />

                </strong></td>

              </tr>

          </table>

            <div align="center"></div>

            <div align="center"></div>            <div align="center"></div></td>

      </tr>

      <tr bgcolor="#FFEA00">

        <td bgcolor="#FFEA00">&nbsp;</td>

      </tr>

      <tr>

        <td><div align="center">

          <p class="style4"><span class="style6">::. &nbsp;&nbsp;<a href="../home.htm">HOME</a>&nbsp;&nbsp; ::.&nbsp;&nbsp; <a href="warna1.php">CREATE DESIGN</a>&nbsp;&nbsp; ::.&nbsp;&nbsp; <a href="keunggulan.htm">KEUNGGULAN DAN TIPS</a>&nbsp;&nbsp;&nbsp;&nbsp;::. &nbsp;&nbsp;<a href="images/sampleclient.php">SAMPLE OF OUR CLIENTS</a>&nbsp;&nbsp; ::. &nbsp;&nbsp;<a href="contact.htm">CONTACT US</a>&nbsp;&nbsp; ::. </span></p>

          <p class="style4">&nbsp;</p>

        </div></td>

        </tr>

    </table></td>

  </tr>

</table>

<!--text used in the movie-->

</body>

</html>

