<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'comment-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <?php echo $form->labelEx($model, 'guest'); ?>
        <?php echo $form->textField($model, 'guest', array('size' => 11, 'maxlength' => 11)); ?>
        <?php echo $form->error($model, 'guest'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'content'); ?>
        <?php echo $form->textArea($model, 'content', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'content'); ?>
    </div>


    <?php if (CCaptcha::checkRequirements()): ?>
        <div class="row">
            <?php echo $form->labelEx($model, 'verifyCode'); ?>
            <div>
                <?php $this->widget('CCaptcha'); ?>
                <?php echo $form->textField($model, 'verifyCode'); ?>
            </div>
            <div class="hint">Пожалуйста, введите буквы, изображенные на картинке выше. 
<br/> Буквы вводятся без учета регистра.</div>
            <?php echo $form->error($model, 'verifyCode'); ?>
        </div>
    <?php endif; ?>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Отправить'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->


