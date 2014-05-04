<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . "Pesquisa";

$this->breadcrumbs=array("Pesquisa");

?>

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Pesquisar</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li class="active">Pesquisa</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<hr/>
<br/>
<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
		array('label'=>'Usuários', 'icon'=>'user', 'url'=>array('/aluno/index')),
        array('label'=>'Projetos', 'icon'=>'book', 'url'=>array('/projeto/index')),
		
    ),
)); ?>
<br/><br/><br/><br/>