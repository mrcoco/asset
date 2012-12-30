<?php
$this->breadcrumbs=array(
	'Movable Assets',
);

$this->menu=array(
	array('label'=>'Create MovableAsset', 'url'=>array('create')),
	array('label'=>'Manage MovableAsset', 'url'=>array('admin')),
);
?>

<h1>Movable Assets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
