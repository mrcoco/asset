<?php
$this->breadcrumbs=array(
	'Non Movable Assets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NonMovableAsset', 'url'=>array('index')),
	array('label'=>'Create NonMovableAsset', 'url'=>array('create')),
	array('label'=>'View NonMovableAsset', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NonMovableAsset', 'url'=>array('admin')),
);
?>

<h1>Update NonMovableAsset <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>