<?php
/* @var $this UploadImageController */
/* @var $model UploadImage */

$this->breadcrumbs=array(
	'Upload Images'=>array('index'),
	$model->Image_id=>array('view','id'=>$model->Image_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UploadImage', 'url'=>array('index')),
	array('label'=>'Create UploadImage', 'url'=>array('create')),
	array('label'=>'View UploadImage', 'url'=>array('view', 'id'=>$model->Image_id)),
	array('label'=>'Manage UploadImage', 'url'=>array('admin')),
);
?>

<h1>Update UploadImage <?php echo $model->Image_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>