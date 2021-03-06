<?php
/* @var $this AlunoController */
/* @var $data Aluno */
?>

<div class="container">  
      <ul class="thumbnails">   
  <li class="span2">  
    <a href="#" class="thumbnail">  
      <img src= "<?php echo 'fotos/'.$data->imgPerfil ?> " width="100px" height="80px">  
    </a>
  </li>
<li class="span9"> 
    <ul>
	<div class ="container">
    

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeAluno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nomeAluno), array('view', 'id'=>$data->emailAluno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAluno')); ?>:</b>
	<?php echo CHtml::encode($data->emailAluno); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoAluno')); ?>:</b>
	<?php echo CHtml::encode($data->codigoAluno); ?>
	<br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefoneAluno')); ?>:</b>
	<?php echo CHtml::encode($data->telefoneAluno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cursoAluno')); ?>:</b>
	<?php echo CHtml::encode($data->cursoAluno); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('imgPerfil')); ?>:</b>
	<?php echo CHtml::encode($data->imgPerfil); ?>
	<br /><br />
	
 </div>
  <br/>
  </ul>
 </li>      
</ul>  
</div>
