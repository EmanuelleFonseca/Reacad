<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . "F.A.Q.";

$this->breadcrumbs=array("F.A.Q.");

?>

<div class="container">  
      <ul class="thumbnails">   
  <li class="span3">  
    <a href="#" class="thumbnail">  
      <img src="http://img2.wikia.nocookie.net/__cb20131115045139/katawashoujo/images/1/11/Char_rin.png "alt="mysql tutorial" width="300" height="180" />  
    </a>
	<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>'PRINCIPAL'),
		array('label'=>'Perfil', 'icon'=>'user', 'url'=>'#'),
        array('label'=>'Projetos', 'icon'=>'book', 'url'=>'#'),
		array('label'=>'Avaliações','icon'=>'pencil', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
		array('label'=>'Mensagens','icon'=>'envelope', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'OUTROS LINKS'),
        array('label'=>'Configurações','icon'=>'cog', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'F.A.Q.','icon'=>'flag', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
    ),
)); ?>

<li class="span9"> 
    <ul class="nav nav-pills">
  <li class="active">
    <a href="http://localhost/reacad/index.php?r=projeto/create">Enviar Projeto</a>
  </li>
  <li><a href="#">Mensagens</a></li>
  <li><a href="#">Avaliações</a></li>
  </ul>
  <br/>
   <?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data'=>array('id'=>1, 'Nome'=>'Mark','Nasc'=>'19/01/1998', 'Email'=>'Otto', 'Telefone'=>1234, 'Curso'=>'CSS', 'Modalidade'=>'Integrado','Ano'=>'Terceiro','Idiomas'=>'Português, Espanhol','Curriculo'=>'http://www.fb.com','Descricao'=>'Teste qualquer palavra aqui. Teste qualquer palavra aqui. Teste qualquer palavra aqui
	Teste qualquer palavra aquiTeste qualquer palavra aquiTeste qualquer palavra aquiTeste qualquer palavra aqui'),
    'attributes'=>array(
        array('name'=>'Nome', 'label'=>'Nome:'),
		array('name'=>'Nasc', 'label'=>'Data de Nascimento:'),
        array('name'=>'Email', 'label'=>'Email:'),
		array('name'=>'Telefone', 'label'=>'Telefone:'),
        array('name'=>'Curso', 'label'=>'Curso:'),
		array('name'=>'Modalidade', 'label'=>'Modalidade:'),
		array('name'=>'Ano', 'label'=>'Ano:'),
		array('name'=>'Idiomas', 'label'=>'Idiomas:'),
		array('name'=>'Curriculo', 'label'=>'Curriculo:'),
		array('name'=>'Descricao', 'label'=>'Descrição:'),
		
		
		
		
    ),
)); ?>


  </li>      
</ul>  
<hr>  
</div> <!-- /container -->  



<br/><br/><br/><br/>



