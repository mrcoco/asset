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
		<?php echo $form->label($model,'volume_non_movable_usage'); ?>
		<?php echo $form->textField($model,'volume_non_movable_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'set_out_non_movable_usage'); ?>
		<?php echo $form->textField($model,'set_out_non_movable_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estimate_non_movable_usage'); ?>
		<?php echo $form->textField($model,'estimate_non_movable_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actual_non_movable_usage'); ?>
		<?php echo $form->textField($model,'actual_non_movable_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'non_movable_asset_id'); ?>
		<?php echo $form->textField($model,'non_movable_asset_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->