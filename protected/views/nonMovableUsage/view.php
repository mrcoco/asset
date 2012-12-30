<?php
$this->breadcrumbs = array(
    'Non Movable Usages' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List NonMovableUsage', 'url' => array('index')),
    array('label' => 'Create NonMovableUsage', 'url' => array('create')),
    array('label' => 'Update NonMovableUsage', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete NonMovableUsage', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage NonMovableUsage', 'url' => array('admin')),
);
?>

<h1>View NonMovableUsage #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
//        'set_out_non_movable_usage',
//        'estimate_non_movable_usage',
//        'actual_non_movable_usage',
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
            'name' => 'set_out_non_movable_usage',
            'value' => date_format(date_create($model->set_out_non_movable_usage), 'l, d F Y'),
        ),
        array(
            'name' => 'estimate_non_movable_usage',
            'value' => date_format(date_create($model->estimate_non_movable_usage), 'l, d F Y'),
        ),
        array(
            'name' => 'actual_non_movable_usage',
            'value' => date_format(date_create($model->actual_non_movable_usage), 'l, d F Y'),
        ),
        'volume_non_movable_usage',
    ),
));
?>
