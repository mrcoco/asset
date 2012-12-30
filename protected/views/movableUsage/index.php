<?php
$this->breadcrumbs=array(
	'Movable Usages',
);

$this->menu=array(
	array('label'=>'Create MovableUsage', 'url'=>array('create')),
	array('label'=>'Manage MovableUsage', 'url'=>array('admin')),
);
?>

<h1>Movable Usages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
