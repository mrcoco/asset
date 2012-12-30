<?php
$this->breadcrumbs=array(
	'Non Movable Maintenances'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NonMovableMaintenance', 'url'=>array('index')),
	array('label'=>'Create NonMovableMaintenance', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('non-movable-maintenance-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Non Movable Maintenances</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'non-movable-maintenance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'outset_non_movable',
		'completed_non_movable',
		'cost_non_movable',
		'actual_non_movable',
		'description',
		/*
		'non_movable_asset_id',
		'user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
