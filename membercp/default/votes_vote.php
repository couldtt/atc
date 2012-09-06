<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>大型仪器设备论证</title>
    <style>
        body {
            font-size: 12px;
            color: #333;
            font-family: "宋体";
        }
        .bj-grey-border-1 {
            border: 1px solid #DCDEDC;
        }
        .f-black-12-n, .f-black-12-n a, a.f-black-12-n {
            font-size: 12px;
            color: black;
            font-weight: normal;
            text-decoration: none;
        }
        .cbtn04 {
            background: url(<?php echo base_url();?>membercp/default/images/global_btn.gif) 0px 0px no-repeat;
            width: 67px;
            height: 20px;
            line-height: 20px;
            text-align: center;
            border: none;
            display: block;
        }
    </style>
</head>
<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>山东理工大学分析测试中心</title>
    <link href="<?php echo base_url();?>assets/css/front_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="all">
    <div id="logo">
        <div id="sousuo">
            <form name="input" action="<?php echo site_url('search');?>" method="get">
                站内搜索<input type="text" name="search_content" />
                <input type="submit" value=" Go " />
            </form>
        </div>
    </div>
    <div id="nav">
        <ul>
            <li><a href="<?php echo site_url('index');?>">首页</a></li>
            <li><a href="<?php echo site_url('center');?>">中心简介</a></li>
            <li><a href="<?php echo site_url('metric');?>">计量认证</a></li>
            <li><a href="#">远程互动服务</a></li>
            <li><a href="#">财务管理</a></li>
            <li><a href="#">客户服务</a></li>
        </ul>
    </div>
    <div id="topborder">
        <div id="biaoqian">
            <p>仪器论证</p>
        </div>
        <div id="topborder_nav">
            <p><?php echo anchor('index','首页');?>&nbsp;>>&nbsp;仪器论证</p>
        </div>
    </div>
    <div id="left_side">
        <div id="left-content">
            <ul>
                <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="#">  设备清单</a></li>
            </ul>
        </div>
    </div>
    <div id="right_side">
        <div class="contenttext">
            <fieldset class="bj-center bj-grey-border-1" align="center">
                <legend style="font-size:12px; color:#999999;margin-left: 6px"> (结束时间：2012年09月07日)</legend>


                <p style="font-weight: bold">大型仪器设备论证--投票（多选）</p>
                <div style="width:450px;margin: 0 auto;">
                    <table width="100%" align="center">
                        <form action="<?php echo site_url('member/votes/vote');?>" method="POST">
                            <tbody>
                            <?php foreach($equips as $equip){?>
                            <tr height="25">
                                <td align="right" class="f-grey-12"><?php echo anchor("v_comment/$equip->id",$equip->equip_name);?>&nbsp;</td>
                                <td align="left" width="180px" nowrap="">
                                    <?php if ($total_polls > 0) {?>
                                    <span><?php echo round(($equip->votes / $total_polls)*100,2).'%'; ?></span>
                                    <?php } ?>
                                </td>
                                <td width="20px"><input type="checkbox" name="equip_id[]" value="<?php echo $equip->id;?>"></td>
                                <td width="80px" nowrap="">得票数：<?php echo $equip->votes; ?></td>
                            </tr>
                                <?php };?>
                            </tbody>
                    </table>

                    <br>
                    <div class="bj-center"> 共有<?php echo $total_polls;?>人参与</div>
                    <br><br>
                    <input type="submit" value="确认" />
                    </form>
                </div>
                <br><br>
            </fieldset>
        </div>
    </div>

    <div id="xian">
    </div>
    <div id="footer">
        <div align="center" style="margin-top: 10px; border-top: 2px solid #0066CC;">
            <p style="font-size: 12px;">Copyright 2006-2010　 山东理工大学分析测试中心　 All Rights reserved.</p>
        </div>
    </div>
</div>
</body>
</html>
