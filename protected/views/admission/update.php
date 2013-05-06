<?php
/* @var $this AdmissionController */
/* @var $model Admission */

$this->breadcrumbs=array(
	'Admissions'=>array('index'),
	$model->personID=>array('view','id'=>$model->personID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Admission', 'url'=>array('index')),
	array('label'=>'Create Admission', 'url'=>array('create')),
	array('label'=>'View Admission', 'url'=>array('view', 'id'=>$model->personID)),
	array('label'=>'Manage Admission', 'url'=>array('admin')),
);
?>

<h1>Update Admission <?php echo $model->personID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>