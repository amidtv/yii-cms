<?php
/* @var $this CommentController */
/* @var $model Comment */




Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comment-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление коментарием</h1>

<p>
    текст
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<?php
echo CHtml::form();
echo CHtml::submitButton('Подтвердить', array('name' => 'noban'));
echo CHtml::submitButton('Скрыть', array('name' => 'ban'));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'comment-grid',
    'selectableRows' => 2,
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
            'class' => 'CCheckBoxColumn',
            'id' => 'post_id',
        ),
        'status' => array(
            'name' => 'status',
            'value' => '($data->status==1)?"Доступно":"Скрыто"',
            'filter' => array(0 => 'Скрыто', 1 => 'Опубликовано'),
        ),
        'content',
        'page_id' => array(
            'name' => 'page_id',
            'value' => '$data->page->title',
            'filter' => Page::all(),
        ),
        'created' => array(
            'name' => 'created',
            'value' => 'date("j.m.Y H:i",$data->created)',
            'filter' => false,
        ),
        'user_id' => array(
            'name' => 'user_id',
            'value' => '$data->user->username',
            'filter' => User::all(),
        ),
        'guest',
        array(
            'class' => 'CButtonColumn',
            'updateButtonOptions' => array('Сохранть'
            ),
        ),
    ),
));
?>
<?php
        echo CHtml::endForm();
?>