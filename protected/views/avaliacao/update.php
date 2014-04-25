<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */

$this->breadcrumbs=array(
	'Avaliacaos'=>array('index'),
	$model->idAvaliacao=>array('view','id'=>$model->idAvaliacao),
	'Update',
);

$this->menu=array(
	array('label'=>'List Avaliacao', 'url'=>array('index')),
	array('label'=>'Create Avaliacao', 'url'=>array('create')),
	array('label'=>'View Avaliacao', 'url'=>array('view', 'id'=>$model->idAvaliacao)),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<h1>Update Avaliacao <?php echo $model->idAvaliacao; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>