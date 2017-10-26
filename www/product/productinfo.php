<?php
require "../inc/cn_productinfo_core.php";
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
<table width="95%" border="0" align="center" class="txt">
  <tr>
    <td height="30" class="txt_title"><?=$oneproduct[title];?></td>
  </tr>
  <tr>
    <td height="30"><?=$oneproduct[content];?></td>
  </tr>
</table>


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
