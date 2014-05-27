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



 </li>      
</ul>  
<hr> 
</div>

