<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'movable-usage-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'user_id'); ?>
        <?php // echo $form->textField($model,'user_id',array('size'=>16,'maxlength'=>16)); ?>
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
		document.getElementById(\'MovableUsage_user_id\').value = ui.item.id; 
		}',
            ),
            'htmlOptions' => array(
                'style' => 'height:25px;width:200px;padding:0px 5px;',
                'class' => 'mf'
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
        <?php echo $form->labelEx($model, 'from_usage'); ?>
        <?php echo $form->textField($model, 'from_usage', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'from_usage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'destination_usage'); ?>
        <?php echo $form->textField($model, 'destination_usage', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'destination_usage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'set_out_usage'); ?>
        <?php // echo $form->textField($model, 'set_out_usage'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'set_out_usage',
            'value' => $model->set_out_usage,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->set_out_usage,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'set_out_usage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'estimates_until_usage'); ?>
        <?php // echo $form->textField($model, 'estimates_until_usage'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'estimates_until_usage',
            'value' => $model->estimates_until_usage,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->estimates_until_usage,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'estimates_until_usage'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'actual_until_usage'); ?>
        <?php // echo $form->textField($model, 'actual_until_usage'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'actual_until_usage',
            'value' => $model->actual_until_usage,
            // additional javascript options for the date picker plugin
            'options' => array(
                'rows' => 1,
                'cols' => 10,
                'showAnim' => 'fold',
                'showButtonPanel' => true,
                'autoSize' => true,
                'dateFormat' => 'yy-mm-dd',
                'defaultDate' => $model->actual_until_usage,
            ),
        ));
        ?>(yyyy-mm-dd)
        <?php echo $form->error($model, 'actual_until_usage'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->