<?php
/* @var $this PersonController */
/* @var $model Person */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee One Name'); ?>
		<?php echo $form->textField($model,'per_refereeOneName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeOneName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee One Occupation'); ?>
		<?php echo $form->textField($model,'per_refereeOneOccupation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_refereeOneOccupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee One Address'); ?>
		<?php echo $form->textField($model,'per_refereeOneAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_refereeOneAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee One Email'); ?>
		<?php echo $form->textField($model,'per_refereeOneEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeOneEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'RefereeOne Mobile'); ?>
		<?php echo $form->textField($model,'per_refereeOneMobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_refereeOneMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee Two Name'); ?>
		<?php echo $form->textField($model,'per_refereeTwoName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeTwoName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee Two Occupation'); ?>
		<?php echo $form->textField($model,'per_refereeTwoOccupation',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_refereeTwoOccupation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee Two Address'); ?>
		<?php echo $form->textField($model,'per_refereeTwoAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_refereeTwoAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee Two Email'); ?>
		<?php echo $form->textField($model,'per_refereeTwoEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_refereeTwoEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Referee Two Mobile'); ?>
		<?php echo $form->textField($model,'per_refereeTwoMobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_refereeTwoMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Entry Date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
        'attribute'=>'per_entryDate',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          'dateFormat'=>'d MM, yy',
                          'showAnim' => 'slideDown',
                          ),
			'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
  		<?php echo $form->error($model,'per_entryDate'); ?>
	</div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Continue' : 'Save'); 
		echo CHtml::submitButton("Back to Step 1",array('name'=>'step1'));
		echo CHtml::submitButton("Finish",array('name'=>'finish'));
		
		?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->