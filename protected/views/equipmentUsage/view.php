<?php
$this->breadcrumbs=array(
	'Equipment Usages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EquipmentUsage', 'url'=>array('index')),
	array('label'=>'Create EquipmentUsage', 'url'=>array('create')),
	array('label'=>'Update EquipmentUsage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EquipmentUsage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EquipmentUsage', 'url'=>array('admin')),
);
?>

<h1>View EquipmentUsage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'responsibility_usage',
		'amount_of_usage',
		'type',
		'date_usage',
		'equipment_id',
	),
)); ?>
