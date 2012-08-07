  <div id="shangtu">
  </div>
  <div id="shang">
      <div id="tzgg">
        <div id="more">
        <a href="<?php echo site_url("notices"); ?>"><img src="<?php echo base_url();?>assets/pic/more.png" /></a>
        </div>
        <div id="zi1">
            <ul>
              <?php foreach($notices as $notice){
			  ?>
				<li><?php echo anchor("show/detail/$notice->id",$notice->title); ?></li>
			  <?php
			  }
			  ?>
            </ul>
        </div>
      </div>
      <div id="xshd">
      	<div id="more1">
        	<a href="#"><img src="<?php echo base_url();?>assets/pic/more.png" /></a>
        </div>
        <div id="zi2">
        	<ul>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区关于织申关于财关于织申政局关于织关于织申申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
              <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a></li>
            </ul>
        </div>
      </div>
<?php
if ($is_login == true){
?>
<div id="hyxx">
<div class="login_content">
<span>你好,</span><?php echo $userinfo->username; ?>
<br /><br />
<span>进入</span><?php echo anchor('member/home','会员中心'); ?>
</div>
</div>
<?php
} else {
?>
      <div id="hydl">
        <form action="<?php echo site_url("member/login/do");?>" method="POST">
          <div class="login_content">
            <tr>
              <td class="word"><span class="login">用户名：</span></td>
                <td>
                <input type="text" class="kuang1" name="username" />
                </td>
            </tr>
            <tr>
              <td class="word"><span class="login">密&nbsp;码：</span></td>
                <td>
                <input type="password" class="kuang2" name="password"/>
                </td>
            </tr>
            <tr>
              <td class="word"><span class="login">验证码：</span></td>
                <td>
                <input type="text" class="kuang3"/>
                </td>
                <td>
                <img src="<?php echo base_url();?>assets/pic/yanzhengma.png" class="yanzhengma" />
                </td>
            </tr>
            <tr>
              <td>
                <input type="submit" class="loginpic" id="login_do" value="" />
                </td>
                <td>
                <input type="image" class="loginpic" src="<?php echo base_url();?>assets/pic/zhuce.png" />
                </td>
            </tr>
        </div>
        </form>
      </div>
  </div>
<?php
}
?>
  <div id="xia">
  	<div id="xiaokuai">
    	<div class="xiaotu">
        <a href="#"><img src="<?php echo base_url();?>assets/pic/xiaokuai1.png" /></a>
        </div>
        <div class="xiaotu"><!-- 仪器设备故障 -->
        <a href="<?php echo site_url('member/repairs');?>"><img src="<?php echo base_url();?>assets/pic/xiaokuai2.png" /></a>
        </div>
        <div class="xiaotu"><!-- 大型仪器设备论证 -->
        <a href="<?php echo site_url('member/votes');?>"><img src="<?php echo base_url();?>assets/pic/xiaokuai3.png" /></a>
        </div>
        <div class="xiaotu">
        <a href="#"><img src="<?php echo base_url();?>assets/pic/xiaokuai4.png" /></a>
        </div>
    </div>
    <div id="yuyuedan">
    <script type="text/javascript">
					function tabChange(obj,id)
					{
						var arrayli = obj.parentNode.getElementsByTagName("li");
						var arrayul = document.getElementById(id).getElementsByTagName("ul");
						for(i=0;i<arrayul.length;i++)
						{
							if(obj==arrayli[i])
							{
								arrayli[i].className = "nli";
								arrayul[i].className = "";
							}
							else
							{
								arrayli[i].className = "";
								arrayul[i].className = "hidden";
							}
						}
					}
	</script>
    	<div class="daohang">
                <a class="yuyuedanxianshi" href="#">预约单显示</a>
                <ul class="order">
                    	<li onmouseover="tabChange(this,'dhmain')" class="nli">已预约 </li>
                        <li onmouseover="tabChange(this,'dhmain')" class="">已确认</li>
                       <li onmouseover="tabChange(this,'dhmain')" class="">已完成</li>
                </ul>
        </div>
        <div id="dhmain">
        	<ul class="">
            <li>
            <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间杨凌示范区财政局关杨凌示范区于</a>
            </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
            </ul>
            <ul class="hidden">
            <li>
            <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
            </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局示范区财政局示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
            </ul>
            <ul class="hidden">
            <li>
            <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
            </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织示范区财政局关于织申报申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
              <li>
              <img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  杨凌示范区财政局关于织申报间放</a>
              </li>
            </ul>
        </div>
    </div>
    <div id="youqinglianjie"><!-- flinks moudle -->
    	<div id="lianjie">
    	<ul>
  <!--      <li><a href="#">山东理工大学</a></li>
            <li><a href="#">山东省大型科学仪器网</a></li>
            <li><a href="#">教育部高校分析测试中心研究会</a></li>
            <li><a href="#">中国分析测试协会</a></li>
            <li><a href="#">仪器信息网</a></li>
-->
        <?php
        foreach($flinks as $flink){
        ?>
        <li><a href="<?php echo $flink->link_url;?>"><?php echo $flink->link_name;?></a></li>
       <?php
        }
       ?>
        </ul>
        </div>
    </div>
  </div>
