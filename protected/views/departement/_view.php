<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code_dept')); ?>:</b>
	<?php echo CHtml::encode($data->code_dept); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_dept')); ?>:</b>
	<?php echo CHtml::encode($data->name_dept); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_head_dept')); ?>:</b>
	<?php echo CHtml::encode($data->id_head_dept); ?>
	<br />


</div>