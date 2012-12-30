<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'equipment-usage-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'responsibility_usage'); ?>
        <?php echo $form->textField($model, 'responsibility_usage', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'responsibility_usage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'amount_of_usage'); ?>
        <?php echo $form->textField($model, 'amount_of_usage'); ?>
        <?php echo $form->error($model, 'amount_of_usage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'type'); ?>
        <?php // echo $form->textField($model, 'type', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->radioButton($model, 'type', array('value' => 'beli', 'uncheckValue' => null)); ?> Beli
        <?php echo $form->radioButton($model, 'type', array('value' => 'jual', 'uncheckValue' => null)); ?> Jual
        <?php echo $form->error($model, 'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'date_usage'); ?>
        <?php // echo $form->textField($model, 'date_usage'); ?>

        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'date_usage',
            'value' => $model->date_usage,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->date_usage,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'date_usage'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->