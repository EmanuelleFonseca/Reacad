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

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li><a href="#">Aluno</a> <span class="divider">/</span></li>
                        <li class="active"><?php echo $model->nomeProfessor; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->
<div class="container">  
      <ul class="thumbnails">   
  <li class="span2">  
    <a href="#" class="thumbnail"> 
    	<img src="imagens/professor.png" alt="perfil" width="300" height="180" <?php echo CHtml::link(CHtml::encode($model->nomeProfessor), array('view', 'id'=>$model->idProfessor)); ?>  
    </a>

<li class="span9">
	<div class="row-fluid">
        <div class="span7">
            <?php $this->widget('bootstrap.widgets.TbMenu', array(
               'type'=>'pills',
               'items'=>array(
		          array('label'=>'Mensagens','icon'=>'envelope', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
                  array('label'=>'Configurações','icon'=>'cog', 'url'=>array('update', 'id'=>$model->idProfessor), 'visible'=>!Yii::app()->user->isGuest),
			   ))); ?>    
        </div>
    </div>
  <br/>


<?php $this->widget('bootstrap..widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'nomeProfessor',),
		array('name'=>'emailProfessor',),
		array('name'=>'telefoneProfessor',),
		array('name'=>'areaEnsino',),
		array('name'=>'siape',),
	),
)); ?>
