<?php
/* @var $this SelectProvinceController */
/* @var $data SelectProvince */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Province_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Province_id), array('view', 'id'=>$data->Province_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Province_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Province_Name); ?>
	<br />


</div>