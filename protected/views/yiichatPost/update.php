<?php
/* @var $this YiichatPostController */
/* @var $model YiichatPost */

$this->breadcrumbs=array(
	'Yiichat Posts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YiichatPost', 'url'=>array('index')),
	array('label'=>'Create YiichatPost', 'url'=>array('create')),
	array('label'=>'View YiichatPost', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YiichatPost', 'url'=>array('admin')),
);
?>

<h1>Update YiichatPost <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>