<style>
.mylink{
    text-decoration:none;
    color:#666666;
    display:block;
    cursor:pointer;
}
</style>
<div id="mws-container" class="clearfix">
    <div class="container" style="width:100%;">

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span class="mws-i-24 i-table-1">当前总条数：<?php echo $count;?></span>
            </div>
            <div class="mws-panel-body">
                <div class="mws-panel-toolbar top clearfix">
                    <ul>
                        <li><a href="#" onclick="document.form.submit();" class="mws-ic-16 ic-cross">批量删除</a></li>
                        <li><a href="/device.xlsx" class="mws-ic-16 ic-page-excel">下载Excel模板</a></li>
                        <li><a href="/site/import" class="mws-ic-16 ic-page-lightning">导入Excel数据</a></li>
                    </ul>
                </div>
                <table class="mws-table">
                    <thead>
                    <tr>
                        <th><input id="btnCheckAll" type="checkbox" /></th>
                        <th>标签序列号</th>
                        <th>硬件序列号</th>
                        <th>PCB批次号</th>
                        <th>传感器批次号</th>
                        <th>传感器厂家</th>
                        <th>类型</th>
                        <th>WIFI版MAC地址</th>
                        <th>客户医院</th>
                        <th>科室</th>
                        <th>床位号</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form name="form" id="form" action="/site/delete" method="post">
                    <?php foreach($list as $li):?>
                    <tr class="gradeX">
                        <td><input name="chkItem[]" value="<?php echo $li->id;?>" type="checkbox" /></td>
                        <td><?php echo $li->sn_tip;?></td>
                        <td><?php echo $li->sn;?></td>
                        <td><?php echo $li->pcb_no;?></td>
                        <td><?php echo $li->gsensor_no;?></td>
                        <td><?php echo $li->gsensor_name;?></td>
                        <td><?php echo $li->version;?></td>
                        <td><?php echo $li->mac;?></td>
                        <td><?php echo $li->hospital;?></td>
                        <td><?php echo $li->office;?></td>
                        <td><?php echo $li->bed_no;?></td>
                        <td>
                            <div class="plupload_buttons">
                                <a href="/site/edit?id=<?php echo $li->id;?>" class="mylink" id="uploader_browse" style="position: relative; z-index: 0;">修改</a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="mws-footer">
        Copyright &copy; 2018.Blue Tec All rights reserved. - Powered by <a href="http://www.iamlk.cn/" title="网页模板" target="_blank">LK</a>
    </div>

</div>
<script type="text/javascript">
    $(function () {
        var click = false;
        // 全选
        $("#btnCheckAll").bind("click", function () {
            click = !click;
            if(click)
                $("[type = checkbox]:checkbox").attr("checked", true);
            else
                $("[type = checkbox]:checkbox").attr("checked", false);
        });
    });
</script>
