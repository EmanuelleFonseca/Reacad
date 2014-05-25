<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Create Aluno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aluno-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Alunos</h1>

<p>
	Informe uma ou mais das características pedidas abaixo e aperte a tecla "enter" para encontrar o(s) aluno(s) que deseja.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aluno-grid',
	'dataProvider'=>$model->search(),
    'filter'=>$model,
	'columns'=>array(
		'nomeAluno',
		'emailAluno',
		'codigoAluno',
		'telefoneAluno',
		'cursoAluno',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
		),
	),
)); ?>