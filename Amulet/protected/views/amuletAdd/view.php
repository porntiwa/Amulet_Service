<?php
/* @var $this AmuletAddController */
/* @var $model AmuletAdd */

$this->breadcrumbs=array(
	'Amulet Adds'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List AmuletAdd', 'url'=>array('index')),
	array('label'=>'Create AmuletAdd', 'url'=>array('create')),
	array('label'=>'Update AmuletAdd', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AmuletAdd', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AmuletAdd', 'url'=>array('admin')),
);
?>

<h1>รายละเอียดพระเครื่อง #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Image1',
		'Name',
		'Division',
		'Year',
		'Group',
		'Province',
		'Type',
		'Kind',
		'Observe',
		'Landmark1',
		'Landmark2',
	),
)); ?>
