<?php
/* @var $this PageController */

$this->breadcrumbs = array(
    'Категория:' . $model->category->title => array('index', 'id' => $model->category_id),
    $model->title
);
?>
<?php echo '<h1>' . $model->title . '<h1/>'; ?>
<?php
echo '<h5>' . date('j.m.Y. h:i', $model->created) . '<h5>';
?>
<hr />



<?php echo '<h5>' . $model->content . '<h5>'; ?>
<?php
if (yii::app()->user->isGuest):
    echo '<div class="flash-success">';
    echo 'Для коментариев зарегистрируйтесь';
    echo'</div>';
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => Comment::all($model->id),
        'itemView' => '_viewComment',
    ));
endif;
?>
<hr />
<?php
if (!yii::app()->user->isGuest):

    if (Yii::app()->user->hasFlash('comment')):

        echo '<div class="flash-success">';
        echo Yii::app()->user->getFlash('comment');
        echo'</div>';

    else:

        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => Comment::all($model->id),
            'itemView' => '_viewComment',
        ));


        echo $this->renderPartial('newComment', array('model' => $newComment));


    endif;

endif;
?>
   