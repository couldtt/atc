  <div id="topborder">
      <div id="biaoqian">
      	<p>中心简介</p>
      </div>
      <div id="topborder_nav">
      <p><?php echo anchor('index','首页');?>&nbsp;>>&nbsp;中心简介</p>
      </div>
  </div>
  <div id="left_side">
    <div id="left-content">
      <ul>
        <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="center">   中心概况</a></li>
        <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  人员介绍</a></li>
        <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  设备清单</a></li>
      </ul>
    </div>
  </div>
  <div id="right_side">
    <div class="contenttext">
    <p><center><h3><?php echo $art->title;?></h3></center></p>
    <?php
        echo $art->content;
    ?>
    </div>
  </div>
