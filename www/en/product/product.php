<?php
require "../../inc/en_product_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../../inc/css/css1.css" rel="stylesheet" type="text/css">
<link href="../../inc/css/innerpageslidepicandtext.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../../inc/js/stmenu.js"></script>
<script src="../../inc/js/jquery.min.js"></script>



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
  <img src="/inc/pics/1325764711.jpg" width="1010" height="225" /></div><!--end mainadv!-->

<div id="aboutcontent" style="margin-right: auto;margin-left: auto;width: 1010px;height:auto!important;height:600px;min-height:600px;background: #fff;overflow:hidden;zoom:1;">
<div id="aboutcontent1">

          <?php for($i=0;$i<sizeof($arrprods);$i++){
                 $strSQL = "select opicname as pic from productpic  where id_prodinfo ='".$arrprods[$i][id_prodinfo]."' order by id_prodpic asc limit 1" ;
                 $objDB->Execute($strSQL);
                 $arronepic=$objDB->fields();
				 
			  ?>
          <div id="productlist">
          <table width="150" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 22px" class="txt">
            <tr>
              <td width="150" align="center" style="padding:2px; border:1px solid #C6C6C6"><a href="/en/product/productinfo.php?pid=<?=$arrprods[$i][id_prodinfo];?>&id1=<?=$arrprods[$i][fatherid];?>&id2=<?=$arrprods[$i][id_proddir];?>" target="_blank" ><img src="/upload/product/<?=$arronepic[pic];?>" border="0" /></a></td>
            </tr>
            <tr>
              <td><img src="/inc/pics/t.gif" width="1" height="2" /></td>
            </tr>
            <tr>
              <td bgcolor="#EFEFEF" style="padding:4px 7px 4px 7px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td height="19" align="center"><a href="/product/productinfo.php?pid=<?=$arrprods[$i][id_prodinfo];?>&id1=<?=$arrprods[$i][fatherid];?>&id2=<?=$arrprods[$i][id_proddir];?>" class="link_navi" target="_blank" ><?=cutstr($arrprods[$i][title],20,0);?></a></td>
                </tr>
              </table></td>
            </tr>
          </table>
          </div>
          <?php }?>
<div id="navi"><?php echo $strNavigate;?></div>
</div>



<div id="about_rightmenu">

<? require "menu.php"; ?>

</div><!--end about_rightmenu!-->

</div><!--end aboutcontent!-->
<div id="footer">
<? require "../footer.php"; ?>
</div><!--end footer!-->
<DIV style="clear:both;"></DIV> 
</div><!--end contain!-->

</body>
</html>
