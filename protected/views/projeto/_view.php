<?php
/* @var $this ProjetoController */
/* @var $data Projeto */
?>

<div class="container">  
      <ul class="thumbnails">   
  <li class="span2">  
    <a href="#" class="thumbnail">  
      <img src="imagens/file.png"/ width="100px" height="80px">  
    </a>
  </li>
<li class="span9"> 
    <ul>
	<div class ="container">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloProjeto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tituloProjeto),'arquivos/' . $data->projeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->disciplina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('palavrasChave')); ?>:</b>
	<?php echo CHtml::encode($data->palavrasChave); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAluno')); ?>:</b>
	<?php echo CHtml::encode($data->emailAluno); ?>
	<br />


    </div>
  <br/>
  </ul>
 </li>      
</ul>  
</div>
