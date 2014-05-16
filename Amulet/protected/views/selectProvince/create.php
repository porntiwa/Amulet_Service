<?php
/* @var $this SelectProvinceController */
/* @var $model SelectProvince */

$this->breadcrumbs=array(
	'Select Provinces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SelectProvince', 'url'=>array('index')),
	array('label'=>'Manage SelectProvince', 'url'=>array('admin')),
);
?>

<h1>Create SelectProvince</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>