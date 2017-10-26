<?php
require "../inc/en_index_core.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="<?php echo $setinfo[keywords];?>" />
<meta name="description" content="<?php echo $setinfo[description];?>" />
<title><?php echo $setinfo[title];?></title>
<link href="../inc/css/css1.css" rel="stylesheet" type="text/css">
<link href="../inc/css/slidepicandtext.css" rel="stylesheet" type="text/css">
<link href="../inc/css/homeslidetext.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../inc/js/stmenu.js"></script>
<script src="/inc/js/jquery.min.js"></script>
<script src="/inc/js/jquery.easing.1.3.js"></script>
<script src="/inc/js/slides.min.jquery.js"></script>
<script src="/inc/js/slides.min.jquery.txt.js"></script>
<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '/inc/pics/loading.gif',
				play: 5000,
				pause: 2500,
				effect: 'fade, fade',
				hoverPause: true
			});
		});
</script>
	<script>
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides_1').slides_1({
				preload: true,
				preloadImage: '/inc/pics/loading.gif',
				generatePagination: true,
				play: 5000,
				pause: 3000,
				hoverPause: true,
				effect: 'fade, fade',
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					//window.location.hash = '#' + current;
				}
			});
		});
	</script>


<?php if($setinfo[iscopy]=='1'){?>
<script language="JavaScript">
document.oncontextmenu=new Function("event.returnValue=false;");
document.onselectstart=new Function("event.returnValue=false;");
</script>
<?php }?>
<?php if($setinfo[otherheader]!=''){echo $setinfo[otherheader];}?>
</head>
<body>
<? require "header.php"; ?>

<div id="contain">
<div id="mainadv">

   
    	<div id="container">
        <!--<div id="quick_contact"><a href="tencent://message/?uin=495105&Site=ty-sh.com&Menu=yes"><img src="/inc/pics/qq.png" border="0" /></a> <a href="tencent://message/?uin=84234688&Site=ty-sh.com&Menu=yes"><img src="/inc/pics/qq.png" border="0" /></a></div>-->
<div id="slides">
				<div class="slides_container">
                <?php for($i=0;$i<sizeof($arrallpicinfo);$i++){?>
					<div class="slide">
						<a href="<?=$arrallpicinfo[$i][url]?>"><img src="/upload/layout/<?=$arrallpicinfo[$i][pic]?>" width="1010"  border="0"></a>
                        <div class="caption">
   <h1 style="width:580px;font-family:Arial;font-size: 40pt;color: #fff;text-decoration: none;line-height: 80px;text-align:left; "><?=$arrallpicinfo[$i][title]?></h1>
   <p style="width:580px;font-family:Arial;font-size: 10pt;color: #fff;text-decoration: none;line-height: 20px;text-align:left;"><?=$arrallpicinfo[$i][intro]?></p>
                        </div>
					</div>
                    <?php }?>

				</div>
			</div>
		
		
	</div>


</div><!--end mainadv!-->

<div id="homecontent">
<div id="homecontent1">
<h1>About us</h1>
<h2><a href="/en/about/aboutus.php"><?=cutstr($aboutus[intro],230,1);?></a></h2>
<div id="more"><a href="/en/about/aboutus.php">More</a></div>
</div>
<div id="homecontent1"><h1>New product</h1>
<h2><?=$newproduct[title]?><br />
    <br />
      <img src="/upload/layout/<?=$newproduct[pic]?>" width="182" height="99" /></h2>
<div id="more"><a href="/en/product/product.php">More</a></div>
</div>
<div id="homecontent1"><h1>Solution</h1>
<h2><a href="/en/case/case.php"><?=$caseinfo[content];?></a></h2>
<div id="more"><a href="/en/case/case.php">More</a></div>
</div>
<div id="homecontent1"><h1>News center</h1>
<div id="homenews1">
<ul>
<? for($i=0;$i<sizeof($arrallnews);$i++){?>
<li><a href="/en/news/newspage.php?newsid=<?=$arrallnews[$i][id_newsinfo];?>&ndir=<?=$arrallnews[$i][id_newsdir];?>" class="link_navi"><?=cutstr($arrallnews[$i][title],33,0)?></a></li>
<? }?>
</ul>
</div>
<div id="more"><a href="/en/news/news.php">More</a></div>
</div>

</div><!--end homecontent!-->

<div id="homenewstxt">
<div id="homenewstxt_title">New Message：</div>
<div id="homenewstxt_content">

			<div id="slides_1">
            
				<div class="slides_container_1">
                <? for($i=0;$i<sizeof($arrallmessage);$i++){?>
				<div class="slide_1">
						<h1><a href="/news/newspage.php?newsid=<?=$arrallmessage[$i][id_newsinfo]?>" class="indexnews"><?=$arrallmessage[$i][content]?></a></h1>
                        <p><?=$arrallmessage[$i][intro]?></p>
				</div>
                <? }?>
				</div>
			</div>




</div>
</div><!--end homenewstxt!-->

<div id="footer">
<? require "footer.php"; ?>
</div><!--end footer!-->


</div><!--end contain!-->







</body>
</html>
