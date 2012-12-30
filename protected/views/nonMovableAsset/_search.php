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
		<?php echo $form->label($model,'code_item_non_movable'); ?>
		<?php echo $form->textField($model,'code_item_non_movable',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_item_non_movable'); ?>
		<?php echo $form->textField($model,'name_item_non_movable',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_book_non_movable'); ?>
		<?php echo $form->textField($model,'price_book_non_movable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'purchase_price_non_movable'); ?>
		<?php echo $form->textField($model,'purchase_price_non_movable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'volume_non_movable'); ?>
		<?php echo $form->textField($model,'volume_non_movable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_non_movable'); ?>
		<?php echo $form->textField($model,'unit_non_movable',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'life_non_movable'); ?>
		<?php echo $form->textField($model,'life_non_movable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsibility_non_movable'); ?>
		<?php echo $form->textField($model,'responsibility_non_movable',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actual_end_non_movable'); ?>
		<?php echo $form->textField($model,'actual_end_non_movable'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->