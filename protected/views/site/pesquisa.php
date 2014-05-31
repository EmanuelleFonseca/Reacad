<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . "Pesquisa";

$this->breadcrumbs=array("Pesquisa");

?>

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Área do Professor</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li class="active">Área do Professor</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<hr/>
<br/>
<div class="row-fluid">
                <p> 
                	<h3>Olá, professor!</h3>
                	<li>Para avaliar projetos, clique:</li>
                	<br/>
                	&nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                	<?php $this->widget('bootstrap.widgets.TbButton', array(
                	        'type'=>'primary',
                            'label'=>'Lista de Projetos', 
                            'url'=>array('/projeto/admin'),
				     )); ?>
                	<br/><br/>
                	<li>Você será levado á lista de projetos, onde selecionará aqueles que deseja avaliar;</li>
                	<li>Após escolher, você será direcionado à página individual do projeto, onde deverá clicar em "avaliar Projeto";</li>
                	<li>Como último passo, efetue seu login e dê notas de 0 (ZERO) a 10 (DEZ) para os projetos.</li>
                </p>
        </div>

<br/><br/><br/><br/>