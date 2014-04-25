<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . "Pesquisa";

$this->breadcrumbs=array("Pesquisa");

?>

<h1>Pesquisar</h1>

<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
		array('label'=>'Usuários', 'icon'=>'user', 'url'=>array('/aluno/index')),
        array('label'=>'Projetos', 'icon'=>'book', 'url'=>'#'),
		
    ),
)); ?>
