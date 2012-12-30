<?php
$this->breadcrumbs=array(
	'Non Movable Maintenances',
);

$this->menu=array(
	array('label'=>'Create NonMovableMaintenance', 'url'=>array('create')),
	array('label'=>'Manage NonMovableMaintenance', 'url'=>array('admin')),
);
?>

<h1>Non Movable Maintenances</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
