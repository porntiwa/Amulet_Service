<?php
/* @var $this AmuletAddController */
/* @var $model AmuletAdd */

$this->breadcrumbs=array(
	'Amulet Adds'=>array('index'),
	$model->Name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AmuletAdd', 'url'=>array('index')),
	array('label'=>'Create AmuletAdd', 'url'=>array('create')),
	array('label'=>'View AmuletAdd', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AmuletAdd', 'url'=>array('admin')),
);
?>

<h1>แก้ไขข้อมูลพระ # <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>