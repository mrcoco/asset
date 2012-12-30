<?php
$this->breadcrumbs = array(
    'Non Movable Maintenances' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List NonMovableMaintenance', 'url' => array('index')),
    array('label' => 'Create NonMovableMaintenance', 'url' => array('create')),
    array('label' => 'Update NonMovableMaintenance', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete NonMovableMaintenance', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage NonMovableMaintenance', 'url' => array('admin')),
);
?>

<h1>View NonMovableMaintenance #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
//        'outset_non_movable',
//        'completed_non_movable',
//        'cost_non_movable',
//        'actual_non_movable',
//        'non_movable_asset_id',
//        'user_id',
        array(
            'name' => 'movable_asset_id',
            'value' => $model->nonMovableAsset->name_item_non_movable,
        ),
        array(
            'name' => 'user_id',
            'value' => $model->user->username,
        ),
        array(
            'name' => 'outset_non_movable',
            'value' => date_format(date_create($model->outset_non_movable), 'l, d F Y'),
        ),
        array(
            'name' => 'completed_non_movable',
            'value' => date_format(date_create($model->completed_non_movable), 'l, d F Y'),
        ),
        array(
            'name' => 'actual_non_movable',
            'value' => date_format(date_create($model->actual_non_movable), 'l, d F Y'),
        ),
        array(
            'name' => 'cost_non_movable',
            'value' => number_format($model->cost_non_movable, 2, ',', '.'),
        ),
        'description',
    ),
));
?>
