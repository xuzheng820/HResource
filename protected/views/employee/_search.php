<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Account'); ?>
		<?php echo $form->textArea($model,'Account',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Name'); ?>
		<?php echo $form->textArea($model,'Name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_Num'); ?>
		<?php echo $form->textArea($model,'Id_Num',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Age'); ?>
		<?php echo $form->textField($model,'Age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Team'); ?>
		<?php echo $form->textArea($model,'Team',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Position'); ?>
		<?php echo $form->textArea($model,'Position',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Manager'); ?>
		<?php echo $form->textArea($model,'Manager',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tel'); ?>
		<?php echo $form->textArea($model,'Tel',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'E_mail'); ?>
		<?php echo $form->textArea($model,'E_mail',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Entry_Time'); ?>
		<?php echo $form->textArea($model,'Entry_Time',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_STime'); ?>
		<?php echo $form->textArea($model,'Contact_STime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Contact_ETime'); ?>
		<?php echo $form->textArea($model,'Contact_ETime',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->