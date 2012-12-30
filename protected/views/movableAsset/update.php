<?php
$this->breadcrumbs=array(
	'Movable Assets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovableAsset', 'url'=>array('index')),
	array('label'=>'Create MovableAsset', 'url'=>array('create')),
	array('label'=>'View MovableAsset', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovableAsset', 'url'=>array('admin')),
);
?>

<h1>Update MovableAsset <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>