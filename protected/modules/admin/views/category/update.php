<?php
/* @var $this CategoryController */
/* @var $model Category */



$this->menu=array(
	array('label'=>'Категории', 'url'=>array('index')),
	array('label'=>'Создать еатегорию', 'url'=>array('create')),
	

);
?>

<h1>Изменить категорию <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); 