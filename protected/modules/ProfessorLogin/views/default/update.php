<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->emailProfessor=>array('view','id'=>$model->emailProfessor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Professor', 'url'=>array('index')),
	array('label'=>'Create Professor', 'url'=>array('create')),
	array('label'=>'View Professor', 'url'=>array('view', 'id'=>$model->emailProfessor)),
	array('label'=>'Manage Professor', 'url'=>array('admin')),
);
?>

<h1>Update Professor <?php echo $model->emailProfessor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>