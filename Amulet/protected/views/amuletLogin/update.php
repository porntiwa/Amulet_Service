<?php
/* @var $this AmuletLoginController */
/* @var $model AmuletLogin */

$this->breadcrumbs=array(
	'Amulet Logins'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AmuletLogin', 'url'=>array('index')),
	array('label'=>'Create AmuletLogin', 'url'=>array('create')),
	array('label'=>'View AmuletLogin', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AmuletLogin', 'url'=>array('admin')),
);
?>

<h1>Update AmuletLogin <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>