<?php
/* @var $this PersonController */
/* @var $model Person */

$this->breadcrumbs=array(
	'Student'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>Register a new student</h1>
<h12>Please do not use your browser refresh button while registering a student as this will cause the form to clear.</h2>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>