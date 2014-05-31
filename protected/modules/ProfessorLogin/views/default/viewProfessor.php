<?php
/* @var $this ProfessorController */
/* @var $model Professor */


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
