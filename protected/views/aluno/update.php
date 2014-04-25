<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->idAluno=>array('view','id'=>$model->idAluno),
	'Update',
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'View Aluno', 'url'=>array('view', 'id'=>$model->idAluno)),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<h1>Update Aluno <?php echo $model->idAluno; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>