<?php
/* @var $this SelectProvinceController */
/* @var $model SelectProvince */

$this->breadcrumbs=array(
	'Select Provinces'=>array('index'),
	$model->Province_id,
);

$this->menu=array(
	array('label'=>'List SelectProvince', 'url'=>array('index')),
	array('label'=>'Create SelectProvince', 'url'=>array('create')),
	array('label'=>'Update SelectProvince', 'url'=>array('update', 'id'=>$model->Province_id)),
	array('label'=>'Delete SelectProvince', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Province_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SelectProvince', 'url'=>array('admin')),
);
?>

<h1>View SelectProvince #<?php echo $model->Province_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Province_id',
		'Province_Name',
	),
)); ?>
