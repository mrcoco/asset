<?php
$this->breadcrumbs=array(
	'Movable Maintenances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovableMaintenance', 'url'=>array('index')),
	array('label'=>'Manage MovableMaintenance', 'url'=>array('admin')),
);
?>

<h1>Create MovableMaintenance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>