<?php
/* @var $this PersonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Student',
);

$this->menu=array(
	array('label'=>'New Student Registration', 'url'=>array('create')),
	array('label'=>'Edit Student Personal Detail', 'url'=>array('admin')),
	array('label'=>'Re-admission', 'url'=>array('create')),
	array('label'=>'Re-take', 'url'=>array('create')),
);
?>

<h1>Student</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
