<?php
/* @var $this UserController */
/* @var $model User */


$this->menu = array(
    array('label' => 'Пользователи', 'url' => array('index')),
    array('label' => 'Изменение пользователя', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Удалить пользователя', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'username',
        'password',
        'created',
        'ban',
        'role',
        'email',
    ),
));
