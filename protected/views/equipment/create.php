<?php
$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Equipment', 'url'=>array('index')),
	array('label'=>'Manage Equipment', 'url'=>array('admin')),
);
?>

<h1>Create Equipment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>