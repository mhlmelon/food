<?php
if(!defined('InEmpireBak'))
{
	exit();
}

//Database
$phome_db_ver="5.0";
$phome_db_server="xen2-dev-1";
$phome_db_port="3306";
$phome_db_username="root";
$phome_db_password="eunke_root_2019";
$phome_db_dbname="";
$baktbpre="";
$phome_db_char="";

//USER
$set_username="admin";
$set_password="e10adc3949ba59abbe56e057f20f883e";
$set_loginauth="";
$set_loginrnd="YFfd33mV2MrKwDenkecYWZETWgUwMV";
$set_outtime="60";
$set_loginkey="1";

//COOKIE
$phome_cookiedomain="";
$phome_cookiepath="/";
$phome_cookievarpre="ebak_";

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath="bdata";
$bakzippath="zip";
$filechmod="1";
$phpsafemod="";
$php_outtime="1000";
$limittype="";
$canlistdb="";

//------------ SYSTEM ------------
HeaderIeChar();
?>