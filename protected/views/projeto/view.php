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
	array('label'=>'Delete Projeto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idprojeto),'confirm'=>'Você tem certeza que quer deletar isso?')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Projeto</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
						<li><a href="index.html">Projetos</a> <span class="divider">/</span></li>
                        <li class="active"><?php echo $model->tituloProjeto; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<hr/>

<div class="container">  
      <ul class="thumbnails">   
  <li class="span3">  
    <a href="#" class="thumbnail">  
      <img src="imagens/file.png" width="150px" height="150px"/>  
    </a>
  </li> 
  <li class="span8">
  	<h3>Título: <?php echo CHtml::link(CHtml::encode($model->tituloProjeto),'arquivos/' . $model->projeto); ?></h3>
  	<?php $this->widget('bootstrap..widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'disciplina',
		'palavrasChave',
		'idAluno',
	),
)); ?>

  </li>    
</ul>  
</div>
	

