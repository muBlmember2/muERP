<?php
/* @var $this AdmissionController */
/* @var $model Admission */

$this->breadcrumbs=array(
	'Admissions'=>array('index'),
	$model->personID,
);

$this->menu=array(
	array('label'=>'List Admission', 'url'=>array('index')),
	array('label'=>'Create Admission', 'url'=>array('create')),
	array('label'=>'Update Admission', 'url'=>array('update', 'id'=>$model->personID)),
	array('label'=>'Delete Admission', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Admission', 'url'=>array('admin')),
);
?>

<h1>View Admission #<?php echo $model->personID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'per_title',
		'per_firstName',
		'per_lastName',
		'per_gender',
		'per_dateofBirth',
		'per_bloodGroup',
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
	),
)); ?>
