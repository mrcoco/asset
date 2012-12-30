<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'movable-asset-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'code_item_movable'); ?>
        <?php echo $form->textField($model, 'code_item_movable', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'code_item_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name_item_movable'); ?>
        <?php echo $form->textField($model, 'name_item_movable', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name_item_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'price_book_movable'); ?>
        <?php echo $form->textField($model, 'price_book_movable'); ?>
        <?php echo $form->error($model, 'price_book_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'purchase_price_movable'); ?>
        <?php echo $form->textField($model, 'purchase_price_movable'); ?>
        <?php echo $form->error($model, 'purchase_price_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'volume_movable'); ?>
        <?php echo $form->textField($model, 'volume_movable'); ?>
        <?php echo $form->error($model, 'volume_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'unit_movable'); ?>
        <?php // echo $form->textField($model,'unit_movable',array('size'=>50,'maxlength'=>50)); ?>
        <?php echo $form->dropDownList($model, 'unit_movable', $model->getUnitOptions()); ?>
        <?php echo $form->error($model, 'unit_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'life_movable'); ?>
        <?php // echo $form->textField($model, 'life_movable'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'life_movable',
            'value' => $model->life_movable,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->life_movable,
            ),
        ));
        ?>(yyyy-mm-dd)
<?php echo $form->error($model, 'life_movable'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'responsibility_movable'); ?>
        <?php echo $form->textField($model, 'responsibility_movable', array('size' => 50, 'maxlength' => 50)); ?>
<?php echo $form->error($model, 'responsibility_movable'); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->