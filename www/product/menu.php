<ul>
<? for($i=0;$i<sizeof($allproddir1);$i++){?>
<li><a href="/product/product.php?id2=<?=$allproddir1[$i][id_proddir]?>" <? if($_GET[id2]==$allproddir1[$i][id_proddir]){echo 'data-filetype="red"';}?>><?=$allproddir1[$i][title]?></a></li>
<? }?>
</ul>