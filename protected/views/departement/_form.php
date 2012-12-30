<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'departement-form',
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'code_dept'); ?>
        <?php echo $form->textField($model, 'code_dept', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'code_dept'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name_dept'); ?>
        <?php echo $form->textField($model, 'name_dept', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'name_dept'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'id_head_dept'); ?>
        <?php // echo $form->textField($model,'id_head_dept',array('size'=>10,'maxlength'=>10)); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => new User(),
            'attribute' => 'id',
            'sourceUrl' => array('cekUser'),
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'minLength' => '1',
                'search' => 'js:function(event, ui){
		$(\'#id_head_dept\').val(-1);
		}',
                'select' => 'js:function(event, ui){
		document.getElementById(\'Departement_id_head_dept\').value = ui.item.id; 
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

        echo $form->hiddenField($model, 'id_head_dept');
        ?>

        <?php echo $form->error($model, 'id_head_dept'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->