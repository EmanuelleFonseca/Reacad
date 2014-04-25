<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professors'=>array('index'),
	$model->idProfessor,
);

$this->menu=array(
	array('label'=>'List Professor', 'url'=>array('index')),
	array('label'=>'Create Professor', 'url'=>array('create')),
	array('label'=>'Update Professor', 'url'=>array('update', 'id'=>$model->idProfessor)),
	array('label'=>'Delete Professor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProfessor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Professor', 'url'=>array('admin')),
);
?>

<h1>View Professor #<?php echo $model->idProfessor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProfessor',
		'nomeProfessor',
		'emailProfessor',
		'telefoneProfessor',
		'senhaProfessor',
		'areaEnsino',
		'siape',
	),
)); ?>
