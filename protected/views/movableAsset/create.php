<?php
$this->breadcrumbs=array(
	'Movable Assets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovableAsset', 'url'=>array('index')),
	array('label'=>'Manage MovableAsset', 'url'=>array('admin')),
);
?>

<h1>Create MovableAsset</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>