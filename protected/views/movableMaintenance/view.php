<?php
$this->breadcrumbs = array(
    'Movable Maintenances' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List MovableMaintenance', 'url' => array('index')),
    array('label' => 'Create MovableMaintenance', 'url' => array('create')),
    array('label' => 'Update MovableMaintenance', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete MovableMaintenance', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage MovableMaintenance', 'url' => array('admin')),
);
?>

<h1>View MovableMaintenance #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
//        'movable_asset_id',
//        'user_id',
//        'outset_movable',
//        'completed_movable',
//        'actual_movable',
//        'cost_movable',
        array(
            'name' => 'movable_asset_id',
            'value' => $model->movableAsset->name_item_movable,
        ),
        array(
            'name' => 'user_id',
            'value' => $model->user->username,
        ),
        array(
            'name' => 'outset_movable',
            'value' => date_format(date_create($model->outset_movable), 'l, d F Y'),
        ),
        array(
            'name' => 'completed_movable',
            'value' => date_format(date_create($model->completed_movable), 'l d F Y'),
        ),
        array(
            'name' => 'actual_movable',
            'value' => date_format(date_create($model->actual_movable), 'l d F Y'),
        ),
        array(
            'name' => 'cost_movable',
            'value' => number_format($model->cost_movable, 2, ',', '.'),
        ),
        'description',
    ),
));
?>
