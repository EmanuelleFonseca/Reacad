<?php
/* @var $this AvaliacaoController */
/* @var $data Avaliacao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAvaliacao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAvaliacao), array('view', 'id'=>$data->idAvaliacao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nota')); ?>:</b>
	<?php echo CHtml::encode($data->nota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailProfessor')); ?>:</b>
	<?php echo CHtml::encode($data->emailProfessor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProjeto')); ?>:</b>
	<?php echo CHtml::encode($data->idProjeto); ?>
	<br />


</div>