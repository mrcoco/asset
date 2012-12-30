<?php
$this->breadcrumbs=array(
	'Non Movable Usages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NonMovableUsage', 'url'=>array('index')),
	array('label'=>'Manage NonMovableUsage', 'url'=>array('admin')),
);
?>

<h1>Create NonMovableUsage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>