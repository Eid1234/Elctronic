<?php

include "validateSAID.class.php";
echo "<html><title>Validate Saudi ID التحقق من رقم الهوية السعودية</title><head><meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" /></head><body>";
if($_POST){
	$validate = new validateSAID('en');
	echo "The number <b>{$_POST['ID']}</b> is <b><font color=". ($validate->check($_POST['ID'])>0?"green> a valid ":"red>an invalid"). "</font></b> Saudi identification number. ".($validate->check($_POST['ID'])>0?"<br />It returns to <b>" . $validate->scheck($_POST['ID']) . "</b> AK in Arabic as: <b>":"");
	$validate->hl = 'ar';
	echo $validate->scheck($_POST['ID'])."</b>";
}
echo "<form method=post>Try a number (as an National ID or Iqama ID): <input type=text name=ID /><input type=submit value=TRY! /></form>";



?></body></html>