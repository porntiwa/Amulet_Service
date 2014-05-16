<?php
/* @var $this SelectProvinceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Select Provinces',
);

$this->menu=array(
	array('label'=>'Create SelectProvince', 'url'=>array('create')),
	array('label'=>'Manage SelectProvince', 'url'=>array('admin')),
);
?>

<h1>Select Provinces</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
