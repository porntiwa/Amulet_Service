<?php
/* @var $this AmuletAddController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Amulet Adds',
);

$this->menu=array(
	array('label'=>'Create AmuletAdd', 'url'=>array('create')),
	array('label'=>'Manage AmuletAdd', 'url'=>array('admin')),
);
?>

<h1>รายการพระ</h1>
*/?>

<?php 
echo "{";
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
echo "}";
?>

