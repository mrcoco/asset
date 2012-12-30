<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume_non_movable_usage')); ?>:</b>
	<?php echo CHtml::encode($data->volume_non_movable_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('set_out_non_movable_usage')); ?>:</b>
	<?php echo CHtml::encode($data->set_out_non_movable_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estimate_non_movable_usage')); ?>:</b>
	<?php echo CHtml::encode($data->estimate_non_movable_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_non_movable_usage')); ?>:</b>
	<?php echo CHtml::encode($data->actual_non_movable_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('non_movable_asset_id')); ?>:</b>
	<?php echo CHtml::encode($data->non_movable_asset_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>