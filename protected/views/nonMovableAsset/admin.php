<?php
$this->breadcrumbs=array(
	'Non Movable Assets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List NonMovableAsset', 'url'=>array('index')),
	array('label'=>'Create NonMovableAsset', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('non-movable-asset-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Non Movable Assets</h1>

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
	'id'=>'non-movable-asset-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'code_item_non_movable',
		'name_item_non_movable',
		'price_book_non_movable',
		'purchase_price_non_movable',
		'volume_non_movable',
		/*
		'unit_non_movable',
		'life_non_movable',
		'responsibility_non_movable',
		'actual_end_non_movable',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
