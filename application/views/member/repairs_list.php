<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>设备保修列表</title>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        $("a.status_change").click(function(){
                                $.get("<?php echo site_url("member/repairs/change");?>", {
                                        status : $(this).attr('status')
                                },function(data, textStatus){
                                        $('#xx').html(data);
                                });
                        });
                });
        </script>
</head>
<body>
<h1>设备报修列表</h1>
	<table>
		<thread>
			<th>设备名</th>
			<th>报修原因</th>
			<th>报修时间</th>
			<th>上报人</th>
			<th>维修状态</th>
			<th>操作</th>
		</thread>
		<tbody>
        <?php
        foreach ($res as $equip){
        ?>
        <tr>
        	<td><?php echo $equip->equip_name;?></td>
        	<td><?php echo $equip->reason;?></td>
        	<td><?php echo $equip->create_time;?></td>
        	<td><?php echo $equip->person;?></td>
        	<td class="repair_status"><?php echo $equip->status;?></td>
            <td>
                <a class="status_change" status="0" href="">未维修</a>
                <a class="status_change" status="1" href="">已维修</a>
            </td>
        </tr>
        <?php
        }
         ?>
		</tbody>
        <div id="xx">
                xx
        </div>
	</table>
</body>
</html>
