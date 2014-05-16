<?php
/* @var $this UploadImageController */
/* @var $data UploadImage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Image_id), array('view', 'id'=>$data->Image_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Image_Choose')); ?>:</b>
	<?php $ImgFile=$data->Image_Choose; ?>
	<a href = "/Amulet/files/images/<?=$ImgFile;?>" a target="_blank"><?=$ImgFile;?></a><br>
	<br />



</div>