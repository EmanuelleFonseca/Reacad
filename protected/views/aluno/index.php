<?php
/* @var $this AlunoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alunos',
);

$this->menu=array(
	array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Alunos</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
						<li><a href="index.html">Pesquisa</a> <span class="divider">/</span></li>
                        <li class="active">Alunos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<hr/>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


