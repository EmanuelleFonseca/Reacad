<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->idAluno,
);

$this->menu=array(
	//array('label'=>'List Aluno', 'url'=>array('index')),
	//array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'Update Aluno', 'url'=>array('update', 'id'=>$model->idAluno)),
	//array('label'=>'Delete Aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAluno),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nomeAluno; ?></h1>
<div class="container">  
      <ul class="thumbnails">   
  <li class="span3">  
    <a href="#" class="thumbnail">  
      <img src="http://img2.wikia.nocookie.net/__cb20131115045139/katawashoujo/images/1/11/Char_rin.png "alt="mysql tutorial" width="300" height="180" />  
    </a>
	<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
		array('label'=>'Perfil', 'icon'=>'user', 'url'=>'#'),
        array('label'=>'Projetos', 'icon'=>'book', 'url'=>'#'),
		array('label'=>'Avaliações','icon'=>'pencil', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Mensagens','icon'=>'envelope', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Configurações','icon'=>'cog', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'F.A.Q.','icon'=>'flag', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
    ),
)); ?>

<li class="span9"> 
    <ul class="nav nav-pills">
  <li class="active">
    <a href="http://localhost/reacad/index.php?r=projeto/create">Enviar Projeto</a>
  </li>
  <li><a href="#">Mensagens</a></li>
  <li><a href="#">Avaliações</a></li>
  </ul>
  <br/>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAluno',
		'nomeAluno',
		'emailAluno',
		'codigoAluno',
		'telefoneAluno',
		'cursoAluno'
	),
)); ?>
