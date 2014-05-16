<?php
/* @var $this UploadImageController */
/* @var $model UploadImage */

$this->breadcrumbs=array(
	'Upload Images'=>array('index'),
	$model->Image_id,
);

$this->menu=array(
	array('label'=>'List UploadImage', 'url'=>array('index')),
	array('label'=>'Create UploadImage', 'url'=>array('create')),
	array('label'=>'Update UploadImage', 'url'=>array('update', 'id'=>$model->Image_id)),
	array('label'=>'Delete UploadImage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Image_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UploadImage', 'url'=>array('admin')),
);
?>

<h1>View UploadImage #<?php echo $model->Image_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Image_id',
		'Image_Choose',
	),
)); ?>
