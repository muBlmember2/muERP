<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->departmentID), array('view', 'id'=>$data->departmentID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_code')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_name')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_location')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_contactNo')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_contactNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_email')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_remarks')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_remarks); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_head')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_head); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dpt_headStatus')); ?>:</b>
	<?php echo CHtml::encode($data->dpt_headStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('schoolID')); ?>:</b>
	<?php echo CHtml::encode($data->schoolID); ?>
	<br />

	*/ ?>

</div>