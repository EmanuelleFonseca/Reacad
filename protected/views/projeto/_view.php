<?php
/* @var $this ProjetoController */
/* @var $data Projeto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tituloProjeto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tituloProjeto), array('view', 'id'=>$data->idprojeto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->disciplina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('palavrasChave')); ?>:</b>
	<?php echo CHtml::encode($data->palavrasChave); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projeto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->projeto),'arquivos/' . $data->projeto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAluno')); ?>:</b>
	<?php echo CHtml::encode($data->idAluno); ?>
	<br />


</div>