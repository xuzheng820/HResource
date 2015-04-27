<?php
/* @var $this EmployeeController */
/* @var $model Employee */

$this->breadcrumbs=array(
	'雇员管理',
);
?>

<div style="padding-top: 20px">
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title"><strong>雇员管理</strong></h4>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" role="form">
            <div class="form-group row">
                <div class="form-group col-sm-3">
                    <label for="search_account" class="col-sm-4 control-label">Account ID</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_account">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_name" class="col-sm-4 control-label">姓名</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_name">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_age" class="col-sm-4 control-label">年龄</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_age">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_sex" class="col-sm-4 control-label">性别</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="search_sex">
                            <option value="0" selected>男</option>
                            <option value="1">女</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-3">
                    <label for="search_id_num" class="col-sm-4 control-label">身份证号</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_id_num">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_entry_time" class="col-sm-4 control-label">入职时间</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_entry_time">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_contact_start_time" class="col-sm-4 control-label">合同起始时间</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_contact_start_time">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_contact_end_time" class="col-sm-4 control-label">合同结束时间</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_contact_end_time">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-sm-3">
                    <label for="search_team" class="col-sm-4 control-label">Team</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_team">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_position" class="col-sm-4 control-label">职位</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_position">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_manager" class="col-sm-4 control-label">Manager</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_manager">
                    </div>
                </div>
            </div>
            <div class="form-group row">

                <div class="form-group col-sm-3">
                    <label for="search_tel" class="col-sm-4 control-label">电话</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_tel">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <label for="search_mail" class="col-sm-4 control-label">电子邮件</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="search_mail">
                    </div>
                </div>
                <div class="form-group col-sm-3">
                    <button type="button" class="btn btn-default" id="search_btn">搜索</button>
                    <button type="button" class="btn btn-default rct-ban retail-ban" id="add_btn" data-toggle="modal" data-target="#add_item_modal">添加</button>
                </div>
            </div>
        </form>
    </div>
</div>

<table class="table">
    <caption>雇员搜索结果</caption>
    <thead>
        <tr>
            <th>Account ID</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>性别</th>
            <th>身份证号</th>
            <th>入职时间</th>
            <th>合同起</th>
            <th>合同止</th>
            <th>Team</th>
            <th>职位</th>
            <th>Manager</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<div class="modal fade" id="add_item_modal" role="dialog" aria-labelledby="add_item_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="add_item_modal_label">添加雇员</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="add_account" class="col-sm-3 control-label"><span style="color: red">*</span>Account ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_account">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_name" class="col-sm-3 control-label"><span style="color: red">*</span>姓名</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_age" class="col-sm-3 control-label"><span style="color: red">*</span>年龄</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_age">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_sex" class="col-sm-3 control-label"><span style="color: red">*</span> 性别</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="add_sex">
                                <option value="0">男</option>
                                <option value="1">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_id_num" class="col-sm-3 control-label"><span style="color: red">*</span>身份证号</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_id_num">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_id_num" class="col-sm-3 control-label"><span style="color: red">*</span>入职时间</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_entry_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_contact_start_time" class="col-sm-3 control-label"><span style="color: red">*</span>合同起始时间</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_contact_start_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_contact_end_time" class="col-sm-3 control-label"><span style="color: red">*</span>合同结束时间</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_contact_end_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_team" class="col-sm-3 control-label"><span style="color: red">*</span>Team</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_team">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_position" class="col-sm-3 control-label"><span style="color: red">*</span>职位</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_position">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_manager" class="col-sm-3 control-label"><span style="color: red">*</span>Manager</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="add_manager">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary" id="add_employeee_btn">保存</button>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_item_modal" role="dialog" aria-labelledby="edit_item_modal_label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="edit_item_modal_label">添加雇员</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="edit_account" class="col-sm-3 control-label"><span style="color: red">*</span>Account ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_account">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_name" class="col-sm-3 control-label"><span style="color: red">*</span>姓名</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_age" class="col-sm-3 control-label"><span style="color: red">*</span>年龄</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_age">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_sex" class="col-sm-3 control-label"><span style="color: red">*</span> 性别</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="edit_sex">
                                <option value="0">男</option>
                                <option value="1">女</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_id_num" class="col-sm-3 control-label"><span style="color: red">*</span>身份证号</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_id_num">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_tel" class="col-sm-3 control-label"><span style="color: red">*</span>Tel</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_tel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_mail" class="col-sm-3 control-label"><span style="color: red">*</span>Mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_entry_time" class="col-sm-3 control-label"><span style="color: red">*</span>入职时间</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_entry_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_contact_start_time" class="col-sm-3 control-label"><span style="color: red">*</span>合同起始时间</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_contact_start_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_contact_end_time" class="col-sm-3 control-label"><span style="color: red">*</span>合同结束时间</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_contact_end_time">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_team" class="col-sm-3 control-label"><span style="color: red">*</span>Team</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_team">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_position" class="col-sm-3 control-label"><span style="color: red">*</span>职位</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_position">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="edit_manager" class="col-sm-3 control-label"><span style="color: red">*</span>Manager</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="edit_manager">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="button" class="btn btn-primary" id="add_employeee_btn">保存</button>
                    </div>
            </div>
        </div>
    </div>
</div>

<link href="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/datetimepicker/jquery.datetimepicker.css" rel="stylesheet">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/lib/js/datetimepicker/jquery.datetimepicker.js"></script>

<script>
    $(function() {
        $('#search_entry_time').datetimepicker({format:'Y-m-d'});
        $('#search_contact_start_time').datetimepicker({format:'Y-m-d'});
        $('#search_contact_end_time').datetimepicker({format:'Y-m-d'});

        $('#add_entry_time').datetimepicker({format:'Y-m-d h:i'});
        $('#add_contact_start_time').datetimepicker({format:'Y-m-d'});
        $('#add_contact_end_time').datetimepicker({format:'Y-m-d'});

        $('#edit_entry_time').datetimepicker({format:'Y-m-d'});
        $('#edit_contact_start_time').datetimepicker({format:'Y-m-d'});
        $('#edit_contact_end_time').datetimepicker({format:'Y-m-d'});

        var url = "<?php echo Yii::app()->createUrl('Employee/ListEmp')?>";
        $('#search_button').click(function() {
            $.post(url, {
                search_flag : 1,
                name : $('#search_name')
            }, function(data) {
                for (i in data) {
                    var item = data[i];
                    $("tbody").append("<tr>")
                        .append("<td>" + item['Account'] + "</td>")
                        .append("<td>" + item['name'] + "</td>")
                        .append("<td>" + item['age'] + "</td>")
                        .append("<td>" + item['sex'] + "</td>")
                        .append("<td>" + item['id_num'] + "</td>")
                        .append("<td>" + item['entry_time'] + "</td>")
                        .append("<td>" + item['contact_start_time'] + "</td>")
                        .append("<td>" + item['contact_end_time'] + "</td>")
                        .append("<td>" + item['team'] + "</td>")
                        .append("<td>" + item['position'] + "</td>")
                        .append("<td>" + item['manager'] + "</td>")
                        .append("<td>" + item['tel'] + "</td>")
                        .append("<td>" + item['mail'] + "</td>")
                        .append("</tr>");
                }
            }, 'json');
        });

        //$('#search_button').click();
    });
</script>