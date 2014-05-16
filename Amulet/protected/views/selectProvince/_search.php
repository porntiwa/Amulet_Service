<?php
/* @var $this SelectProvinceController */
/* @var $model SelectProvince */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Province_id'); ?>
		<?php echo $form->textField($model,'Province_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Province_Name'); ?>
		<?php echo $form->textField($model,'Province_Name',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->