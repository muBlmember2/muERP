<?php
/* @var $this AdministrationController */
/* @var $model Administration */

$this->breadcrumbs=array(
	'Administrations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Administration', 'url'=>array('index')),
	array('label'=>'Create Administration', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#administration-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Administrations</h1>

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
	'id'=>'administration-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'administrationCode',
		'adm_name',
		'adm_location',
		'adm_remarks',
		'adm_contactNo',
		'adm_email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
