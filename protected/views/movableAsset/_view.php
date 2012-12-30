<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_item_movable')); ?>:</b>
	<?php echo CHtml::encode($data->code_item_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_item_movable')); ?>:</b>
	<?php echo CHtml::encode($data->name_item_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_book_movable')); ?>:</b>
	<?php echo CHtml::encode($data->price_book_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_price_movable')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_price_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('volume_movable')); ?>:</b>
	<?php echo CHtml::encode($data->volume_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_movable')); ?>:</b>
	<?php echo CHtml::encode($data->unit_movable); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('life_movable')); ?>:</b>
	<?php echo CHtml::encode($data->life_movable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibility_movable')); ?>:</b>
	<?php echo CHtml::encode($data->responsibility_movable); ?>
	<br />

	*/ ?>

</div>