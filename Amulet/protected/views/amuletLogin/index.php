<?php
/* @var $this AmuletLoginController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Amulet Logins',
);

$this->menu=array(
	array('label'=>'Create AmuletLogin', 'url'=>array('create')),
	array('label'=>'Manage AmuletLogin', 'url'=>array('admin')),
);
?>

<h1>Amulet Logins</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
