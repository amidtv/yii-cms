<?php
/* @var $this PageController */
/* @var $model Page */



$this->menu=array(
	array('label'=>'Страницы', 'url'=>array('index')),
	array('label'=>'Просмотр страниц', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1>Создать страницу</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); 