<?php
require "../inc/config.php";
require "../inc/function.class.php";
require "../inc/pagenav.class.php";



//新闻动态
if(!isset($_GET[ndir]) || $_GET[ndir]==''){
$intRows = 15;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.lang=1  and a.id_newsdir not in(21,22) and fatherid='15' ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select a.* from newsinfo as a left join newsdir as b on a.id_newsdir=b.id_newsdir where a.dele=1 and b.lang=1  and a.id_newsdir not in(21,22)  and fatherid='15'  order by a.ordernum desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrnews=$objDB->GetRows();

}elseif(isset($_GET[ndir])){
	
$arrParam[0][name]="ndir";
$arrParam[0][value]=$_GET[ndir];	

$intRows = 15;
$strSQLNum = "SELECT COUNT(*) as num from newsinfo  where id_newsdir='".$_GET[ndir]."'  and dele=1 ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];

$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);

$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

$strSQL = "select * from newsinfo  where id_newsdir='".$_GET[ndir]."' and dele=1  order by ordernum desc" ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$arrnews=$objDB->GetRows();
}

$strSQL = "select * from  newsinfo " ;
$objDB->Execute($strSQL);
$arrprod1=$objDB->GetRows();



//页头 页脚调用
require "../inc/cn_header_core.php";


?>