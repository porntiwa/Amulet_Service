<?php
/* @var $this AmuletAddController */
/* @var $model AmuletAdd */

$this->breadcrumbs=array(
	'Amulet Adds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AmuletAdd', 'url'=>array('index')),
	array('label'=>'Manage AmuletAdd', 'url'=>array('admin')),
);
?>

<h1>เพิ่มพระเครื่อง</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>