<?php
$this->breadcrumbs=array(
	'Non Movable Maintenances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NonMovableMaintenance', 'url'=>array('index')),
	array('label'=>'Manage NonMovableMaintenance', 'url'=>array('admin')),
);
?>

<h1>Create NonMovableMaintenance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>