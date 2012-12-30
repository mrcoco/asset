<?php
$this->breadcrumbs=array(
	'Non Movable Assets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NonMovableAsset', 'url'=>array('index')),
	array('label'=>'Manage NonMovableAsset', 'url'=>array('admin')),
);
?>

<h1>Create NonMovableAsset</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>