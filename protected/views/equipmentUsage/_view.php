<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsibility_usage')); ?>:</b>
	<?php echo CHtml::encode($data->responsibility_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount_of_usage')); ?>:</b>
	<?php echo CHtml::encode($data->amount_of_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_usage')); ?>:</b>
	<?php echo CHtml::encode($data->date_usage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('equipment_id')); ?>:</b>
	<?php echo CHtml::encode($data->equipment_id); ?>
	<br />


</div>