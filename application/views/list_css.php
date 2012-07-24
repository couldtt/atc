<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<ul>
<?php 
foreach($art_lists as $list){
?>
<li>
<?php echo anchor("show/detail/$list->id",$list->title);?>
</li>
<?php
}
?>
</ul>
