<?php
/* @var $this AmuletLoginController */
/* @var $model AmuletLogin */

$this->breadcrumbs=array(
	'Amulet Logins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AmuletLogin', 'url'=>array('index')),
	array('label'=>'Manage AmuletLogin', 'url'=>array('admin')),
);
?>

<h1>Create AmuletLogin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>