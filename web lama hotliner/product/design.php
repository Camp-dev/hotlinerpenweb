<?
session_start();
	$domewarn="";
	$clipwarn="";
	$capwarn="";
	$tapperwarn="";
	$endplugwarn="";
	$adaptorwarn="";
	$contactwarn="";
	$addresswarn="";
	$phonewarn="";
	$emailwarn="";
	$orderwarn="";
	$warning="";
	$warning2="";
	$warningsample="";
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
	
if($_POST['submit']) 	
	{
	$error=false;
	$dome=$_POST['dome'];
	$clip=$_POST['clip'];
	$cap=$_POST['cap'];
	$tapper=$_POST['tapper'];
	$endplug=$_POST['endplug'];
	$adaptor=$_POST['adaptor'];
	$company=$_POST['company'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$order=$_POST['order'];
	$logotext=$_POST['logotext'];
	$sample=$_POST['sample'];
	$text1=$_POST['text1'];
	$text2=$_POST['text2'];
	$text3=$_POST['text3'];
			  
	if($_POST['dome']=="")
		{
			$error=true;
			$domewarn="*";
		}	
	if($_POST['clip']=="")
		{
			$error=true;
			$clipwarn="*";
		}	
	if($_POST['cap']=="")
		{
			$error=true;
			$capwarn="*";
		}	
	if($_POST['tapper']=="")
		{
			$error=true;
			$tapperwarn="*";
		}	
	if($_POST['endplug']=="")
		{
			$error=true;
			$endplugwarn="*";
		}	
	if($_POST['adaptor']=="")
		{
			$error=true;
			$adaptorwarn="*";
		}	

	if($_POST['contact']=="")
		{
			$error=true;
			$contact="";
			$contactwarn="*";
		}	
	if($_POST['address']=="")
		{
			$error=true;
			$address="";
			$addresswarn="*";
		}	
	if($_POST['phone']==""|preg_match("/[^0-9 ]/",$_POST['phone']))
		{
			$error=true;
			$phone="";
			$phonewarn="*";
		}
	if(eregi("^[[:alpha:]]+[[:alnum:]_-]*(\.[[:alnum:]_-]+)*@[[:alnum:]_-]+(\.[[:alnum:]_-]+)*\.([[:alpha:]_-]+){2,}$",$_POST['email'])==false)
		{
			$error=true;
			$email="";
			$emailwarn="*";
			
		}	
	if($_POST['order']==""|preg_match("/[^0-9 ]/",$_POST['order']))
		{
			$error=true;
			$order="";
			$orderwarn="*";
		}
	if($_POST['sample']==1)
		{
			$sample="1";
		}
	if($_POST['sample']==2)
		{
			$sample="2";
		}
	if($_POST['sample']==3)
		{
			$sample="3";
		}
	if($_POST['sample']=="")
		{
			$sample="null";
		}
			
	if($_POST['logotext']=="")
		{
			$logotext="null";
		}
	if($_POST['text1']=="")
		{
			$text1="null";
		}
	if($_POST['text2']=="")
		{
			$text2="null";
		}
	if($_POST['text3']=="")	
		{
			$text3="null";
		}
	$uploaddir = "../orderimages/";
	$uploadfile = $uploaddir.basename($_FILES['design']['name']);
	if(is_uploaded_file($_FILES['design']['tmp_name'])) {
		if(move_uploaded_file($_FILES['design']['tmp_name'],$uploadfile)) 
	//this is the relative picture file path name used for this site
		$design = $_FILES['design']['name'];
		}
	else{
		$design = "null";
		}
	if(($design=="null")or($sample=="null"))
		{
	                $error=false;			 
		}
	else
		{
			$error=true;
			$warning2="Please upload the design or select our sample design*";

		}
	if(($design== "null")&&($sample=="null"))
		{
			$warning2="Please upload the design or select our sample design*";
			$error=true;
		}
	if(($sample!="null")&&($logotext=="null"))
		{
			$warningsample="Harap diisi bila memilih salah satu dari ketiga sampel.* ";
			$error=true;
		}
	if($error==true)
		{
			$warning="Fields with red asterix (*) are required";
		}
	if($error==false){
			// this is the upload file logic		

			$_SESSION['dome']=$dome;
			$_SESSION['clip']=$clip;
			$_SESSION['cap']=$cap;
			$_SESSION['tapper']=$tapper;
			$_SESSION['endplug']=$endplug;
			$_SESSION['adaptor']=$adaptor;
			$_SESSION['company']=$company;
			$_SESSION['contact']=$contact;
			$_SESSION['address']=$address;
			$_SESSION['phone']=$phone;
			$_SESSION['email']=$email;
			$_SESSION['order']=$order;
			$_SESSION['design']=$design;
			$_SESSION['sample']=$sample;
			$_SESSION['logotext']=$logotext;
			$_SESSION['text1']=$text1;
			$_SESSION['text2']=$text2;
			$_SESSION['text3']=$text3;
	
			// echo $rs;
			header("Location: confirmation.php"); 
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::. Hotlinerpen ::.</title>
<style type="text/css">
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
</style>
<body>
<form action="<?php echo $SCRIPT_NAME; ?>" enctype="multipart/form-data" method="post" >
<table width="200" border="1" align="center">
  <tr>
    <td><table width="750" bgcolor="#FFEA00">
      <tr>
        <td valign="top" align="center"><a href="../home.php"><img src="../images/tombol_01.gif" width="89" height="26" border="0" /></a><a href="design.php"><img src="../images/tombol_02.gif" width="141" height="26" border="0" /></a><a href="../keunggulan.php"><img src="../images/tombol_03.gif" width="159" height="26" border="0" /></a><a href="../sampleclient.php"><img src="../images/tombol_04.gif" width="206" height="26" border="0" /></a><a href="../contact.php"><img src="../images/tombol_05.gif" width="155" height="26" border="0" /></a></td>
      </tr>
      <tr>
        <td valign="top" align="center"><img src="header simulasi.jpg" width="760" height="146" /></td>
      </tr>
      <tr>
        <td valign="top" align="center">
              <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="760" height="600">
                <param name="movie" value="warna.swf" />
                <param name="quality" value="high" /><param name="SCALE" value="noborder" />
                <embed src="warna.swf" width="760" height="600" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" scale="noborder"></embed>
              </object>
              <img src="please.jpg" width="750" height="44" />
        </td>
      </tr>
      <tr>
        <td valign="top" bgcolor="#FFFBCA"><table width="638" align="center">
            <tr bgcolor="#FFFBCA">
              <td width="102" align="center" valign="top"><strong>Dome : <span class="style3"><? echo $domewarn;?></span><br />
                    <select name="dome" size="1">
                      <option value="<? echo $dome?>" selected="selected"><?=$dome?></option>
                      <option value="green">green</option>
                      <option value="white">white</option>
                      <option value="yellow">yellow</option>
                      <option value="red">red</option>
                      <option value="black">black</option>
                      <option value="blue">blue</option>
                      <option value="dark_blue">dark blue</option>
                      <option value="pink">pink</option>
                      <option value="orange">orange</option>
                      <option value="transparant">transparant</option>
                    </select>
              </strong></td>
              <td width="102" align="center" valign="top"><strong>Clip</strong><strong>
                :<span class="style3"><? echo $clipwarn;?></span>
                    <select name="clip" size="1" id="clip">
                  <option value="<? echo $clip?>" selected="selected"><?=$clip?></option>
                  <option value="green">green</option>
                  <option value="white">white</option>
                  <option value="yellow">yellow</option>
                  <option value="red">red</option>
                  <option value="black">black</option>
                  <option value="blue">blue</option>
                  <option value="dark_blue">dark blue</option>
                  <option value="pink">pink</option>
                  <option value="orange">orange</option>
                  <option value="transparant">transparant</option>
                </select>
              </strong></td>
              <td width="102" align="center" valign="top"><strong>Cap:<span class="style3"><? echo $capwarn;?></span><br />
                <select name="cap" size="1" id="cap">
                  <option value="<? echo $cap?>" selected="selected"><?=$cap?></option>
                  <option value="green">green</option>
                  <option value="white">white</option>
                  <option value="yellow">yellow</option>
                  <option value="red">red</option>
                  <option value="black">black</option>
                  <option value="blue">blue</option>
                  <option value="dark_blue">dark blue</option>
                  <option value="pink">pink</option>
                  <option value="orange">orange</option>
                  <option value="transparant">transparant</option>
                </select>
              </strong></td>
              <td width="102" align="center" valign="top"><strong>Tapper:<span class="style3"><? echo $tapperwarn;?></span><br />
                <select name="tapper" size="1" id="tapper">
                  <option value="<? echo $tapper?>" selected="selected"><?=$tapper?></option>
                  <option value="green">green</option>
                  <option value="white">white</option>
                  <option value="yellow">yellow</option>
                  <option value="red">red</option>
                  <option value="black">black</option>
                  <option value="blue">blue</option>
                  <option value="dark_blue">dark blue</option>
                  <option value="pink">pink</option>
                  <option value="orange">orange</option>
                  <option value="transparant">transparant</option>
                </select>
              </strong></td>

              <td width="102" align="center" valign="top"><strong>Endplug:<span class="style3"><? echo $endplugwarn;?></span><br />
                <select name="endplug" size="1" id="endplug">
                  <option value="<? echo $endplug?>" selected="selected"><?=$endplug?></option>
                  <option value="green">green</option>
                  <option value="white">white</option>
                  <option value="yellow">yellow</option>
                  <option value="red">red</option>
                  <option value="black">black</option>
                  <option value="blue">blue</option>
                  <option value="dark_blue">dark blue</option>
                  <option value="pink">pink</option>
                  <option value="orange">orange</option>
                  <option value="transparant">transparant</option>
                </select>
              </strong></td>

              <td width="102" align="center" valign="top"><strong>adaptor:<span class="style3"><? echo $adaptorwarn;?></span><br />
                <select name="adaptor" size="1" id="adaptor">
                  <option value="<? echo $adaptor?>" selected="selected"><?=$adaptor?></option>
                  <option value="green">green</option>
                  <option value="white">white</option>
                  <option value="yellow">yellow</option>
                  <option value="red">red</option>
                  <option value="black">black</option>
                  <option value="blue">blue</option>
                  <option value="dark_blue">dark blue</option>
                  <option value="pink">pink</option>
                  <option value="orange">orange</option>
                  <option value="transparant">transparant</option>
                </select>
              </strong></td>
            </tr>

          </table>

         </td>
      </tr>

      <tr bgcolor="#FFEA00">
	
        <td bgcolor="#FFEA00"><table>

                <tr>
                  <td valign="top">&nbsp;</td>
                  <td colspan="2" valign="top"><span class="style3"><? echo $warning;?></span></td>
                  <td rowspan="4"><table align="right">
                    
                    <tr>
                      
                      <td align="center">Size Design</td>
                      </tr>
                    
                    <tr>
                      
                      <td><img src="ukuran stiker baru.jpg" width="261" height="128" /></td>
                      </tr>
                    
                  </table></td>
                </tr>
                <tr>

                <td width="2" valign="top">&nbsp;</td>

                <td width="164" valign="top">Company name </td>

                <td width="305">: 

                  <input name="company" type="text" id="company" maxlength="30"value='<?=$company?>' /></td>
                </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Contact Person </td>

                <td>: 

                  <input type="text" name="contact" id="contact" value='<?=$contact?>' />
                  <span class="style3"><? echo $contactwarn;?></span></td>
                </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Address</td>

              <td align="left">

                    :
                    <textarea rows="5" name="address" cols="30"><?=$address?></textarea>

                    <span class="style3"><? echo $addresswarn; ?></span> </td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Phone</td>

                <td>: 

                  <input type="text" name="phone" id="phone" value='<?=$phone?>'/>
                  <span class="style3"><? echo $phonewarn; ?></span></td>
                <td>&nbsp;</td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Email</td>

                <td>: 

                  <input type="text" name="email" id="email" value='<?=$email?>'/>
                  <span class="style3"><? echo $emailwarn; ?></span></td>
                <td>&nbsp;</td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Order</td>

                <td>: 

                  <input name="order" type="text" id="order" value='<?=$order?>' />

Set ( 3pcs / set )<span class="style3"><? echo $orderwarn; ?></span></td>

                <td rowspan="2" align="left" valign="top"><span class="style3"><? echo $warning2; ?></span></td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td>Send  your design </td>

                <td>:
                  <input type="hidden" name="MAX_FILE_SIZE" value="512000" >
                  <input type="file" name="design">   
                                
                  <br />

                &nbsp;&nbsp;( max. 500 kb, format jpg, psd)</td>
                </tr>

              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>:</td>
                <td>&nbsp;</td>
              </tr>
              <tr>

                <td>&nbsp;</td>

                <td colspan="3"><table width="100%" border="0">
                  <tr>
                    <td width="33%" align="center" valign="top"><img src="sampel_teks.jpg" width="250" height="84" /> </td>
                    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="31" align="center"><input name="logotext" type="text" class="style4" id="textfield" value='<?=$logotext?>' size="30" maxlength="25"/></td>
                      </tr>
                      <tr>
                        <td align="center"><input name="text1" type="text" id="textfield" size="33" maxlength="30" value='<?=$text1?>'/></td>
                      </tr>
                      <tr>
                        <td align="center"><input name="text2" type="text" id="textfield" size="33" maxlength="30" value='<?=$text2?>'/></td>
                      </tr>
                      <tr>
                        <td align="center"><input name="text3" type="text" id="textfield" size="33" maxlength="30" value='<?=$text3?>'/></td>
                      </tr>
                    </table></td>
                    <td width="33%"><span class="style3"> <? echo $warningsample;?></span></td>
                  </tr>
                  
                </table></td>
                </tr>

              <tr>

                <td>&nbsp;</td>

                <td colspan="2"><br />                </td>

                <td width="269">&nbsp;</td>
              </tr>

              <tr>

                <td>&nbsp;</td>

                <td colspan="3">&nbsp;&nbsp;
 <input type="submit" name="submit" value="pesan" id="submit" />                </td>
              </tr>

            </table>

            <p>&nbsp;</p></td>
      </tr>

      <tr>

        <td align="center">

          <p class="style4"><span class="style5">::. &nbsp;&nbsp;<a href="../home.php">HOME</a>&nbsp;&nbsp; ::. &nbsp;&nbsp;&nbsp; CREATE DESIGN&nbsp;&nbsp; ::.&nbsp;&nbsp; <a href="../keunggulan.php">KEUNGGULAN DAN TIPS</a>&nbsp;&nbsp;&nbsp;&nbsp;::. &nbsp;&nbsp;<a href="../sampleclient.php">SAMPLE OF OUR CLIENTS</a>&nbsp;&nbsp; ::. &nbsp;&nbsp;<a href="../contact.php">CONTACT US</a>&nbsp;&nbsp; ::. </span></p>

          <p class="style4">&nbsp;</p>

        </td>
        </tr>

    </table></td>

  </tr>

</table>

<!--text used in the movie-->
</form>
</body>

</html>