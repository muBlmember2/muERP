<?php
/* @var $this AdmissionController */
/* @var $model Admission */

$this->breadcrumbs=array(
	'Admissions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Admission', 'url'=>array('index')),
	array('label'=>'Create Admission', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#admission-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Admissions</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admission-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'per_title',
		'per_firstName',
		'per_lastName',
		'per_gender',
		'per_dateofBirth',
		'per_bloodGroup',
		/*
		'per_nationality',
		'per_fathersName',
		'per_mothersName',
		'per_husbandsName',
		'per_parmanentAddress',
		'per_postCode',
		'per_telephone',
		'per_mobile',
		'per_email',
		'per_presentAddress',
		'per_maritulStatus',
		'per_englishLanguageProficiency',
		'per_computerLiteracy',
		'per_otherActivities',
		'per_personalStatment',
		'per_criminalConviction',
		'per_convictionDetails',
		'per_refereeOneName',
		'per_refereeOneOccupation',
		'per_refereeOneAddress',
		'per_refereeOneEmail',
		'per_refereeOneMobile',
		'per_refereeTwoName',
		'per_refereeTwoOccupation',
		'per_refereeTwoAddress',
		'per_refereeTwoEmail',
		'per_refereeTwoMobile',
		'per_entryDate',
		'personID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
