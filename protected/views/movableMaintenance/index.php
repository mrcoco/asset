<?php
$this->breadcrumbs=array(
	'Movable Maintenances',
);

$this->menu=array(
	array('label'=>'Create MovableMaintenance', 'url'=>array('create')),
	array('label'=>'Manage MovableMaintenance', 'url'=>array('admin')),
);
?>

<h1>Movable Maintenances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
