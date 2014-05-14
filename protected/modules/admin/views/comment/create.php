<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Коментарии', 'url'=>array('index')),
	array('label'=>'Управление коментариями', 'url'=>array('admin')),
);
?>

<h1>Create Comment</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>