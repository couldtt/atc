  <div id="topborder">
      <div id="biaoqian">
      <p><?php echo $class_name;?></p>
      </div>
      <div id="topborder_nav">
        <p><a href="<?php echo base_url();?>">首页</a>&nbsp;>>&nbsp;<?php echo $class_name;?></p>
      </div>
  </div>
  <div id="left_side">
    <div id="left-content">
      <ul>
      <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="<?php echo site_url("center"); ?>">   中心简介</a></li>
      </ul>
    </div>
  </div>
  <div id="right_side">
    <div class="contenttext">
      <ul id="">
        <?php foreach($art_lists as $art_list){
        ?>
        <li><?php echo anchor("show/detail/$art_list->id","$art_list->title");?></li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
