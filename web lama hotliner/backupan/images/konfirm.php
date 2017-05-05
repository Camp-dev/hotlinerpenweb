<?php
	if($action == "selesai")
	{
		
	    $pesan .= "Company  : $company\n";
	    $pesan .= "Contact  : $contact\n";
		$pesan .= "Adress   : $address\n";
	    $pesan .= "Phone    : $phone\n";
	    $pesan .= "Email    : $email\n";
		$pesan .= "--------------------------------";
		$pesan .= "Komposisi warna yang dipilih hehehe";
		$pesan .= "--------------------------------";
	    $pesan .= "Dome   : $dome\n";
		$pesan .= "Clip   : $clip\n";
		$pesan .= "Cap : $cap\n";
		$pesan .= "Tapper : $tapper\n";
		$pesan .= "endplug : $endplug\n";
		$pesan .= "adaptor : $adaptor\n";
// modify by EA
		$pesan .= "sample : $sampel[id]\n";
		$pesan .= "sampel teks : $entri_teks\n";

// end of modification		
		$cfg[head]  = "From: $groom <$email>\r\n";
		if(empty($contact) or empty($address) or empty($phone) or empty($email))
			$pesan = "Data uncomplete";
		else if($email = mail("online@hotlinerpen.com","Email From $email","$pesan","$cfg[head]"))
		{
			header("location: thanks.php");
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>warna boss pro</title>

<style type="text/css">

<!--

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
	background-color: #999999;
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

</head>

<body>

<!--url's used in the movie-->

<a href="kliphijau.swf"></a>

<table width="200" border="1" align="center">

  <tr>

    <td><table width="750" bgcolor="#FFEA00">

      <tr>

        <td valign="top"><div align="center"><img src="konfirmasi%20order%20header.jpg" width="760" height="146" /></div></td>

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
                  <table width="747">
                    <tr>
                      <td width="31" valign="top">&nbsp;</td>
                      <td width="153" valign="top">Company name </td>
                      <td width="303"><?php echo "$company" ?>
                          <input name="company" type="hidden" id="company" value="<?php echo "$company" ?>" maxlength="30" /></td>
                      <td width="240" rowspan="5">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Contact Person </td>
                      <td><?php echo "$contact" ?>
                          <input name="contact" type="hidden" id="contact" value="<?php echo "$contact" ?>" maxlength="30" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Address</td>
                      <td><?php echo "$address" ?>
                          <input name="address" type="hidden" id="address" value="<?php echo "$address" ?>" maxlength="30" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Phone</td>
                      <td><?php echo "$phone" ?>
                          <input name="phone" type="hidden" id="phone" value="<?php echo "$phone" ?>" maxlength="30" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Email</td>
                      <td><?php echo "$email" ?>
                          <input name="email" type="hidden" id="email" value="<?php echo "$email" ?>" maxlength="30" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2"><p>Komposisi warna yang dipilih </p>
                          <p>Dome : <?php echo "$dome" ?>
                              <input name="dome" type="hidden" id="dome" value="<?php echo "$dome" ?>" maxlength="30" />
                          </p>
                        <p>Klip : <?php echo "$clip" ?>
                              <input name="clip" type="hidden" id="clip" value="<?php echo "$clip" ?>" maxlength="30" />
                          </p>
                        <p>Cap : <?php echo "$cap" ?>
                              <input name="cap" type="hidden" id="cap" value="<?php echo "$cap" ?>" maxlength="30" />
                          </p>
                        <p>Tapper : <?php echo "$tapper" ?>
                              <input name="tapper" type="hidden" id="tapper" value="<?php echo "$tapper" ?>" maxlength="30" />
                          </p>
                        <p>End plug : <?php echo "$endplug" ?>
                              <input name="endplug" type="hidden" id="endplug" value="<?php echo "$endplug" ?>" maxlength="30" />
                          </p>
                        <p>Adaptor : <?php echo "$adaptor" ?>
                              <input name="adaptor" type="hidden" id="adaptor" value="<?php echo "$adaptor" ?>" maxlength="30" />
                          </p>
                        <p>Jumlah pesan : <?php echo "$order" ?>&nbsp;&nbsp;&nbsp;set ( 1 set / 3 pcs )
                          <input name="order" type="hidden" id="order" value="<?php echo "$order" ?>" maxlength="30" />
                          </p>
                        <p>Nominal : <?php  $nominal = $order * 10000;
											echo "Rp ". number_format($nominal,0,".",".") ?>
                              <input name="nominal" type="hidden" id="nominal" value="<?php echo "$nominal" ?>" maxlength="30" />
                          </p>
                        <br />
                      </td>
                  </tr>    
                  <!-- modify by EA -->   
                  <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>
                  
                  <tr>
                  <td colspan="2">
                  <p></p>
                          <p>Sampel : <?php echo "$sampel" ?>
                              <input name="sample" type="hidden" id="sampel" value="<?php echo "$sampel" ?>" maxlength="30" />
                          </p>
                  </td>        
                  </tr>
                  <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>       
                  <tr>       
                   <td colspan="2">
                   
                   <p>Teks : </p>
                   <p><?php echo "$entri_teks" ?>
                          <input name="entri_teks" type="hidden" id="entri_teks" value="<?php echo "$entri_teks" ?>" maxlength="30" /></td>
                   </td> 
                   </tr>                 
                          
                  <!-- sampai disini -->
                      
                    <td>&nbsp;</td>
                    
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="3"><input type="submit" name="action" value="selesai" id="action" />
                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&lt;&lt;&lt;<a href="warna1.php"> kembali </a></td>
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

          <p class="style4"><span class="style6">::. &nbsp;&nbsp;<a href="../home.htm">HOME</a>&nbsp;&nbsp; ::.&nbsp;&nbsp;<a href="warna1.php"> CREATE DESIGN&nbsp;</a>&nbsp; ::.&nbsp;&nbsp; <a href="keunggulan.htm">KEUNGGULAN DAN TIPS</a>&nbsp;&nbsp;&nbsp;&nbsp;::. &nbsp;&nbsp;<a href="images/sampleclient.php">SAMPLE OF OUR CLIENTS</a>&nbsp;&nbsp; ::. &nbsp;&nbsp;<a href="contact.htm">CONTACT US</a>&nbsp;&nbsp; ::.</span></p>

          <p class="style4">&nbsp;</p>

        </div></td>

        </tr>

    </table></td>

  </tr>

</table>

<!--text used in the movie-->

</body>

</html>

