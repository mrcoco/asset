<?php
$this->breadcrumbs=array(
	'Movable Assets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MovableAsset', 'url'=>array('index')),
	array('label'=>'Create MovableAsset', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('movable-asset-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Movable Assets</h1>

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
	'id'=>'movable-asset-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'code_item_movable',
		'name_item_movable',
		'price_book_movable',
		'purchase_price_movable',
		'volume_movable',
		'unit_movable',
		'life_movable',
		'responsibility_movable',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
