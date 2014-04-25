<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	$model->idprojeto,
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Create Projeto', 'url'=>array('create')),
	array('label'=>'Update Projeto', 'url'=>array('update', 'id'=>$model->idprojeto)),
	array('label'=>'Delete Projeto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idprojeto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<h1>View Projeto #<?php echo $model->idprojeto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idprojeto',
		'tituloProjeto',
		'disciplina',
		'palavrasChave',
		'projeto',
		'idAluno',
	),
)); ?>
