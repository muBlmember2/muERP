<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_academicTerm'); ?>
		<?php echo $form->dropDownList($model,'stu_academicTerm',array('Spring','Summer','Autumn')); ?>
		<?php echo $form->error($model,'stu_academicTerm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_academicYear'); ?>
		<?php echo $form->dropDownList($model,'stu_academicYear',array('2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020')); ?>
		<?php echo $form->error($model,'stu_academicYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_testDate'); ?>
		<?php //echo $form->textField($model,'stu_testDate');
		$this->widget('zii.widgets.jui.CJuiDatePicker',
		array(
        'attribute'=>'stu_testDate',
        'model'=>$model,
        'options' => array(
                          'mode'=>'focus',
                          'dateFormat'=>'d MM, yy',
                          'showAnim' => 'slideDown',
                          ),
			'htmlOptions'=>array('size'=>30,'class'=>'date'),
		)
		);?>
		<?php echo $form->error($model,'stu_testDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_totalScore'); ?>
		<?php echo $form->textField($model,'stu_totalScore'); ?>
		<?php echo $form->error($model,'stu_totalScore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_optainedScore'); ?>
		<?php echo $form->textField($model,'stu_optainedScore'); ?>
		<?php echo $form->error($model,'stu_optainedScore'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_conditions'); ?>
		<?php echo $form->textArea($model,'stu_conditions',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'stu_conditions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_previousID'); ?>
		<?php echo $form->textField($model,'stu_previousID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'stu_previousID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_previousDegree'); ?>
		<?php echo $form->textField($model,'stu_previousDegree',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'stu_previousDegree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_guardiansName'); ?>
		<?php echo $form->textField($model,'stu_guardiansName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'stu_guardiansName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_guardiansPostcode'); ?>
		<?php echo $form->textField($model,'stu_guardiansPostcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'stu_guardiansPostcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_guardiansTelephone'); ?>
		<?php echo $form->textField($model,'stu_guardiansTelephone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'stu_guardiansTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_guardiansMobile'); ?>
		<?php echo $form->textField($model,'stu_guardiansMobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'stu_guardiansMobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_guardiansEmail'); ?>
		<?php echo $form->textField($model,'stu_guardiansEmail',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'stu_guardiansEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_financialSource'); ?>
		<?php echo $form->textField($model,'stu_financialSource',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'stu_financialSource'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stu_financialSourceDescription'); ?>
		<?php echo $form->textField($model,'stu_financialSourceDescription',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'stu_financialSourceDescription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'studentID'); ?>
		<?php echo $form->textField($model,'studentID',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'studentID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employeeID'); ?>
		<?php echo $form->textField($model,'employeeID'); ?>
		<?php echo $form->error($model,'employeeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personID'); ?>
		<?php echo $form->textField($model,'personID'); ?>
		<?php echo $form->error($model,'personID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'programmeCode'); ?>
		<?php echo $form->textField($model,'programmeCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'programmeCode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->