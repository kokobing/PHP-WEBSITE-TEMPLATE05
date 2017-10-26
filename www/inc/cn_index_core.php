<?php
require "./inc/config.php";
require "./inc/function.class.php";

//关于我们
$strSQL = "select description as intro from pageset where id_pageset='1'" ;
$objDB->Execute($strSQL);
$aboutus=$objDB->fields();

//新品介绍
$strSQL = "select title,opicname as pic from layoutpic where id_layout ='2'" ;
$objDB->Execute($strSQL);
$newproduct=$objDB->fields();

//解决方案
$strSQL = "select content from layout where id_layout ='4'" ;
$objDB->Execute($strSQL);
$caseinfo=$objDB->fields();

//新闻
$strSQL = "select a.title,a.id_newsinfo,a.id_newsdir from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.lang=1 and fatherid='15'  and a.id_newsdir not in(21,22)  order by a.id_newsinfo desc limit 6" ;
$objDB->Execute($strSQL);
$arrallnews=$objDB->GetRows();

//最新消息新闻
$strSQL = "select a.content,a.intro,a.id_newsinfo,a.id_newsdir from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.lang=1 and fatherid='29'  order by a.id_newsinfo desc limit 4" ;
$objDB->Execute($strSQL);
$arrallmessage=$objDB->GetRows();

//取出首页banner图及文字
$strSQL = "select title,intro,url,opicname as pic from layoutpic  where id_layout ='8' order by  id_layoutpic asc" ;
$objDB->Execute($strSQL);
$arrallpicinfo=$objDB->GetRows();


//页头 页脚调用
require "./inc/cn_header_core.php";

?>