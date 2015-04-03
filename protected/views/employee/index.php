<?php
/* @var $this InventoryController */

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
					<label for="search_item_type_id" class="col-sm-4 control-label">中文姓名</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_id">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<label for="search_item_type_name" class="col-sm-4 control-label">英文姓名</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_name">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<label for="search_item_type_local_name" class="col-sm-4 control-label">年龄</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_local_name">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<label for="search_item_category" class="col-sm-4 control-label">性别</label>
					<div class="col-sm-8">
						<select class="form-control" id="search_item_category">
							<option value="0" selected>男</option>
							<option value="1">女</option>
							<!--
							<option value="Tarot">塔罗牌</option>
							<option value="Crystal">水晶</option>
							<option value="Misc">混合</option>
                            -->
						</select>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="form-group col-sm-3">
					<label for="search_item_type_id" class="col-sm-4 control-label">员工编号</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_id">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<label for="search_item_type_id" class="col-sm-4 control-label">入职时间</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_id">
					</div>
				</div>
				<div class="form-group col-sm-6">
					<label for="search_item_type_name" class="col-sm-2 control-label">家庭住址</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_name">
					</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="form-group col-sm-3">
					<label for="search_item_type_id" class="col-sm-4 control-label">身份证号</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_id">
					</div>
				</div>
				<div class="form-group col-sm-3">
					<label for="search_item_type_name" class="col-sm-4 control-label">社保账号</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="search_item_type_name">
					</div>
				</div>
				<div class="form-group col-sm-4">
					<button type="button" class="btn btn-default" id="search_btn">搜索</button>
					<button type="button" class="btn btn-default rct-ban retail-ban" id="add_btn" data-toggle="modal" data-target="#add_item_modal">添加</button>
				</div>
			</div>
		</form>

	</div>
</div>


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
						<label for="edit_item_type_name" class="col-sm-3 control-label"><span style="color: red">*</span>中文姓名</label>
						<div class="col-sm-9">
							<input type="text" class="form-control rct-readonly retail-readonly" id="edit_item_type_name">
						</div>
					</div>
					<div class="form-group">
						<label for="edit_item_type_local_name" class="col-sm-3 control-label"><span style="color: red">*</span>英文姓名</label>
						<div class="col-sm-9">
							<input type="text" class="form-control rct-readonly retail-readonly" id="edit_item_type_local_name">
						</div>
					</div><div class="form-group">
						<label for="edit_item_category" class="col-sm-3 control-label"><span style="color: red">*</span> 性别</label>
						<div class="col-sm-9">
							<select class="form-control rct-disable retail-disable" id="edit_item_category">
								<option value="0">男</option>
								<option value="1">女</option>
							</select>
						</div>
					</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
				<button type="button" class="btn btn-primary" id="edit_btn">保存</button>
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){

		//修改物品模态框中保存按钮事件
		$('#edit_btn').click(function() {
			var btn = $(this);
			btn.attr('disabled', true);
			var url = "<?php echo Yii::app()->createUrl('Inventory/SaveItem') ?>";
			$.post(url, {
			}, function(data) {

			}, 'json');

		});

	});

</script>