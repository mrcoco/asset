<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('from_usage')); ?>:</b>
	<?php echo CHtml::encode($data->from_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destination_usage')); ?>:</b>
	<?php echo CHtml::encode($data->destination_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('set_out_usage')); ?>:</b>
	<?php echo CHtml::encode($data->set_out_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estimates_until_usage')); ?>:</b>
	<?php echo CHtml::encode($data->estimates_until_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_until_usage')); ?>:</b>
	<?php echo CHtml::encode($data->actual_until_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('movable_asset_id')); ?>:</b>
	<?php echo CHtml::encode($data->movable_asset_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>