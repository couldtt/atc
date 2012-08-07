  <div id="topborder">
      <div id="biaoqian">
      	<p>常用栏目</p>
      </div>
      <div id="topborder_nav">
      <p><?php echo anchor('index','首页');?>&nbsp;>>&nbsp;<?php echo anchor("a_list/$article->classid",$catname); ?>
      </div>
  </div>
  <div id="left_side">
    <div id="left-content">
      <ul>
      <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><?php echo anchor('notices','通知公告'); ?></li>
      <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><?php echo anchor('center','中心简介'); ?></li>
        <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">学术活动</a></li>
      </ul>
    </div>
  </div>
  <div id="right_side">
    <div class="contenttext">
    <p><center><h3><?php echo $article->title;?></h3></center></p>
    <p style="float:right"><?php echo $article->update_time;?></p>
    <p style="clear:both;">
    <?php
        echo $article->content;
    ?>
    </p>
    </div>
  </div>
