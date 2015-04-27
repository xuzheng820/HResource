<?php
/* @var $this EmployeeController */
/* @var $model Employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Account'); ?>
		<?php echo $form->textArea($model,'Account',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textArea($model,'Name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_Num'); ?>
		<?php echo $form->textArea($model,'Id_Num',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Id_Num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sex'); ?>
		<?php echo $form->textField($model,'Sex'); ?>
		<?php echo $form->error($model,'Sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Age'); ?>
		<?php echo $form->textField($model,'Age'); ?>
		<?php echo $form->error($model,'Age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Team'); ?>
		<?php echo $form->textArea($model,'Team',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Team'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Position'); ?>
		<?php echo $form->textArea($model,'Position',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Manager'); ?>
		<?php echo $form->textArea($model,'Manager',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Manager'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tel'); ?>
		<?php echo $form->textArea($model,'Tel',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Tel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'E_mail'); ?>
		<?php echo $form->textArea($model,'E_mail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'E_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Entry_Time'); ?>
		<?php echo $form->textArea($model,'Entry_Time',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Entry_Time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact_STime'); ?>
		<?php echo $form->textArea($model,'Contact_STime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Contact_STime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contact_ETime'); ?>
		<?php echo $form->textArea($model,'Contact_ETime',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Contact_ETime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->