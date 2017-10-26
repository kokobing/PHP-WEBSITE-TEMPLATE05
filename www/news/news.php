<?php
require "../inc/cn_news_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
<link href="../inc/css/innerpageslidepicandtext.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../inc/js/stmenu.js"></script>
<script src="../inc/js/jquery.min.js"></script>



<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
</head>
<body>
<? require "../header.php"; ?>

<div id="contain">
<div id="subadv">
  <img src="../inc/pics/1325764711.jpg" width="1010" height="225" /></div><!--end mainadv!-->

<div id="aboutcontent">
<div id="aboutcontent1">

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php for($i=0;$i<sizeof($arrnews);$i++){?>
  <tr height="28">
    <td width="629" align="left" style="background:url(../inc/pics/bg2.gif) repeat-x left bottom;">&nbsp;<img src="../inc/pics/arr.gif" width="11" height="14" align="absmiddle" />&nbsp;&nbsp;<a href="/news/newspage.php?newsid=<?=$arrnews[$i][id_newsinfo];?>&ndir=<?=$arrnews[$i][id_newsdir];?>" class="link_navi"><?=$arrnews[$i][title];?></a></td>
    <td width="67" align="center" class="txt" style="background:url(../inc/pics/bg2.gif) repeat-x left bottom; color:#999999"><?=$arrnews[$i][newsdate];?></td>
  </tr>
   <?php }?>
</table>


<div id="navi"><?php if(substr(trim($strNavigate),-46)!='#494949"><strong>1</strong></font>&nbsp;&nbsp;'){echo $strNavigate;}?></div>
</div>



<div id="about_rightmenu">

<? require "menu.php"; ?>

</div><!--end about_rightmenu!-->

</div><!--end aboutcontent!-->



<div id="footer">
<? require "../footer.php"; ?>
</div><!--end footer!-->


</div><!--end contain!-->







</body>
</html>
