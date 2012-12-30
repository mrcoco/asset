<?php
$this->breadcrumbs=array(
	'Movable Usages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovableUsage', 'url'=>array('index')),
	array('label'=>'Create MovableUsage', 'url'=>array('create')),
	array('label'=>'View MovableUsage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovableUsage', 'url'=>array('admin')),
);
?>

<h1>Update MovableUsage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>