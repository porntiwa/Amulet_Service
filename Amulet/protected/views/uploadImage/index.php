<?php
/* @var $this UploadImageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Upload Images',
);

$this->menu=array(
	array('label'=>'Create UploadImage', 'url'=>array('create')),
	array('label'=>'Manage UploadImage', 'url'=>array('admin')),
);
?>

<h1>Upload Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
