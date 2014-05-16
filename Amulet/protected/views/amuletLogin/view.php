<?php
/* @var $this AmuletLoginController */
/* @var $model AmuletLogin */

$this->breadcrumbs=array(
	'Amulet Logins'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AmuletLogin', 'url'=>array('index')),
	array('label'=>'Create AmuletLogin', 'url'=>array('create')),
	array('label'=>'Update AmuletLogin', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AmuletLogin', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AmuletLogin', 'url'=>array('admin')),
);
?>

<h1>View AmuletLogin #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
	),
)); ?>
