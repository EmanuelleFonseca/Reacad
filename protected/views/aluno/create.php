<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Create',
);
/*
$this->menu=array(
	array('label'=>'List Aluno', 'url'=>array('index')),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
*/
?>


<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                   <h1>Cadastre-se</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Início</a> <span class="divider">/</span></li>
                        <li class="active">Cadastro</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title --> 

<?php $this->renderPartial('_form', array('model'=>$model)); ?>