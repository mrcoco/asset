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
		<?php echo $form->label($model,'code_item'); ?>
		<?php echo $form->textField($model,'code_item',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_item'); ?>
		<?php echo $form->textField($model,'name_item',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_book'); ?>
		<?php echo $form->textField($model,'price_book'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchase_price'); ?>
		<?php echo $form->textField($model,'purchase_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount_of_supplies'); ?>
		<?php echo $form->textField($model,'amount_of_supplies'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_equipment'); ?>
		<?php echo $form->textField($model,'unit_equipment',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->