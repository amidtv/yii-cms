<?php


$this->menu=array(
	array('label'=>'Журнал коментариев', 'url'=>array('index')),
	
	array('label'=>'Удалить коментарий', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверенны?')),
	
);
?>

<h1>Просмотр коментариев #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'page_id',
		'created',
		'user_id',
		'guest',
	),
));