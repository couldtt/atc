<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script type="text/javascript">
                $(document).ready(function(){
                        $("button.status_change").click(function(){
                            $repair_status = $(this).parents().siblings('.repair_status');
                            $.post("<?php echo site_url('member/repairs/change'); ?>",{
                                id : $(this).attr('id'),
                                status : $(this).attr('status')
                            },function(data, textStatus){
                                $repair_status.text(data);
                            });
                        });
                });
        </script>
</head>
<body>
<h1>设备报修列表</h1>
    <table class="list_table">
        <thead>
            <th>设备名</th>
            <th>报修原因</th>
            <th>报修时间</th>
            <th>上报人</th>
            <th>维修状态</th>
            <th>操作</th>
        </thead>
        <tbody>
        <?php
        foreach ($res as $equip){
        ?>
        <tr>
            <td><?php echo $equip->equip_name;?></td>
            <td><?php echo $equip->reason;?></td>
            <td><?php echo date('Y-m-d', strtotime($equip->create_time));?></td>
            <td><?php echo $equip->person;?></td>
            <td class="repair_status"><?php echo $equip->status;?></td>
            <td>
            <button class="status_change" status="0" id="<?php echo $equip->id;?>">未维修</button>
            <button class="status_change" status="1" id="<?php echo $equip->id;?>">已维修</button>
            </td>
        </tr>
        <?php
        }
         ?>
        </tbody>
    </table>