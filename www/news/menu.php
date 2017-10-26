<ul>
<? for($i=0;$i<sizeof($allnewsdir);$i++){?>
<li><a href="/news/news.php?ndir=<?=$allnewsdir[$i][id_newsdir]?>" <? if($_GET[ndir]==$allnewsdir[$i][id_newsdir]){echo 'data-filetype="red"';}?>><?=$allnewsdir[$i][title]?></a></li>
<? }?>
</ul>