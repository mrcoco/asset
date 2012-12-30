<?php
$this->breadcrumbs=array(
	'Movable Maintenances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovableMaintenance', 'url'=>array('index')),
	array('label'=>'Create MovableMaintenance', 'url'=>array('create')),
	array('label'=>'View MovableMaintenance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovableMaintenance', 'url'=>array('admin')),
);
?>

<h1>Update MovableMaintenance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>