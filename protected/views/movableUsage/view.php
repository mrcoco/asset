<?php
$this->breadcrumbs = array(
    'Movable Usages' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List MovableUsage', 'url' => array('index')),
    array('label' => 'Create MovableUsage', 'url' => array('create')),
    array('label' => 'Update MovableUsage', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete MovableUsage', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage MovableUsage', 'url' => array('admin')),
);
?>

<h1>View MovableUsage #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
//        'set_out_usage',
//        'estimates_until_usage',
//        'actual_until_usage',
//        'movable_asset_id',
//        'user_id',
        array(
            'name' => 'movable_asset_id',
            'value' => $model->movableAsset->name_item_movable,
        ),
        array(
            'name' => 'user_id',
            'value' => $model->user->username,
        ),
        'from_usage',
        'destination_usage',
        array(
            'name' => 'set_out_usage',
            'value' => date_format(date_create($model->set_out_usage), 'l, d F Y'),
        ),
        array(
            'name' => 'estimates_until_usage',
            'value' => date_format(date_create($model->estimates_until_usage), 'l, d F Y'),
        ),
        array(
            'name' => 'actual_until_usage',
            'value' => date_format(date_create($model->actual_until_usage), 'l, d F Y'),
        ),
    ),
));
?>
