<?php
$this->breadcrumbs=array(
	'Non Movable Usages',
);

$this->menu=array(
	array('label'=>'Create NonMovableUsage', 'url'=>array('create')),
	array('label'=>'Manage NonMovableUsage', 'url'=>array('admin')),
);
?>

<h1>Non Movable Usages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
