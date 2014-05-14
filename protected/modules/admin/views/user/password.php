<?php
/* @var $this UserController */
/* @var $model User */



$this->menu = array(
    array('label' => 'List User', 'url' => array('index')),
);
?>

<h1>Изменение пароля</h1>

<?php
echo CHtml::form();
echo CHtml::textField('password');
echo CHtml::submitButton('Изменить');
echo CHtml::endForm();

