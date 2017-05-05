<?php
	function FormListmenu($nama,$pilih)
	{
		echo "<select name=$nama>";
		$bulan = array("green","white","yellow","red","black","blue","dark blue","pink","orange","transparant");
		for($i=0; $i<11; $i++)
		{ 
			$x = $i+1;
			if($bulan[$i] == $pilih)
				$sel = "Selected";
			else
				$sel = "";					
			echo "<option value=\"$bulan[$i]\" $sel>$bulan[$i] </option>";
		}
		echo "</select>";
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

	background-color: #CCCCCC;

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

	background-image: url();

}

.style3 {color: #FF0000}

.style4 {	font-size: 14px;

	font-weight: bold;

}

.style5 {	font-size: 12px;

	font-weight: bold;

}
.style6 {
	color: #990000;
	font-weight: bold;
}

-->

</style>





<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
</head>

<body>

<!--url's used in the movie-->
<form method="post" action="konfirm.php" enctype="multipart/form-data" onsubmit="MM_validateForm('contact','','R','phone','','RisNum','email','','RisEmail','order','','RisNum','address','','R','dome','','R','clip','','R','cap','','R','tapper','','R','endplug','','R','adapter','','R','design','','R');return document.MM_returnValue">
<a href="kliphijau.swf"></a>

<table width="200" border="1" align="center">

  <tr>

    <td><table width="750" bgcolor="#FFEA00">

      <tr>

        <td valign="top"><div align="center"><img src="header simulasi.jpg" width="760" height="150" /></div></td>

      </tr>

      <tr>

        <td valign="top"><div align="center">

            <p><strong> 

              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="760" height="600">

                <param name="movie" value="warna.swf" />

                <param name="quality" value="high" />

                <embed src="warna.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="760" height="600"></embed>

              </object>

              <img src="please.jpg" width="750" height="44" /></strong></p>

        </div></td>

      </tr>

      <tr>

        <td valign="top" bgcolor="#FFFBCA"><table width="638" align="center">

            <tr bgcolor="#FFFBCA">

              <td width="99" valign="top"><strong>Dome : <br />

                    <?php FormListmenu(dome,$dome); ?>

              </strong></td>

              <td width="90" valign="top"><strong>Clip</strong><strong>
                <br />
                <?php FormListmenu(clip,$clip); ?>
              </strong></td>

              <td width="92" valign="top"><strong>Cap<br />
                <?php FormListmenu(cap,$cap); ?>
              </strong></td>

              <td width="79" valign="top"><strong>Tapper<br />
                <?php FormListmenu(tapper,$tapper); ?>
              </strong></td>

              <td width="110" valign="top"><div align="center"><strong>Endplug<br />
                <?php FormListmenu(endplug,$endplug); ?>
              </strong></div></td>

              <td width="140"><strong>Adaptor<br />
                <?php FormListmenu(adapter,$adapter); ?>
              </strong></td>

            </tr>

          </table>

            <div align="center"></div>

            <div align="center"></div>            <div align="center"></div></td>

      </tr>

      <tr bgcolor="#FFEA00">

        <td bgcolor="#FFEA00"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="25" align="center"><span class="style6"><?php echo "$pesan"; ?></span></td>
          </tr>
        </table>
          <table width="747">

              <tr>

                <td width="10" valign="top">&nbsp;</td>

                <td width="189" valign="top">Company name </td>

                <td width="258">: 

                  <input name="company" type="text" id="company" value="<?php echo "$company" ?>" maxlength="30" />                  </td>

                <td width="270" rowspan="5"><table width="270" align="right">

                  <tr>

                    <td width="262"><div align="center">Size Design</div></td>
                    </tr>

                  <tr>

                    <td><div align="right"><img src="ukuran stiker baru.jpg" width="261" height="128" /></div></td>
                    </tr>

                </table></td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Contact Person </td>

                <td>: 

                  <input name="contact" type="text" id="contact" value="<?php echo "$company" ?>" />

                  <span class="style3">*</span></td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Address</td>

              <td><div align="left">: 

                    <textarea name="address" cols="25" rows="4" id="address"><?php echo "$address" ?></textarea>

                    <span class="style3">*</span> </div></td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Phone</td>

                <td>: 

                  <input name="phone" type="text" id="phone" value="<?php echo "$phone" ?>" />

                  <span class="style3">*</span></td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Email</td>

                <td>: 

                  <input name="email" type="text" id="email" value="<?php echo "$email" ?>" />

                  <span class="style3">*</span></td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Order</td>

                <td>: 

                  <input name="order" type="text" id="order" onchange="MM_validateForm('order','','NisNum');return document.MM_returnValue" value="<?php echo "$order" ?>" size="7" />

Set ( 3pcs / set ) <span class="style3">*</span> </td>

                <td>&nbsp;</td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Send  your design </td>

                <td>:

                  <input type="file" name="design" id="design" />                  
                  <br />

                &nbsp;&nbsp;( max. 500 kb, format jpg atau psd) </td>

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

                <td colspan="2"><strong>Syarat dan ketentuan 

                : </strong><br />                </td>

                <td>&nbsp;</td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td colspan="3"><p>&#149;&nbsp; Harga Promosi Rp 10.000,- / set ( 1 set @ 3 pcs Ballpen , harga termasuk ongkos kirim) <strong><br />

                </strong>&#149;&nbsp; Pemesan berdomisili di Jabodetabek <br />

                &#149;&nbsp; Transfer order ke Bank BCA no rek 884 0303 650 a/n CV. Bina Sejahtera Abadi <br />

                &#149;&nbsp; Kirim bukti transfer ke no fax ( 021 ) 5586 309 / 5577 6154  atau via email ke <a href="mailto:online@hotlinerpen.com">online@hotlinerpen.com </a> dengan &nbsp;&nbsp;&nbsp;&nbsp;mencantumkan no code pemesanan ( code pemesanan dikirimkan lewat email ) <br />

                &#149; &nbsp;Pengiriman order 12 hari kerja setelah bukti pembayaran di fax </p>                  </td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>&nbsp;</td>

                <td><input type="submit" name="action" value="pesan" id="action" /></td>

                <td><p>&nbsp;</p>                </td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td colspan="3">&nbsp;                </td>
              </tr>
            </table>

            <p>&nbsp;</p></td>

      </tr>

      <tr>

        <td><div align="center">

          <p class="style4"><span class="style5">::. &nbsp;&nbsp;<a href="../home.php">HOME</a>&nbsp;&nbsp; ::. &nbsp;&nbsp;&nbsp; CREATE DESIGN&nbsp;&nbsp; ::.&nbsp;&nbsp; <a href="../keunggulan.htm">KEUNGGULAN DAN TIPS</a>&nbsp;&nbsp;&nbsp;&nbsp;::. &nbsp;&nbsp;<a href="sampleclient.php">SAMPLE OF OUR CLIENTS</a>&nbsp;&nbsp; ::. &nbsp;&nbsp;<a href="../contact.htm">CONTACT US</a>&nbsp;&nbsp; ::. </span></p>

          <p class="style4">&nbsp;</p>

        </div></td>

        </tr>

    </table></td>

  </tr>

</table>

<!--text used in the movie-->
</form>
</body>

</html>

