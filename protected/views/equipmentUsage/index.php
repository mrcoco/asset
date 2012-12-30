<?php
$this->breadcrumbs=array(
	'Equipment Usages',
);

$this->menu=array(
	array('label'=>'Create EquipmentUsage', 'url'=>array('create')),
	array('label'=>'Manage EquipmentUsage', 'url'=>array('admin')),
);
?>

<h1>Equipment Usages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
