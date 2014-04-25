<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	$model->idprojeto=>array('view','id'=>$model->idprojeto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Create Projeto', 'url'=>array('create')),
	array('label'=>'View Projeto', 'url'=>array('view', 'id'=>$model->idprojeto)),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<h1>Update Projeto <?php echo $model->idprojeto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>