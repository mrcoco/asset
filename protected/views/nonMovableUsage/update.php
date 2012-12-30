<?php
$this->breadcrumbs=array(
	'Non Movable Usages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NonMovableUsage', 'url'=>array('index')),
	array('label'=>'Create NonMovableUsage', 'url'=>array('create')),
	array('label'=>'View NonMovableUsage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NonMovableUsage', 'url'=>array('admin')),
);
?>

<h1>Update NonMovableUsage <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>