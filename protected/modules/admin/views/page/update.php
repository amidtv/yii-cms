<?php
/* @var $this PageController */
/* @var $model Page */


$this->menu=array(
	array('label'=>'Страницы', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
	array('label'=>'Просмотр страниц', 'url'=>array('view', 'id'=>$model->id)),
	
);
?>

<h1>Update Page <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); 