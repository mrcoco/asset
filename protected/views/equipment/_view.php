<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_item')); ?>:</b>
	<?php echo CHtml::encode($data->code_item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_item')); ?>:</b>
	<?php echo CHtml::encode($data->name_item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_book')); ?>:</b>
	<?php echo CHtml::encode($data->price_book); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('purchase_price')); ?>:</b>
	<?php echo CHtml::encode($data->purchase_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_of_supplies')); ?>:</b>
	<?php echo CHtml::encode($data->amount_of_supplies); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_equipment')); ?>:</b>
	<?php echo CHtml::encode($data->unit_equipment); ?>
	<br />


</div>