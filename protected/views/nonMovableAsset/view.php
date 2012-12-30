<?php
$this->breadcrumbs = array(
    'Non Movable Assets' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List NonMovableAsset', 'url' => array('index')),
    array('label' => 'Create NonMovableAsset', 'url' => array('create')),
    array('label' => 'Update NonMovableAsset', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete NonMovableAsset', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage NonMovableAsset', 'url' => array('admin')),
);
?>

<h1>View NonMovableAsset #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
//        'price_book_non_movable',
//        'purchase_price_non_movable',
//        'life_non_movable',
//        'actual_end_non_movable',
        'code_item_non_movable',
        'name_item_non_movable',
        array(
            'name' => 'price_book_non_movable',
            'value' => number_format($model->price_book_non_movable, 2, ',', '.'),
        ),
        array(
            'name' => 'purchase_price_non_movable',
            'value' => number_format($model->purchase_price_non_movable, 2, ',', '.'),
        ),
        'volume_non_movable',
        array(
            'name' => 'unit_non_movable',
            'value' => $model->getUnitText(),
        ),
        array(
            'name' => 'life_non_movable',
            'value' => date_format(date_create($model->life_non_movable), 'l, d F Y'),
        ),
        array(
            'name' => 'actual_end_non_movable',
            'value' => date_format(date_create($model->actual_end_non_movable), 'l, d F Y'),
        ),
        'responsibility_non_movable',
    ),
));
?>

<br />
<?php
//$this->widget('zii.widgets.jui.CJuiTabs', array(
//    'tabs' => array(
////        'Use Non Movable Asset' => $this->renderPartial('//nonMovableUsage/_form', array('model' => $nonMovableUsage), true),
//        'Maintenance Non Movable Asset' => $this->renderPartial('//nonMovableMaintenance/_form', array('model' => $nonMovableMaintenance), true),
//    ),
//    // additional javascript options for the tabs plugin
//    'options' => array(
//        'collapsible' => true,
//    ),
//    'htmlOptions' => array('class' => 'shadowtabs'),
//));
?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dlg_EventCal',
    'options' => array(
        'title' => 'Movable Asset',
        'modal' => true,
        'autoOpen' => false,
        'hide' => 'slide',
        'show' => 'slide',
        'width' => 600,
        'height' => 350,
        'buttons' => array(
            array(
                'text' => 'Close',
                'click' => 'js:function() { $(this).dialog("close"); }',
            ),
    ))));
//$this->renderPartial('//movableUsage/_form', array('model' => $movableUsage));
$this->renderPartial('_ajaxContent', array('type' => $type, 'rmodel' => $rmodel));
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<?php
$this->widget('ext.calendar.EFullCalendar', array(
    'multipleEvent' => false,
    'data' => CHtml::normalizeUrl(array('/nonMovableUsage/Calendar?idasset=' . $model->id)),
    'options' => array(
//        'editable' => true,
//        'selectable' => true,
//        'selectHelper' => true,
//        'dropable' => true,
        'eventClick' => 'js:function(event, eventElement){
            var url = \'' . CHtml::normalizeUrl(array('/nonMovableAsset/viewAjax')) . '/id/\' + event.id + \'/type/\' + event.model;
            $(\'#dlg_EventCal\').load(url);
            $(\'#dlg_EventCal\').dialog("open");
                return false;}',
//        'dayClick' => 'js:function(event, eventElement){ alert("dayClick"); }',
//        'eventResize' => 'js:function(event, eventElement){ alert("eventResize"); }',
//        'eventDrop' => 'js:function(event, eventElement){ alert("eventDrop"); }',
//        'select' => 'js:function(start, end, allDay){ alert("select"); }',
    ),
    'htmlOptions' => array(
        'class' => 'cal_theme',
        'style' => 'width:100%;margin: 0 auto;'
    ),
));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'movable-usage-grid',
    'dataProvider' => $nonMovableUsage->search(),
    'columns' => array(
//        'id',
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
            'htmlOptions' => array(
                'valign' => 'top',
                'width' => '2px'
            )
        ),
        array(
            'name' => 'Nama User',
            'type' => 'raw',
            'value' => 'User::model()->findByPk($data->user_id)->username',
        ),
        'set_out_non_movable_usage',
        'estimate_non_movable_usage',
        'actual_non_movable_usage',
        'volume_non_movable_usage',
//        'non_movable_asset_id',
    ),
));
?>

<?php
//$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'movable-maintenance-grid',
//    'dataProvider' => $nonMovableMaintenance->search(),
//    'columns' => array(
////        'id',
//        array(
//            'header' => 'No',
//            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
//            'htmlOptions' => array(
//                'valign' => 'top',
//                'width' => '2px'
//            )
//        ),
//        array(
//            'name' => 'Nama User',
//            'type' => 'raw',
//            'value' => 'User::model()->findByPk($data->user_id)->username',
//        ),
//        'outset_non_movable',
//        'completed_non_movable',
//        'actual_non_movable',
//        'cost_non_movable',
////        'description',
//    ),
//));
?>