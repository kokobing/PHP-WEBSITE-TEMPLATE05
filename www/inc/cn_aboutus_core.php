<?php
require "../inc/config.php";
require "../inc/function.class.php";

if(!isset($_GET[pageid])){
$pageid=1;
}else{
$pageid=$_GET[pageid];
}
//page_content
$strSQL = "select * from pageset where id_pageset='$pageid' " ;
$objDB->Execute($strSQL);
$page_content=$objDB->fields();

//page_pic
$strSQL = "select * from pagesetpic where id_pageset='$pageid' " ;
$objDB->Execute($strSQL);
$page_pics=$objDB->getrows();



//页头 页脚调用
require "../inc/cn_header_core.php";

?>