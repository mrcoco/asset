<?php
$this->breadcrumbs=array(
	'Non Movable Maintenances'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NonMovableMaintenance', 'url'=>array('index')),
	array('label'=>'Create NonMovableMaintenance', 'url'=>array('create')),
	array('label'=>'View NonMovableMaintenance', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NonMovableMaintenance', 'url'=>array('admin')),
);
?>

<h1>Update NonMovableMaintenance <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>