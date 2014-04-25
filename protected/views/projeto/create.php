<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<h1>Cadastro de Projeto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>