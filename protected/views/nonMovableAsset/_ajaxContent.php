<?php if ($type == 'usage') : ?>

    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $rmodel,
        'attributes' => array(
//        'id',
//        'set_out_non_movable_usage',
//        'estimate_non_movable_usage',
//        'actual_non_movable_usage',
//        'non_movable_asset_id',
//        'user_id',
            array(
                'name' => 'movable_asset_id',
                'value' => $rmodel->nonMovableAsset->name_item_non_movable,
            ),
            array(
                'name' => 'user_id',
                'value' => $rmodel->user->username,
            ),
            array(
                'name' => 'set_out_non_movable_usage',
                'value' => date_format(date_create($rmodel->set_out_non_movable_usage), 'l, d F Y'),
            ),
            array(
                'name' => 'estimate_non_movable_usage',
                'value' => date_format(date_create($rmodel->estimate_non_movable_usage), 'l, d F Y'),
            ),
            array(
                'name' => 'actual_non_movable_usage',
                'value' => date_format(date_create($rmodel->actual_non_movable_usage), 'l, d F Y'),
            ),
            'volume_non_movable_usage',
        ),
    ));
    ?>

<?php elseif ($type == 'maintenance') : ?>
    <?php
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $rmodel,
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
                'value' => $rmodel->nonMovableAsset->name_item_non_movable,
            ),
            array(
                'name' => 'user_id',
                'value' => $rmodel->user->username,
            ),
            array(
                'name' => 'outset_non_movable',
                'value' => date_format(date_create($rmodel->outset_non_movable), 'l, d F Y'),
            ),
            array(
                'name' => 'completed_non_movable',
                'value' => date_format(date_create($rmodel->completed_non_movable), 'l, d F Y'),
            ),
            array(
                'name' => 'actual_non_movable',
                'value' => date_format(date_create($rmodel->actual_non_movable), 'l, d F Y'),
            ),
            array(
                'name' => 'cost_non_movable',
                'value' => number_format($rmodel->cost_non_movable, 2, ',', '.'),
            ),
            'description',
        ),
    ));
    ?>
<?php else : ?>
    Data not found!!!
<?php endif; ?>
