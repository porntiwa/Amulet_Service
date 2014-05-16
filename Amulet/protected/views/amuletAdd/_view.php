<?php
/* @var $this AmuletAddController */
/* @var $data AmuletAdd */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('รูปหน้าปก')); ?>:</b>
	<?php $ImgFile=$data->Image1; ?>
	<a href = "/Amulet/files/images/<?=$ImgFile;?>" a target="_blank"><?=$ImgFile;?></a><br>
	<br />
	
	
	

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('ชื่อพระ')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('หมวด')); ?>:</b>
	<?php echo CHtml::encode($data->Division); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ปี')); ?>:</b>
	<?php echo CHtml::encode($data->Year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('สายพระ')); ?>:</b>
	<?php echo CHtml::encode($data->Group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('จังหวัด')); ?>:</b>
	<?php echo CHtml::encode($data->Province); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('ชนิดของพระ')); ?>:</b>
	<?php echo CHtml::encode($data->Type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('เนื้อพระ')); ?>:</b>
	<?php echo CHtml::encode($data->Kind); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('วิธีสังเกต')); ?>:</b>
	<?php echo CHtml::encode($data->Observe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('จุดสังเกต ')); ?>:</b>
	<?php $ImgFile=$data->Landmark1; ?>
	<a href = "/Amulet/files/images/<?=$ImgFile;?>" a target="_blank"><?=$ImgFile;?></a><br>
	<br />
	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('จุดสังเกต')); ?>:</b>
	<?php $ImgFile=$data->Landmark2; ?>
	<a href = "/Amulet/files/images/<?=$ImgFile;?>" a target="_blank"><?=$ImgFile;?></a><br>
	<br />

	 
</div>