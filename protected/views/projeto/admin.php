<?php
/* @var $this ProjetoController */
/* @var $model Projeto */
$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	'- Buscar Projetos',
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Create Projeto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#projeto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Projetos</h1>

<p>
	Informe uma ou mais das características pedidas abaixo e aperte a tecla "enter" para encontrar o(s) projeto(s) que deseja.
</p>
<!--
<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?> 
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'projeto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tituloProjeto',
		'disciplina',
		'palavrasChave',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}',
			
		),
	),
)); ?>
