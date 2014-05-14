<?php
/* @var $this UserController */
/* @var $model User */





Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Users</h1>

<p>
    Текст
</p>

<?php echo CHtml::link('Расширенный поиск', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->
<?php
echo CHtml::form();
echo CHtml::submitButton('Разбанить', array('name' => 'noban'));
echo CHtml::submitButton('Забанить', array('name' => 'ban'));
echo CHtml::form();
echo CHtml::submitButton('Админ', array('name' => 'admin'));
echo CHtml::submitButton('Не админ', array('name' => 'noadmin'));
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    'selectableRows' => 2,
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array('class' => 'CCheckBoxColumn',
            'id' => 'User_id'),
        'username',
        'password',
        'email',
        'created' => array(
            'name' => 'created',
            'value' => 'date("j.m.Y H:i",$data->created)'),
        'ban' => array(
            'name' => 'ban',
            'value' => '($data->ban==1)?" ":"Бан"',
            'filter' => array(0 => 'Да', 1 => 'Нет')
        ),
        'role' => array(
            'name' => 'role',
            'value' => '($data->role==1)?"User":"Admin"',
            'filter' => array(2 => 'Admin', 1 => 'User')
        ),
        /*
          'email',
         */
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
<?php
echo CHtml::endForm();

