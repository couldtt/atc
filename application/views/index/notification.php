<fieldset style="width:400px; height:200px; float:left;">
<legend>通知公告</legend>
<ul>
<?php foreach($arts as $art){
?>
	<li><?php echo anchor("show/detail/$art->id",$art->title); ?></li>	
<?php
}
?>
</ul>
</fieldset>
