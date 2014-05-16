<?php
/* @var $this SelectProvinceController */
/* @var $model SelectProvince */

$this->breadcrumbs=array(
	'Select Provinces'=>array('index'),
	$model->Province_id=>array('view','id'=>$model->Province_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SelectProvince', 'url'=>array('index')),
	array('label'=>'Create SelectProvince', 'url'=>array('create')),
	array('label'=>'View SelectProvince', 'url'=>array('view', 'id'=>$model->Province_id)),
	array('label'=>'Manage SelectProvince', 'url'=>array('admin')),
);
?>

<h1>Update SelectProvince <?php echo $model->Province_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>