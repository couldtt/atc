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
      <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="<?php echo site_url("notices"); ?>">  通知公告</a></li>
      </ul>
    </div>
  </div>
  <div id="right_side">
    <div class="contenttext">
      <ul id="art_list">
        <?php foreach($art_lists as $art_list){
        ?>
            <li>
              <span class="title"><?php echo anchor("a_detail/$art_list->id","$art_list->title");?></span>
              <span class="date">[<?php echo date('Y-m-d',$art_list->update_time);?>]</span>
            </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
