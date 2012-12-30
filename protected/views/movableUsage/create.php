<?php
$this->breadcrumbs=array(
	'Movable Usages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovableUsage', 'url'=>array('index')),
	array('label'=>'Manage MovableUsage', 'url'=>array('admin')),
);
?>

<h1>Create MovableUsage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>