<?php
//页头
$c_filename = end(explode('/',$_SERVER["PHP_SELF"])); 

//LOGO
$strSQL = "select opicname as pic from  layoutpic  where id_layout='1' order by id_layoutpic desc limit 1" ;
$objDB->Execute($strSQL);
$adv_logo=$objDB->fields();

//取新闻中心子目录  HEADER头部  LEFT MUNU左侧 调用   21 22 ID 为案例展示 人力资源  不包括在新闻目录中
$strSQL = "select name as title,id_newsdir,lang from newsdir where lang=1 and fatherid='15' and dele=1 and id_newsdir not in(21,22) order by ordernum asc  " ;
$objDB->Execute($strSQL);
$allnewsdir=$objDB->GetRows();

//取产品中心二级目录
$strSQL = "select  name as title,id_proddir,lang  from productdir where lang=1 and level=2 and dele=1 order by ordernum asc" ;
$objDB->Execute($strSQL);
$allproddir1=$objDB->GetRows();


//页脚
$strSQL = "select content from layout  where id_layout='3'" ;
$objDB->Execute($strSQL);
$adv_fotter=$objDB->fields();


?>