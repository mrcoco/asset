<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_item_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->code_item_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_item_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->name_item_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_book_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->price_book_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_price_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_price_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->volume_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->unit_non_movable); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('life_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->life_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibility_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->responsibility_non_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actual_end_non_movable')); ?>:</b>
	<?php echo CHtml::encode($data->actual_end_non_movable); ?>
	<br />

	*/ ?>

</div>