<?php
$this->breadcrumbs=array(
	'Equipments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Equipment', 'url'=>array('index')),
	array('label'=>'Create Equipment', 'url'=>array('create')),
	array('label'=>'View Equipment', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Equipment', 'url'=>array('admin')),
);
?>

<h1>Update Equipment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>