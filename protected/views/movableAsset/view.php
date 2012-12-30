<?php
$this->breadcrumbs = array(
    'Movable Assets' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List MovableAsset', 'url' => array('index')),
    array('label' => 'Create MovableAsset', 'url' => array('create')),
    array('label' => 'Update MovableAsset', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete MovableAsset', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage MovableAsset', 'url' => array('admin')),
);
?>

<h1>View MovableAsset #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//        'id',
//        'price_book_movable',
//        'purchase_price_movable',
//        'unit_movable',
//        'life_movable',   
        'code_item_movable',
        'name_item_movable',
        array(
            'name' => 'price_book_movable',
            'value' => number_format($model->price_book_movable, 2, ',', '.'),
        ),
        array(
            'name' => 'purchase_price_movable',
            'value' => number_format($model->purchase_price_movable, 2, ',', '.'),
        ),
        'volume_movable',
        array(
            'name' => 'unit_movable',
            'value' => $model->getUnitText(),
            'type' => 'raw',
        ),
        array(
            'name' => 'life_movable',
            'value' => date_format(date_create($model->life_movable), 'l, d F Y'),
        ),
        'responsibility_movable',
    ),
));
?>
<br />
<?php // echo $this->renderPartial('//movableUsage/_form', array('model' => $movableUsage)); ?>
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
//$this->widget('zii.widgets.jui.CJuiTabs', array(
//    'tabs' => array(
//        'Use Movable Asset' => $this->renderPartial('//movableUsage/_form', array('model' => $movableUsage), true),
////        'Maintenance Movable Asset' => $this->renderPartial('//movableMaintenance/_form', array('model' => $movableMaintenance), true),
//    ),
//    // additional javascript options for the tabs plugin
//    'options' => array(
//        'collapsible' => true,
//    ),
//    'htmlOptions' => array('class' => 'shadowtabs'),
//));
$this->renderPartial('//movableUsage/_form', array('model' => $movableUsage));
?>

<?php
$this->widget('ext.calendar.EFullCalendar', array(
    'multipleEvent' => false,
    'data' => CHtml::normalizeUrl(array('/movableUsage/Calendar?idasset=' . $model->id)),
    'options' => array(
//        'editable' => true,
//        'selectable' => true,
//        'selectHelper' => true,
//        'dropable' => true,
        'eventClick' => 'js:function(event, eventElement){
            var url = \'' . CHtml::normalizeUrl(array('/movableAsset/viewAjax')) . '/id/\' + event.id + \'/type/\' + event.model;
            $(\'#dlg_EventCal\').load(url);
            $(\'#dlg_EventCal\').dialog("open");
                return false;}',
//        'dayClick' => 'js:function(event, eventElement){ alert("dayClick"); }',
//        'eventResize' => 'js:function(event, eventElement){ alert("eventResize"); }',
//        'eventDrop' => 'js:function(event, eventElement){ alert("eventDrop"); }',
//        'select' => 'js:function(start, end, allDay){ alert("select"); }',
    ),
));
?>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'movable-usage-grid',
    'dataProvider' => $movableUsage->search(),
    'columns' => array(
        //'id_movable_usage',
        //'id_movable',
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
        'from_usage',
        'destination_usage',
        'set_out_usage',
        'estimates_until_usage',
        'actual_until_usage',
    ),
));
?>


<?php
//$this->widget('zii.widgets.grid.CGridView', array(
//    'id' => 'movable-maintenance-grid',
//    'dataProvider' => $movableMaintenance->search(),
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
//        'outset_movable',
//        'completed_movable',
//        'cost_movable',
//        'actual_movable',
//        'description',
//    ),
//));
?>