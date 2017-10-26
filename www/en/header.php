<div id="header_box">

<div id="header1">
<div id="header_righttop">
<ul>
<li><a class="addthis_button" href="http://www.addthis.com/bookmark.php">Favorite</a></li>
<li><a href="javascript:void(0)"  onclick="needsendmail();"  style="cursor:pointer">Feedback</a></li>
<li><a href="/" >中文</a></li>
<li><a href="/en/" >ENGLISH</a></li>
</ul>
</div><!--end header_righttop!-->
</div><!--end header1!-->
<div class="clear"></div>
<div id="header_logo"><a href="/en/"><img src="/upload/layout/<?=$adv_logo[pic];?>" width="484" height="70" border="0" /></a></div>

<div id="header_menu_box">
<div id="header_menu">
<script type="text/javascript">
<!--
stm_bm(["menu0b0f",900,"","/inc/pics/blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","488",0,0,1,2,"hand","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,0,0,0,0,100,"",-2,"",-2,50,0,0,"#999999","#FFFFFF","",0,0,0,"#CCCCCC"]);
stm_ai("p0i0",[0,"HOME","","",-1,-1,0,"/en/","_self","","","","",0,0,0,"","",0,0,0,1,1,"#A6CE3A",1,"#B70C0C",1,"/inc/pics/<?php if($c_filename=='index.php'){echo 'menu_prod.jpg';}else{echo 'menu2.gif';}?>","/inc/pics/menu1_1.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?php if($c_filename=='index.php'){echo '#ffffff';}else{echo '#444744';}?>","#444744","bold 11pt 'Arial','Verdana'","bold 11pt Arial",0,0,"","","","",0,0,0],77,46);
stm_aix("p0i1","p0i0",[0,"About us","","",-1,-1,0,"/en/about/aboutus.php?pageid=9","_self","","","","",0,0,0,"","",0,0,0,1,1,"#A6CE3A",1,"#B70C0C",1,"/inc/pics/<?php if($c_filename=='aboutus.php'){echo 'menu_prod.jpg';}else{echo 'menu2.gif';}?>","/inc/pics/menu2_1.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?php if($c_filename=='aboutus.php'){echo '#ffffff';}else{echo '#444744';}?>"],117,46);
stm_bpx("p1","p0",[1,4,0,0,0,0,0,0,100,"",-2,"",-2,50,2,3]);
stm_aix("p1i0","p0i0",[2,"","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#FFFFFF",0,"#FFFFFF",0,"","",3,3,0,0,"#CCCCCC","#CCCCCC","#000000","#000000","bold 9pt 'Arial','Verdana'","bold 9pt Arial"],300,10);
stm_aix("p1i1","p1i0",[0,"         About us","","",-1,-1,0,"/en/about/aboutus.php?pageid=9","_self","","","","",0,0,0,"","",0,0,0,0,1,"#FFFFFF",0,"#FFFFFF",0,"","",3,3,0,0,"#CCCCCC","#CCCCCC","#444744","#E85100"],300,40);
stm_aix("p1i2","p1i0",[2,"","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#E6E6E6",0,"#E6E6E6"],300,1);
stm_aix("p1i3","p1i1",[0,"         Culture","","",-1,-1,0,"/en/about/aboutus.php?pageid=13"],300,40);
stm_aix("p1i4","p1i2",[],300,1);
stm_aix("p1i5","p1i3",[0,"         Development","","",-1,-1,0,"/en/about/aboutus.php?pageid=15"],300,40);
stm_aix("p1i5","p1i3",[0,"         CEO's Message","","",-1,-1,0,"/en/about/aboutus.php?pageid=12"],300,40);
stm_ep();
stm_aix("p0i2","p0i1",[0,"Product","","",-1,-1,0,"/en/product/product.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#A6CE3A",1,"#B70C0C",1,"/inc/pics/<?php if($c_filename=='product.php' || $c_filename=='productinfo.php'){echo 'menu_prod.jpg';}else{echo 'menu2.gif';}?>","/inc/pics/menu2_1.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?php if($c_filename=='product.php' || $c_filename=='productinfo.php'){echo '#ffffff';}else{echo '#444744';}?>"],117,46);
stm_bpx("p2","p1",[0,4]);
<? for($i=0;$i<sizeof($allproddir1);$i++){?>
stm_aix("p2i<?=$i;?>","p1i1",[0,"        <?=$allproddir1[$i][title]?>","","",-1,-1,0,"/en/product/product.php?id2=<?=$allproddir1[$i][id_proddir]?>"],230,40);
<? }?>
stm_mc("p2",[2,"#E6E6E6",0,1,"",3]);
stm_ep();
stm_aix("p0i3","p0i1",[0,"News","","",-1,-1,0,"/en/news/news.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#A6CE3A",1,"#B70C0C",1,"/inc/pics/<?php if($c_filename=='news.php' || $c_filename=='newspage.php'){echo 'menu_prod.jpg';}else{echo 'menu2.gif';}?>","/inc/pics/menu2_1.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?php if($c_filename=='news.php' || $c_filename=='newspage.php'){echo '#ffffff';}else{echo '#444744';}?>"],117,46);
stm_bpx("p3","p2",[]);
<? for($i=0;$i<sizeof($allnewsdir);$i++){?>
stm_aix("p3i<?=$i;?>","p1i1",[0,"        <?=$allnewsdir[$i][title]?>","","",-1,-1,0,"/en/news/news.php?ndir=<?=$allnewsdir[$i][id_newsdir]?>"],250,40);
<? }?>
stm_mc("p3",[2,"#E6E6E6",0,1,"",3]);
stm_ep();
stm_aix("p0i4","p0i1",[0,"Case show","","",-1,-1,0,"/en/case/case.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#A6CE3A",1,"#B70C0C",1,"/inc/pics/<?php if($c_filename=='case.php' || $c_filename=='casepage.php'){echo 'menu_prod.jpg';}else{echo 'menu2.gif';}?>","/inc/pics/menu2_1.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?php if($c_filename=='case.php' || $c_filename=='casepage.php'){echo '#ffffff';}else{echo '#444744';}?>"],117,46);

stm_aix("p0i5","p0i1",[0,"Contact us","","",-1,-1,0,"/en/about/contact.php","_self","","","","",0,0,0,"","",0,0,0,1,1,"#A6CE3A",1,"#B70C0C",1,"/inc/pics/<?php if($c_filename=='contact.php'){echo 'menu_prod.jpg';}else{echo 'menu2.gif';}?>","/inc/pics/menu2_1.gif",3,3,0,0,"#CCCCCC","#CCCCCC","<?php if($c_filename=='contact.php'){echo '#ffffff';}else{echo '#444744';}?>"],117,46);
stm_ep();
stm_cf([0,0,0,"Main_frame","Navigation_frame",1]);
stm_em();
//-->
</script>


</div><!--end header_menu!-->
<div id="header_search">

<div id="searchtxt" style="width:230px; height:38px; float:left">
<form action="/product/productsearch.php" method="post" name="searchform" onsubmit="">
<label>
<input name="searchcontent" type="text" class="txt" id="searchcontent" style="width:200px; height:20px;border: 0 none;padding-top:10px;padding-left:10px; color:#CCCCCC;font-weight:bold" value="Site search"  onclick="$('#searchcontent').val('');" />
</label>
</form>
</div>
<div id="btn" onmouseover="$('#s_zoom').attr('src','/inc/pics/psearch2.gif');" onmouseout="$('#s_zoom').attr('src','/inc/pics/psearch.gif');"><a href="javascript:document.searchform.submit();"><span><img src="/inc/pics/psearch.gif" style="border:0" alt="Search" id="s_zoom"/></span></a></div>

</div><!--end header_search!-->
</div><!--end header_menu_box!-->
</div><!--end header_box!-->
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fba3d73748084c0"></script>