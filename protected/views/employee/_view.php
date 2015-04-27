<?php
/* @var $this EmployeeController */
/* @var $data Employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Account')); ?>:</b>
	<?php echo CHtml::encode($data->Account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_Num')); ?>:</b>
	<?php echo CHtml::encode($data->Id_Num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sex')); ?>:</b>
	<?php echo CHtml::encode($data->Sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Age')); ?>:</b>
	<?php echo CHtml::encode($data->Age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Team')); ?>:</b>
	<?php echo CHtml::encode($data->Team); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Position')); ?>:</b>
	<?php echo CHtml::encode($data->Position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Manager')); ?>:</b>
	<?php echo CHtml::encode($data->Manager); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tel')); ?>:</b>
	<?php echo CHtml::encode($data->Tel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('E_mail')); ?>:</b>
	<?php echo CHtml::encode($data->E_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Entry_Time')); ?>:</b>
	<?php echo CHtml::encode($data->Entry_Time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_STime')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_STime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_ETime')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_ETime); ?>
	<br />

	*/ ?>

</div>