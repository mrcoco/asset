<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'non-movable-maintenance-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'non_movable_asset_id'); ?>
        <?php echo $form->dropDownList($model, 'non_movable_asset_id', CHtml::listData(MovableAsset::model()->findAll(), 'id', 'name_item_movable')); ?>
        <?php echo $form->error($model, 'non_movable_asset_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'user_id'); ?>
        <?php // echo $form->textField($model, 'user_id', array('size' => 16, 'maxlength' => 16)); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => new User(),
            'attribute' => 'id',
            'sourceUrl' => array('cekUser'),
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
		$(\'#user_id\').val(-1);
		}',
                'select' => 'js:function(event, ui){
		document.getElementById(\'NonMovableMaintenance_user_id\').value = ui.item.id; 
		}',
            ),
            'htmlOptions' => array(
                'style' => 'height:25px;width:200px;padding:0px 5px;',
//                'class' => 'mf'
            ),
            'htmlOptions' => array(
                'style' => 'width:50%;',
            ),
        ));

        echo $form->hiddenField($model, 'user_id');
        ?>
        <?php echo $form->error($model, 'user_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'outset_non_movable'); ?>
        <?php // echo $form->textField($model, 'outset_non_movable'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'outset_non_movable',
            'value' => $model->outset_non_movable,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->outset_non_movable,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'outset_non_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'completed_non_movable'); ?>
        <?php // echo $form->textField($model, 'completed_non_movable'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'completed_non_movable',
            'value' => $model->completed_non_movable,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->completed_non_movable,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'completed_non_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'actual_non_movable'); ?>
        <?php // echo $form->textField($model,'actual_non_movable'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'actual_non_movable',
            'value' => $model->actual_non_movable,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->actual_non_movable,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'actual_non_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'cost_non_movable'); ?>
        <?php echo $form->textField($model, 'cost_non_movable'); ?>
        <?php echo $form->error($model, 'cost_non_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php // echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php
        $this->widget('application.extensions.cleditor.ECLEditor', array(
            'model' => $model,
            'attribute' => 'description',
            'options' => array(
                'width' => '600',
                'height' => 250,
                'useCSS' => true,
            ),
            'value' => $model->description,));
        ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->