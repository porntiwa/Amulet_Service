<?php
/* @var $this UploadImageController */
/* @var $model UploadImage */

$this->breadcrumbs=array(
	'Upload Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UploadImage', 'url'=>array('index')),
	array('label'=>'Manage UploadImage', 'url'=>array('admin')),
);
?>

<h1>Create UploadImage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>