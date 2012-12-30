<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'equipment-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'code_item'); ?>
        <?php echo $form->textField($model, 'code_item', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'code_item'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name_item'); ?>
        <?php echo $form->textField($model, 'name_item', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name_item'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'price_book'); ?>
        <?php echo $form->textField($model, 'price_book'); ?>
        <?php echo $form->error($model, 'price_book'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'purchase_price'); ?>
        <?php echo $form->textField($model, 'purchase_price'); ?>
        <?php echo $form->error($model, 'purchase_price'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'amount_of_supplies'); ?>
        <?php echo $form->textField($model, 'amount_of_supplies'); ?>
        <?php echo $form->error($model, 'amount_of_supplies'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'unit_equipment'); ?>
        <?php // echo $form->textField($model, 'unit_equipment', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->dropDownList($model, 'unit_equipment', $model->getUnitOptions()); ?>
        <?php echo $form->error($model, 'unit_equipment'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->