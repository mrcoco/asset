<?php
$this->breadcrumbs = array(
    'Equipments' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Equipment', 'url' => array('index')),
    array('label' => 'Create Equipment', 'url' => array('create')),
    array('label' => 'Update Equipment', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Equipment', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Equipment', 'url' => array('admin')),
);
?>

<h1>View Equipment #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
        'code_item',
        'name_item',
        'price_book',
        'purchase_price',
        'amount_of_supplies',
//        'unit_equipment',
        array(
            'name' => 'unit_equipment',
            'value' => $model->getUnitText(),
            'type' => 'raw',
        ),
    ),
));
?>

<?php echo $this->renderPartial('//equipmentUsage/_form', array('model' => $equipmentUsage)); ?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'equipment-usage-grid',
    'dataProvider' => $equipmentUsage->search(),
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
            'htmlOptions' => array(
                'valign' => 'top',
                'width' => '2px'
            )
        ),
        'responsibility_usage',
        'amount_of_usage',
        'type',
        'date_usage',
    ),
));
?>
