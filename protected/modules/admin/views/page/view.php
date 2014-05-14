<?php
/* @var $this pageController */
/* @var $model page */

$this->breadcrumbs=array(
	'pages'=>array('index'),
	$model->title,
);

$this->menu=array(
array('label'=>'Страницы', 'url'=>array('index')),
	array('label'=>'Создать страницу', 'url'=>array('create')),
	array('label'=>'Просмотр страниц', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Удалить страницу', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),

);
?>

<h1>Просмотр страниц #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',

		'status',
		'category_id',
	),
));