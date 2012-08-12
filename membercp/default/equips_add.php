<script src="js/xheditor/xheditor-zh-cn.min.js" type="text/javascript"></script>
<div class="content form_content" style="height: 523px; ">
    <form action="<?php echo site_url('member/equips/add');?>" method="POST">
        <table class="form_table">
            <colgroup><col width="150px">
                <col>
            </colgroup>
        <tbody>
        <tr>
            <th><label for="equip_name">设&nbsp;备&nbsp;名&nbsp;</label></th>
            <td><input type="text" name="equip_name" style="width:200px; height: 20px;" /></td>
        </tr>
        <tr>
            <th><label for="equip_price">设备价值</label></th>
            <td><input type="text" name="equip_price" style="width:200px; height: 20px;"/></td>
        </tr>
        <tr>
            <th><label for="equip_type">设备型号</label></th>
            <td><input type="text" name="equip_type" style="width:200px; height: 20px;"/></td>
        </tr>
        <tr>
            <th><label for="equip_pos">安放位置</label></th>
            <td><input type="text" name="equip_pos" style="width:200px; height: 20px;" /></td>
        </tr>
        <tr>
            <th><label for="equip_manager">负责人</label></th>
            <td><input type="text" name="equip_manager" style="width:200px; height: 20px;" /></td>
        </tr>
        <tr>
            <th><label for="equip_phone">电&nbsp;&nbsp;话</label></th>
            <td><input type="text" name="equip_phone" style="width:200px; height: 20px;"/></td>
        </tr>
        <tr>
            <th><label for="equip_email">E-mail</label></th>
            <td><input type="text" name="equip_email" style="width:200px; height: 20px;"/></td>
        </tr>
        <tr>
            <th><label for="equip_performance">性能指标</label></th>
            <td><textarea style="width:480px; height:100px;" name="equip_performance"></textarea></td>
        </tr>
        <tr>
            <th><label for="equip_explain">详细介绍</label></th>
            <td><textarea name="equip_explain" id="equip_explain" style="width: 480px; height: 20px; display: none; " class="xheditor {tools:'mini',skin:'nostyle'}"></textarea></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="提交" class="submit" style="width:40px; height:20px;"></td>
        </tr>
        </tbody></table>
    </form>
</div>