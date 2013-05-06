<?php
/* @var $this AdmissionController */
/* @var $model Admission */
/* @var $form CActiveForm */
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation'=>false,
    'id'=>'admission-form',
    'stateful'=>true,
));
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Title'); ?>
		<?php echo $form->dropDownList($model,'per_title',array('Mr','Ms','Mrs','Miss','Dr.')); ?>
		<?php echo $form->error($model,'per_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'First Name'); ?>
		<?php echo $form->textField($model,'per_firstName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Last Name'); ?>
		<?php echo $form->textField($model,'per_lastName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'per_lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Gender'); ?>
		<?php echo $form->dropDownList($model,'per_gender',array('Male','Female')); ?>
		<?php echo $form->error($model,'per_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date of Birth'); ?>
		<?php echo $form->dropDownList($model,'per_dateofBirth',array('Day','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31')); ?>
		<?php echo $form->dropDownList($model,'per_dateofBirth',array('Month','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec')); ?>
		<?php echo $form->dropDownList($model,'per_dateofBirth',array('Year','1980','1981','1982','1983','1984','1985')); ?>
			<?php echo $form->error($model,'per_dateofBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Blood Group'); ?>
		<?php echo $form->dropDownList($model,'per_bloodGroup',array('A+','A-','B+','B-','AB+','AB-','O+','O-')); ?>
		<?php echo $form->error($model,'per_bloodGroup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nationality'); ?>
		<?php echo $form->textField($model,'per_nationality',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'per_nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fathers Name'); ?>
		<?php echo $form->textField($model,'per_fathersName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_fathersName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mothers Name'); ?>
		<?php echo $form->textField($model,'per_mothersName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_mothersName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Husbands Name'); ?>
		<?php echo $form->textField($model,'per_husbandsName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_husbandsName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Parmanent Address'); ?>
		<?php echo $form->textField($model,'per_parmanentAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_parmanentAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Post Code'); ?>
		<?php echo $form->textField($model,'per_postCode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'per_postCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Telephone'); ?>
		<?php echo $form->textField($model,'per_telephone',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Mobile'); ?>
		<?php echo $form->textField($model,'per_mobile',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'per_mobile'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'per_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'per_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Present Address'); ?>
		<?php echo $form->textField($model,'per_presentAddress',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_presentAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Maritul Status'); ?>
		<?php echo $form->dropDownList($model,'per_maritulStatus',array('Single','Merried','Divorce')); ?>
		<?php echo $form->error($model,'per_maritulStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'English Language Proficiency'); ?>
		<?php echo $form->textField($model,'per_englishLanguageProficiency',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'per_englishLanguageProficiency'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Computer Literacy'); ?>
		<?php echo $form->textField($model,'per_computerLiteracy',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_computerLiteracy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Other Activities'); ?>
		<?php echo $form->textField($model,'per_otherActivities',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'per_otherActivities'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Personal Statment'); ?>
		<?php echo $form->textArea($model,'per_personalStatment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'per_personalStatment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Criminal Conviction'); ?>
		<?php echo $form->textField($model,'per_criminalConviction'); ?>
		<?php echo $form->error($model,'per_criminalConviction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Conviction Details'); ?>
		<?php echo $form->textArea($model,'per_convictionDetails',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'per_convictionDetails'); ?>
	</div>
	
<?php echo CHtml::submitButton('Cancel', array('name' => 'cancel')); ?>
<? echo '&nbsp;&nbsp;&nbsp;'; ?>
<?php echo CHtml::submitButton('Continue', array('name' => 'step2')); ?> 

<?php $this->endWidget(); ?>

</div><!-- form -->