
<div id="mws-container" class="clearfix">
    <div class="container">

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span class="mws-i-24 i-list">信息修改</span>
            </div>
            <div class="mws-panel-body">
                <?php if($save):?>
                <div class="mws-form-message success">
                    修改成功！！！
                </div>
                <?php endif;?>
                <form class="mws-form" action="/site/edit?id=<?php echo $_GET['id'];?>" method="post">
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="gsensor_no" value="<?php echo $model->gsensor_no;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="gsensor_name" value="<?php echo $model->gsensor_name;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="pcb_no" value="<?php echo $model->pcb_no;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="mac" value="<?php echo $model->mac;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="version" value="<?php echo $model->version;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="hospital" value="<?php echo $model->hospital;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="office" value="<?php echo $model->office;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="bed_no" value="<?php echo $model->bed_no;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="sn" value="<?php echo $model->sn;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label>Small text field</label>
                            <div class="mws-form-item small">
                                <input name="sn_tip" value="<?php echo $model->sn_tip;?>" type="text" class="mws-textinput" />
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <input type="submit" value="保存" class="mws-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="mws-footer">
        Copyright &copy; 2018.Blue Tec All rights reserved. - Powered by <a href="http://www.iamlk.cn/" title="网页模板" target="_blank">LK</a>
    </div>


</div>