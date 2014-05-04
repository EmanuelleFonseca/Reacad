<?php
/* @var $this ProjetoController */
/* @var $model Projeto */

$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Projeto', 'url'=>array('index')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Cadastro de Projeto</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li class="active">Cadastro de Projeto</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<hr/>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>