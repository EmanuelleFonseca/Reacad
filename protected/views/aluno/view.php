<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->emailAluno,
);

$this->menu=array(
	//array('label'=>'List Aluno', 'url'=>array('index')),
	//array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'Update Aluno', 'url'=>array('update', 'id'=>$model->emailAluno)),
	//array('label'=>'Delete Aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAluno),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Aluno', 'url'=>array('admin')),
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
                        <li class="active"><?php echo $model->nomeAluno; ?></li>
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
      <img src="<?php echo 'fotos/'.$model->imgPerfil ?> " alt="perfil" width="300" height="180" <?php echo CHtml::link(CHtml::encode($model->nomeAluno), array('view', 'id'=>$model->emailAluno)); ?> 
    </a>

<li class="span9">
	
  <br/>

<?php $this->widget('bootstrap..widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	   array('name'=>'emailAluno',),
	   array('name'=>'codigoAluno',),
	   array('name'=>'telefoneAluno',),
	   array('name'=>'cursoAluno',),
	   array('name'=>'curriculo',),
	),
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
                            'icon'=>'book',
                            'label'=>'Projetos', 
                            'url'=>array('/aluno/projetos', 'id'=>$model->emailAluno)
				     )); ?>



 </li>      
</ul>  
<hr> 
</div>

