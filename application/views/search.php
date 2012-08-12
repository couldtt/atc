<div id="topborder">
    <div id="biaoqian">
        <p>站点栏目</p>
    </div>
    <div id="topborder_nav">
        <div style="margin-top:8px;">搜索结果</div>
    </div>
</div>
<div id="left_side">
    <div id="left-content">
        <ul>
            <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="<?php echo site_url("center"); ?>">   中心简介</a></li>
            <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="<?php echo site_url("notices"); ?>">  通知公告</a></li>
            <li><img src="<?php echo base_url();?>assets/pic/dian.png" /><a href="<?php echo site_url("academics"); ?>"> 学术活动</a></li>
        </ul>
    </div>
</div>
<div id="right_side">
    <div class="contenttext">
        <ul id="art_list">
            <?php
                if ($is_blank == FALSE){
                    foreach($search_results as $res){
            ?>
            <li>
                <span class="title">
                    <?php
                        $pattern = "/($search_content)/";
                        $replacement = "<span style='color:red;'>$1</span>";
                        $new_title = preg_replace($pattern, $replacement, $res->title);
                        echo anchor("a_detail/$res->id",$new_title);
                    ?>
                </span>
                <span class="date">[<?php echo date('Y-m-d',$res->update_time);?>]</span>
            </li>
            <?php
            }
                } elseif ($is_blank == TRUE) {
                    echo $search_results;
                }
            ?>
        </ul>
    </div>
</div>