<?php
require "../../inc/config.php";
require "../../inc/function.class.php";


//page_content
$strSQL = "select * from pageset where id_pageset='16' " ;
$objDB->Execute($strSQL);
$page_content=$objDB->fields();



//页头 页脚调用
require "../../inc/en_header_core.php";

?>