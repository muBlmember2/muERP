<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_code'); ?>
		<?php echo $form->textField($model,'dpt_code',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dpt_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_name'); ?>
		<?php echo $form->textField($model,'dpt_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dpt_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_location'); ?>
		<?php echo $form->textField($model,'dpt_location',array('size'=>60,'maxlength'=>350)); ?>
		<?php echo $form->error($model,'dpt_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_contactNo'); ?>
		<?php echo $form->textField($model,'dpt_contactNo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'dpt_contactNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_email'); ?>
		<?php echo $form->textField($model,'dpt_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'dpt_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_remarks'); ?>
		<?php echo $form->textArea($model,'dpt_remarks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'dpt_remarks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_head'); ?>
		<?php echo $form->textField($model,'dpt_head'); ?>
		<?php echo $form->error($model,'dpt_head'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dpt_headStatus'); ?>
		<?php echo $form->textField($model,'dpt_headStatus',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'dpt_headStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schoolID'); ?>
		<?php echo $form->textField($model,'schoolID'); ?>
		<?php echo $form->error($model,'schoolID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->