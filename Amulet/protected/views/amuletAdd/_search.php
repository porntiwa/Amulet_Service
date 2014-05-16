<?php
/* @var $this AmuletAddController */
/* @var $model AmuletAdd */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'รูปหน้าปก'); ?>
		<?php echo $form->textField($model,'Image1',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ชื่อพระเครื่อง'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'หมวด'); ?>
		<?php echo $form->textField($model,'Division',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ปี'); ?>
		<?php echo $form->textField($model,'Year',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'สายพระ'); ?>
		<?php echo $form->textField($model,'Group',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'จังหวัด'); ?>
		<?php echo $form->textField($model,'Province',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ชนิดของพระ'); ?>
		<?php echo $form->textField($model,'Type',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'เนื้อพระ'); ?>
		<?php echo $form->textField($model,'Kind',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'วิธีสังเกต'); ?>
		<?php echo $form->textField($model,'Observe',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'จุดสังเกต1'); ?>
		<?php echo $form->textField($model,'Landmark1',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'จุดสังเกต2'); ?>
		<?php echo $form->textField($model,'Landmark2',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->