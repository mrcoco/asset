<?php if ($type == 'usage') : ?>

    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $rmodel,
        'attributes' => array(
//            'id',
//            'from_usage',
//            'destination_usage',
//            'set_out_usage',
//            'estimates_until_usage',
//            'actual_until_usage',
//            'movable_asset_id',
//            'user_id',
            array(
                'name' => 'movable_asset_id',
                'value' => $rmodel->movableAsset->name_item_movable,
            ),
            array(
                'name' => 'user_id',
                'value' => $rmodel->user->username,
            ),
            'from_usage',
            'destination_usage',
            array(
                'name' => 'set_out_usage',
                'value' => date_format(date_create($rmodel->set_out_usage), 'l, d F Y'),
            ),
            array(
                'name' => 'estimates_until_usage',
                'value' => date_format(date_create($rmodel->estimates_until_usage), 'l, d F Y'),
            ),
            array(
                'name' => 'actual_until_usage',
                'value' => date_format(date_create($rmodel->actual_until_usage), 'l, d F Y'),
            ),
        ),
    ));
    ?>

<?php elseif ($type == 'maintenance') : ?>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $rmodel,
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
                'value' => $rmodel->movableAsset->name_item_movable,
            ),
            array(
                'name' => 'user_id',
                'value' => $rmodel->user->username,
            ),
            array(
                'name' => 'outset_movable',
                'value' => date_format(date_create($rmodel->outset_movable), 'l, d F Y'),
            ),
            array(
                'name' => 'completed_movable',
                'value' => date_format(date_create($rmodel->completed_movable), 'l, d F Y'),
            ),
            array(
                'name' => 'actual_movable',
                'value' => date_format(date_create($rmodel->actual_movable), 'l, d F Y'),
            ),
            array(
                'name' => 'cost_movable',
                'value' => number_format($rmodel->cost_movable, 2, ',', '.'),
            ),
            'description',
        ),
    ));
    ?>
<?php else : ?>
    Data not found!!!
<?php endif; ?>
