<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>
    
    

	<div class="row">
		<?php echo $form->label($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',array(''=>'',1=>'Опубликовано', 0=>'Скрыто')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'page_id'); ?>

        <?php echo $form->dropDownList($model,'page_id',page::all(),array('empty'=>'')); ?>
	</div>

	

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
	
        <?php echo $form->dropDownList($model,'user_id',user::all(),array('empty'=>'')); ?>
        
	</div>

	<div class="row">
		<?php echo $form->label($model,'guest'); ?>
		<?php echo $form->textField($model,'guest',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->