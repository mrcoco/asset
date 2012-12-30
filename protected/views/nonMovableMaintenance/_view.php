<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('outset_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->outset_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('completed_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->completed_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->cost_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->actual_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('non_movable_asset_id')); ?>:</b>
	<?php echo CHtml::encode($data->non_movable_asset_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	*/ ?>

</div>