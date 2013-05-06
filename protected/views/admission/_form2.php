<?php
/* @var $this AdmissionController */
/* @var $model Admission */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation'=>false,
    'id'=>'admission-_form2-form',
    'stateful'=>true,
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneAddress'); ?>
		<?php echo $form->textField($model,'per_refereeOneAddress'); ?>
		<?php echo $form->error($model,'per_refereeOneAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoAddress'); ?>
		<?php echo $form->textField($model,'per_refereeTwoAddress'); ?>
		<?php echo $form->error($model,'per_refereeTwoAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_postCode'); ?>
		<?php echo $form->textField($model,'per_postCode'); ?>
		<?php echo $form->error($model,'per_postCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_telephone'); ?>
		<?php echo $form->textField($model,'per_telephone'); ?>
		<?php echo $form->error($model,'per_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeOneMobile'); ?>
		<?php echo $form->textField($model,'per_refereeOneMobile'); ?>
		<?php echo $form->error($model,'per_refereeOneMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_refereeTwoMobile'); ?>
		<?php echo $form->textField($model,'per_refereeTwoMobile'); ?>
		<?php echo $form->error($model,'per_refereeTwoMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_maritulStatus'); ?>
		<?php echo $form->textField($model,'per_maritulStatus'); ?>
		<?php echo $form->error($model,'per_maritulStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_englishLanguageProficiency'); ?>
		<?php echo $form->textField($model,'per_englishLanguageProficiency'); ?>
		<?php echo $form->error($model,'per_englishLanguageProficiency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_personalStatment'); ?>
		<?php echo $form->textField($model,'per_personalStatment'); ?>
		<?php echo $form->error($model,'per_personalStatment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'per_convictionDetails'); ?>
		<?php echo $form->textField($model,'per_convictionDetails'); ?>
		<?php echo $form->error($model,'per_convictionDetails'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'per_entryDate'); ?>
		<?php echo $form->textField($model,'per_entryDate'); ?>
		<?php echo $form->error($model,'per_entryDate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Back', array('name' => 'step1')); ?>
        <? echo '&nbsp;&nbsp;&nbsp;'; ?>
        <?php echo CHtml::submitButton('Finish', array('name' => 'finish')); ?> 

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->