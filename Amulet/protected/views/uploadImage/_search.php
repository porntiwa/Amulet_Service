<?php
/* @var $this UploadImageController */
/* @var $model UploadImage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Image_id'); ?>
		<?php echo $form->textField($model,'Image_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Image_Choose'); ?>
		<?php echo $form->textField($model,'Image_Choose',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->