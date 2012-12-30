<?php
$this->breadcrumbs=array(
	'Equipment Usages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EquipmentUsage', 'url'=>array('index')),
	array('label'=>'Manage EquipmentUsage', 'url'=>array('admin')),
);
?>

<h1>Create EquipmentUsage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>