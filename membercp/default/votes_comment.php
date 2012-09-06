<div id="topborder">
    <div id="biaoqian">
        <p>仪器论证</p>
    </div>
    <div id="topborder_nav">
        <p><?php echo anchor('index','首页');?>&nbsp;>>&nbsp;<?php echo anchor('v_vote','仪器论证投票页');?>&nbsp;&nbsp;>>仪器详细介绍</p>
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
    <table cellpadding="0" cellspacing="0" class="vdtl"><!-- votes detail table  -->
        <caption>仪器论证详情</caption>
        <tbody>
        <tr>
            <th>设备ID</th>
            <td><?php echo $equips['basic']->id;?></td>
        </tr>
        <tr>
            <th>设备名</th>
            <td><?php echo $equips['basic']->equip_name;?></td>
        </tr>
        <tr>
            <th>设备价格</th>
            <td><?php echo $equips['basic']->equip_price;?></td>
        </tr>
        <tr>
            <th>设备简介</th>
            <td><?php echo $equips['basic']->equip_explain;?></td>
        </tr>
        <tr>
            <th>得票数</th>
            <td><?php echo $equips['basic']->votes;?></td>
        </tr>
        </tbody>
    </table>
    <br />
    <!-- 相关评论显示 -->
    <table cellpadding="0" cellspacing="0" class="vdtl">
        <tr><th></th><td><strong>相关评论</strong></td></tr>
        <tbody>
        <?php foreach($equips['suggs'] as $sugg){?>
        <tr>
            <th></th>
            <td><?php echo $sugg->content;?></td>
            <td>----评论人：<?php echo $sugg->username;?></td>
        </tr>
            <?php }?>
        </tbody>
    </table>
    <!-- 评论 -->
    <form action="<?php echo site_url('v_comment_add');?>" method="POST">
        <p class="comment_area">
            <textarea name="comments" id="comment" cols="100%" rows="10" tabindex="6"></textarea>
            <input type="hidden" name="eid" value="<?php echo $this->uri->segment(2);?>">
        </p>
        <input type="submit">
    </form>
</div>
</div>