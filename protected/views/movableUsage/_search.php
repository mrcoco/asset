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
		<?php echo $form->label($model,'from_usage'); ?>
		<?php echo $form->textField($model,'from_usage',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destination_usage'); ?>
		<?php echo $form->textField($model,'destination_usage',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'set_out_usage'); ?>
		<?php echo $form->textField($model,'set_out_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estimates_until_usage'); ?>
		<?php echo $form->textField($model,'estimates_until_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actual_until_usage'); ?>
		<?php echo $form->textField($model,'actual_until_usage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'movable_asset_id'); ?>
		<?php echo $form->textField($model,'movable_asset_id'); ?>
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