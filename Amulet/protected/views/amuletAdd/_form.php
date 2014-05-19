<?php //$id=Yii::app()->session['id']; 
/* @var $this AmuletAddController */
/* @var $model AmuletAdd */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'amulet-add-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('value'=>$id,'size'=>5)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div> -->
	
	<div class="row">
		<?php echo $form->labelEx($model,'เลือกรูปภาพ'); ?>
		<?php echo $form->fileField($model,'Image1'); ?>
		<?php echo $form->error($model,'Image1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ชื่อพระ'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>40,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'หมวด'); ?>
		<?php echo $form->textField($model,'Division',array('size'=>40,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'Division'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ปี'); ?>
		<?php echo $form->textField($model,'Year',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'Year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'สายพระ'); ?>
		<?php echo $form->dropDownList($model,'Group',
										array('กลาง'=>'กลาง',
											  'ใต้'=>'ใต้',
											  'เหนือ'=>'เหนือ',
											  'อีสาน'=>'อีสาน',
										)); 
		?>
		<?php echo $form->error($model,'Group'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'จังหวัด'); ?>
		<?php echo $form->dropDownList($model,'Province',
										CHtml::listData(SelectProvince::model()->findAll(),'Province_id','Province_Name'),
										array('กรุงเทพมหานคร'=>'กรุงเทพมหานคร')); ?>
		<?php echo $form->error($model,'provider'); ?>
	</div>
-->
	<div class="row">
		<?php echo $form->labelEx($model,'จังหวัด'); ?>
		<?php echo $form->dropDownList($model,'Province',
										
										array('กรุงเทพมหานคร'=>'กรุงเทพมหานคร',
											  'กระบี่'=>'กระบี่',
											  'กาญจนบุรี'=>'กาญจนบุรี',
											  'กาฬสินธุ์'=>'กาฬสินธุ์',
											  'กำแพงเพชร'=>'กำแพงเพชร',
											  'ขอนแก่น'=>'ขอนแก่น',
											  'จันทบุรี'=>'จันทบุรี',
											  'ฉะเชิงเทรา'=>'ฉะเชิงเทรา',
											  'ชลบุรี'=>'ชลบุรี',
											  'ชัยนาท'=>'ชัยนาท',
											  'ชัยภูมิ'=>'ชัยภูมิ',
											  'ชุมพร'=>'ชุมพร',
											  'เชียงราย'=>'เชียงราย',
											  'เชียงใหม่'=>'เชียงใหม่',
											  'ตรัง'=>'ตรัง',
											  'ตราด'=>'ตราด',
											  'ตาก'=>'ตาก',
											  'นครนายก'=>'นครนายก',
											  'นครปฐม'=>'นครปฐม',
											  'นครพนม'=>'นครพนม',
											  'นครราชสีมา'=>'นครราชสีมา',
											  'นครศรีธรรมราช'=>'นครศรีธรรมราช',
											  'นครสวรรค์'=>'นครสวรรค์',
											  'นนทบุรี'=>'นนทบุรี',
											  'นราธิวาส'=>'นราธิวาส',
											  'น่าน'=>'น่าน',
											  'บึงกาฬ'=>'บึงกาฬ',
											  'บุรีรัมย์'=>'บุรีรัมย์',
											  'ปทุมธานี'=>'ปทุมธานี',
											  'ประจวบคีรีขันธ์'=>'ประจวบคีรีขันธ์',
											  'ปราจีนบุรี'=>'ปราจีนบุรี',
											  'ปัตตานี'=>'ปัตตานี',
											  'พระนครศรีอยุธยา'=>'พระนครศรีอยุธยา',
											  'พังงา'=>'พังงา',
											  'พัทลุง'=>'พัทลุง',
											  'พิจิตร'=>'พิจิตร',
											  'พิษณุโลก'=>'พิษณุโลก',
											  'เพชรบุรี'=>'เพชรบุรี',
											  'เพชรบูรณ์'=>'เพชรบูรณ์',
											  'แพร่'=>'แพร่',
											  'พะเยา'=>'พะเยา',
											  'ภูเก็ต'=>'ภูเก็ต',
											  'มหาสารคาม'=>'มหาสารคาม',
											  'มุกดาหาร'=>'มุกดาหาร',
											  'แม่ฮ่องสอน'=>'แม่ฮ่องสอน',
											  'ยะลา'=>'ยะลา',
											  'ยโสธร'=>'ยโสธร',
											  'ร้อยเอ็ด'=>'ร้อยเอ็ด',
											  'ระนอง'=>'ระนอง',
											  'ระยอง'=>'ระยอง',
											  'ราชบุรี'=>'ราชบุรี',
											  'ลพบุรี'=>'ลพบุรี',
											  'ลำปาง'=>'ลำปาง',
											  'ลำพูน'=>'ลำพูน',
											  'เลย'=>'เลย',
											  'ศรีสะเกษ'=>'ศรีสะเกษ',
											  'สกลนคร'=>'สกลนคร',
											  'สงขลา'=>'สงขลา',
											  'สตูล'=>'สตูล',
											  'สมุทรปราการ'=>'สมุทรปราการ',
											  'สมุทรสงคราม'=>'สมุทรสงคราม',
											  'สมุทรสาคร'=>'สมุทรสาคร',
											  'สระแก้ว'=>'สระแก้ว',
											  'สระบุรี'=>'สระบุรี',
											  'สิงห์บุรี'=>'สิงห์บุรี',
											  'สุโขทัย'=>'สุโขทัย',
											  'สุพรรณบุรี'=>'สุพรรณบุรี',
											  'สุราษฎร์ธานี'=>'สุราษฎร์ธานี',
											  'สุรินทร์'=>'สุรินทร์',
											  'หนองคาย'=>'หนองคาย',
											  'หนองบัวลำภู'=>'หนองบัวลำภู',
											  'อ่างทอง'=>'อ่างทอง',
											  'อุดรธานี'=>'อุดรธานี',
											  'อุทัยธานี'=>'อุทัยธานี',
											  'อุตรดิตถ์'=>'อุตรดิตถ์',
											  'อุบลราชธานี'=>'อุบลราชธานี',
											  'อำนาจเจริญ'=>'อำนาจเจริญ',							  
											  )); ?>
		<?php echo $form->error($model,'provider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ชนิดพระ'); ?>
		<?php echo $form->dropDownList($model,'Type',
										array('เหรียญ'=>'เหรียญ',
											  'ผง'=>'ผง',
										)); 
		?>
		<?php echo $form->error($model,'Type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'เนื้อพระ'); ?>
		<?php echo $form->dropDownList($model,'Kind',
										array('เนื้อนวโลหะ'=>'เนื้อนวโลหะ ',
											  'เนื้อนวโลหะกลับดำ'=>'เนื้อนวโลหะกลับดำ ',
											  'เนื้อสัตตะโลหะ'=>'เนื้อสัตตะโลหะ',
											  'เนื้อเบญจโลหะ'=>'เนื้อเบญจโลหะ ',
											  'เนื้อทองเหลือง'=>'เนื้อทองเหลือง',
											  'เนื้อเมฆพัด'=>'เนื้อเมฆพัด ',
											  'เนื้อเมษสิทธิ์'=>'เนื้อเมษสิทธิ์ ',
											  'เนื้อสัมฤทธิ์'=>'เนื้อสัมฤทธิ์',
											  'เนื้อขันลงหิน'=>'เนื้อขันลงหิน',
											  'เนื้อทองแดง'=>'เนื้อทองแดง',
											  'เนื้อทองแดงเถื่อน'=>'เนื้อทองแดงเถื่อน ',
											  'เนื้ออัลปาก้า'=>'เนื้ออัลปาก้า ',
											  'เนื้อทองคำ'=>'เนื้อทองคำ ',
											  'เนื้อโลหะ'=>'เนื้อโลหะ ',
											  'เนื้อชิน'=>'เนื้อชิน ',
										)); 
		?>
		<?php echo $form->error($model,'Kind'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'วิธีสังเกต'); ?>
		<?php echo $form->textarea($model,'Observe',array('row'=>50,'cols'=>42)); ?>
		<?php echo $form->error($model,'Observe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'จุดสังเกต / เลือกรูปภาพ '); ?>
		<?php echo $form->fileField($model,'Landmark1'); ?>
		<?php echo $form->error($model,'Landmark1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'จุดสังเกต / เลือกรูปภาพ'); ?>
		<?php echo $form->fileField($model,'Landmark2'); ?>
		<?php echo $form->error($model,'Landmark2'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->