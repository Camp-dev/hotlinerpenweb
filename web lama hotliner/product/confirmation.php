<?php
	session_start();
	if(isset($_SESSION['dome'])) {
	require("../config/include.php");
	$strSql = "SELECT * FROM `order2` WHERE 1";
	$rs2=$rs->CreateResultSet($strSql,$con->databasename);
	$row= $rs2->getNumberRow();
	$id=$row+1;
	
	$dome=$_SESSION['dome'];
	$clip=$_SESSION['clip'];
	$cap=$_SESSION['cap'];
	$tapper=$_SESSION['tapper'];
	$endplug=$_SESSION['endplug'];
	$adaptor=$_SESSION['adaptor'];
	$company=$_SESSION['company'];
	$contact=$_SESSION['contact'];
	$phone=$_SESSION['phone'];
	$address=$_SESSION['address'];
	$email=$_SESSION['email'];
	$order=$_SESSION['order'];
	$design=$_SESSION['design'];
	$sample=$_SESSION['sample'];
	$logotext=$_SESSION['logotext'];
	$text1=$_SESSION['text1'];
	$text2=$_SESSION['text2'];
	$text3=$_SESSION['text3'];
	if($_POST['data'])
	{	
	$strSql = "INSERT INTO `hotliner_shop`.`order2` (`id_order` ,`company_order` ,`contact` ,`address` ,`phone` ,`email` ,`order` ,`dome` ,`clip` ,`cap` ,`tapper` ,`endplug` ,`adaptor` ,`picture` ,`sample` ,`logotext` ,`text1` ,`text2` ,`text3`) VALUES (null,'".$company."','".$contact."','".$address."','".$phone."','".$email."','".$order."','".$dome."','".$clip."','".$cap."','".$tapper."','".$endplug."','".$adaptor."','".$design."','".$sample."','".$logotext."','".$text1."','".$text2."','".$text3."')";
		$rs2=$rs->CreateResultSet($strSql,$con->databasename); 
		$replysbj = "Terima kasih atas order anda";
		$date = date("j F Y G:i");
		$replymsg = "Jakarta, $date \n\n";
		$replymsg .= "Kepada yth. $contact \n";
		$replymsg .= "Kami telah menerima permintaan anda akan produk kami dengan spesifikasi:\n";
		$replymsg .= "No Order  : $id \n";
		$replymsg .= "Dome      : $dome\n";
		$replymsg .= "Clip      : $clip\n";
		$replymsg .= "Cap       : $cap\n";
		$replymsg .= "Tapper    : $tapper\n";
		$replymsg .= "Endplug   : $endplug\n";
		$replymsg .= "adaptor   : $adaptor\n";
		$replymsg .= "--------------------------------\n";
		$replymsg .= "Jumlah Pemesanan \n";
		$replymsg .= "--------------------------------\n";		
		$replymsg .= "Order     : $order set\n";
                $nominal = $order * 10000;
		$replymsg .= "Nominal   : Rp ". number_format($nominal,0,".",".")." \n\n";
		$replymsg .= "Terima kasih atas perhatian anda\n\n";
		$replymsg .= "Hormat kami,\n\n";
		$replymsg .= "Hotliner\n";
		$msgbody = wordwrap($replymsg,70);
		mail("$email",$replysbj,$msgbody,"From: online@hotlinerpen.com\n");
		$fwdsbj = "Fwd: Order Product No $id";
		$fwdmsg .= "Pada tanggal ".$date." instansi dibawah ini telah mengisi halaman contact pada situs www.hotlinerpen.com,";
		$fwdmsg .= " mohon di tindak lanjuti\n";
		$fwdmsg .= "No Order    : $id\n";
		if($company!=null){
		$fwdmsg .= "Company     : $company\n";
		}
		$fwdmsg .= "Contact	: $contact\n";
		$fwdmsg .= "Phone       : $phone\n";
		$fwdmsg .= "Email 	: $email\n";
		$fwdmsg .= "--------------------------------\n";
		$fwdmsg .= "Design \n";
		$fwdmsg .= "--------------------------------\n";
		$fwdmsg .= "Dome        : $dome\n";
		$fwdmsg .= "Clip        : $clip\n";
		$fwdmsg .= "Cap         : $cap\n";
		$fwdmsg .= "Tapper      : $tapper\n";
		$fwdmsg .= "Endplug     : $endplug\n";
		$fwdmsg .= "adaptor     : $adaptor\n";
		if($design!=null){
                $design=str_replace(" ","%20",$design);
		$gambar = "http://hotlinerpen.com/new/orderimages/$design";							
		$fwdmsg .= "Gambar      : $gambar\n"; 
		}
		if($sample!=null){
		$fwdmsg .= "sample      : $sample\n"; 
		}
		$fwdmsg .= "--------------------------------\n";
		$fwdmsg .= "Jumlah Pemesanan \n";
		$fwdmsg .= "--------------------------------\n";
		$fwdmsg .= "Order       : $order set\n";
		$nominal = $order * 10000;
		$fwdmsg .= "Nominal     : Rp ". number_format($nominal,0,".",".")." \n";
		$fwdmsg2 = wordwrap($fwdmsg,70);
		mail("online@hotlinerpen.com",$fwdsbj,$fwdmsg2,"From: order-online@hotlinerpen.com\n");
		session_destroy();
		echo("<script>window.location.href='thanks.php'</script>");
		}
	if($_POST['back'])
	{
		echo("<script>window.location.href='design.php'</script>");
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

	background-color: #E1E1E1;

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;


}

.style4 {	font-size: 14px;

	font-weight: bold;

}
.style15 {font-family: Arial}
.style23 {font-family: Arial;
	font-size: 12px;
}
.style24 {font-size: 14px}

-->

</style>
</head>

<body>

<!--url's used in the movie-->

<table width="200" border="1" align="center">

  <tr>

    <td><table width="750" bgcolor="#FFEA00">

      <tr>

        <td valign="top"><span class="style12 style15"><a href="../home.php"><img src="../images/tombol_01.gif" width="89" height="26" border="0" /></a><a href="design.php"><img src="../images/tombol_02.gif" width="141" height="26" border="0" /></a><a href="../keunggulan.php"><img src="../images/tombol_03.gif" width="159" height="26" border="0" /></a><a href="../sampleclient.php"><img src="../images/tombol_04.gif" width="206" height="26" border="0" /></a><a href="../contact.php"><img src="../images/tombol_05.gif" width="155" height="26" border="0" /></a></span><br />
          <img src="header simulasi.jpg" width="760" height="146" /></td>
      </tr>


      <tr>

        <td valign="top" bgcolor="#FFFBCA"><table width="565" align="center">

            <tr bgcolor="#FFFBCA">

              <td valign="top">            
				<form action="<?php echo $SCRIPT_NAME; ?>" enctype="multipart/form-data" method="post" >
                  <table width="747" align="left">
                    <tr>
                      <td valign="top">&nbsp;</td>
                      <td align="left" valign="top">No Order</td>
                      <td>: 
                        <? echo $id;?></td>
                      <td width="240" rowspan="6" align="center">&nbsp;</td>
                    </tr>
                  <? if($company!="null"){?>
                    <tr>
                      <td width="31" valign="top">&nbsp;</td>
                      <td width="153" align="left" valign="top">Company name </td>
                      <td width="303">: <? echo $company;?>
                          <input name="company" type="hidden" id="company" value="<?php echo $company; ?>" maxlength="30" />                      </td>
                      </tr><? } ?>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Contact Person </td>
                      <td>: <? echo "$contact";?>
                          <input name="contact" type="hidden" id="contact" value="<?php echo $contact; ?>" maxlength="30" />                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Address</td>
                      <td>: <? echo "$address";?>
                          <input name="address" type="hidden" id="address" value="<?php echo $address; ?>" maxlength="30" />                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Phone</td>
                      <td>: <?php echo $phone; ?>
                          <input name="phone" type="hidden" id="phone" value="<?php echo $phone; ?>" maxlength="30" />                      </td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Email</td>
                      <td>: <?php echo $email; ?>
                          <input name="email" type="hidden" id="email" value="<?php echo $email; ?>" maxlength="30" />                      </td>
                    </tr>
                    
                    
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td>&nbsp;</td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="2" align="left">Komposisi warna yang dipilih</td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Dome</td>
                      <td align="left">: <?php echo $dome; ?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Clip</td>
                      <td align="left">: <?php echo $clip; ?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Cap </td>
                      <td align="left">: <?php echo $cap; ?> </td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Tapper</td>
                      <td align="left">: <?php echo $tapper; ?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">End plug</td>
                      <td align="left">: <?php echo $endplug; ?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Adaptor </td>
                      <td align="left">: <?php echo $adaptor; ?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Quantity order</td>
                      <td align="left">: <?php echo $order; ?>&nbsp;&nbsp;&nbsp;set ( 1 set / 3 pcs )</td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Nominal </td>
                      <td align="left">:
                        <?php $nominal = $order * 10000;
		echo "Rp ". number_format($nominal,0,".",".") ?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <? if($design!='null')
						{
					?>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Design</td>
                      <td align="left" valign="middle">: <img src="../orderimages/<? echo $design;?>" width="160" height="88"  align="absmiddle"/></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <? } if($sample!="null")
					{
						if($sample=='1')
						{
							$picture="sampel%20design1.jpg";
						}
						elseif($sample=='2')
						{
							$picture="sampel%20design2.jpg";
						}
						else
						{
							$picture="sampel%20design3.jpg";
						}
						?>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Sample design</td>
                      <td align="left" valign="top">: <img src="../product/<? echo $picture;?>" width="160" height="88" align="absmiddle"></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">Text design </td>
                      <td align="left">: <? echo $logotext;?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left"> &nbsp;&nbsp;<? echo $text1;?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;&nbsp;<? echo $text2;?></td>
                      <td align="center">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="left">&nbsp;</td>
                      <td align="left">&nbsp;&nbsp;<? echo $text3;?></td>
                      <td width="240" align="center">&nbsp;</td>
                    </tr>
                    <? }?>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="3" align="left"><input type="submit" name="data" value="selesai" id="data" />
                          <input name="back" type="submit" value="kembali" /></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td colspan="3">&nbsp;</td>
                    </tr>
                  </table>
                  </form>
               </td>
              </tr>

          </table>

           </td>
      </tr>

      <tr bgcolor="#FFEA00">

        <td bgcolor="#FFEA00"><span class="style12 style15"><a href="../home.php"><img src="../images/tombol_01.gif" width="89" height="26" border="0" /></a><a href="design.php"><img src="../images/tombol_02.gif" width="141" height="26" border="0" /></a><a href="../keunggulan.php"><img src="../images/tombol_03.gif" width="159" height="26" border="0" /></a><a href="../sampleclient.php"><img src="../images/tombol_04.gif" width="206" height="26" border="0" /></a><a href="../contact.php"><img src="../images/tombol_05.gif" width="155" height="26" border="0" /></a></span></td>
      </tr>

      <tr>

        <td align="center">
          <p><span class="style23"><br />
            copyright (c) 2008, PT. Anugerah Dwi Abadi. Jl. Pembangunan III no 11 Batuceper, Tangerang - Banten<br />
Telp. (021) 55776215, Fax. (021) 5586309 </span><br />
<br />
          </p>

          </td>
        </tr>

    </table></td>

  </tr>

</table>

<!--text used in the movie-->

</body>

</html>
<?
	}
	else {
	session_destroy();
	echo("<script>window.location.href='design.php'</script>");
	}
?>
