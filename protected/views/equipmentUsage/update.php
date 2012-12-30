<?php
$this->breadcrumbs=array(
	'Equipment Usages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EquipmentUsage', 'url'=>array('index')),
	array('label'=>'Create EquipmentUsage', 'url'=>array('create')),
	array('label'=>'View EquipmentUsage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EquipmentUsage', 'url'=>array('admin')),
);
?>

<h1>Update EquipmentUsage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>