<?php
/* @var $this StudentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Students',
);

$this->menu=array(
	array('label'=>'New Student Registration', 'url'=>array('create')),
	array('label'=>'Edit Student Personal Detail', 'url'=>array('admin')),
	array('label'=>'Register existing students on another programme', 'url'=>array('create')),
	array('label'=>'Re-admission', 'url'=>array('create')),
	array('label'=>'Re-take', 'url'=>array('create')),
); 
?>

<h1>Students</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
