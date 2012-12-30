<?php
$this->breadcrumbs=array(
	'Non Movable Assets',
);

$this->menu=array(
	array('label'=>'Create NonMovableAsset', 'url'=>array('create')),
	array('label'=>'Manage NonMovableAsset', 'url'=>array('admin')),
);
?>

<h1>Non Movable Assets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
